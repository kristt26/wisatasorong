<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_model extends CI_Model
{

    public function get($type)
    {
        if (is_null($type)) {
            return $this->db->query("SELECT
                `lokasi`.*,
                (SELECT file FROM foto WHERE foto.lokasiid=lokasi.id AND status=1) AS foto
            FROM
                `lokasi`")->result_array();
        } else {
            if ($type == "Wisata") {
                return $this->db->query("SELECT
                `lokasi`.`id`,
                `lokasi`.`type`,
                `lokasi`.`nama`,
                `lokasi`.`alamat`,
                `lokasi`.`latitude`,
                `lokasi`.`longitude`,
                `lokasi`.`kecamatanid`,
                `lokasi`.`kelurahanid`,
                `lokasi`.`userid`,
                `lokasi`.`deskripsi`,
                `lokasi`.`kategoriid`,
                `kategori`.`nama` AS `kategori`,
                `kategori`.`warna`,
                (SELECT `foto`.`file` FROM `foto` WHERE `foto`.`lokasiid` = `lokasi`.`id` AND `foto`.`status` = 1) AS `foto`
              FROM
                `lokasi`
                LEFT JOIN `kategori` ON `kategori`.`id` = `lokasi`.`kategoriid`
              WHERE
                `lokasi`.`type` = '$type'")->result_array();
            } else {
                return $this->db->query("SELECT
                `lokasi`.*,
                (SELECT file FROM foto WHERE foto.lokasiid=lokasi.id AND status=1) AS foto
            FROM
                `lokasi` WHERE lokasi.type = '$type'")->result_array();
            }
        }
    }

    public function getId($id)
    {
        return $this->db->query("SELECT
            `lokasi`.*,
            (SELECT file FROM foto WHERE foto.lokasiid=lokasi.id AND status=1) AS foto
        FROM
            `lokasi` WHERE lokasi.id = '$id'")->row_array();
    }

    public function post($data)
    {
        $this->load->library('MyLib');
        $this->db->trans_begin();
        if (isset($data['kategoriid'])) {
            $item = [
                'nama' => $data['nama'],
                'alamat' => $data['alamat'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'kecamatanid' => $data['kecamatanid'],
                'kelurahanid' => $data['kelurahanid'],
                'userid' => $this->session->userdata('id'),
                'type' => $data['type'],
                'deskripsi' => $data['deskripsi'],
                'kategoriid' => $data['kategoriid'],
            ];
        } else {
            $item = [
                'nama' => $data['nama'],
                'alamat' => $data['alamat'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'kecamatanid' => $data['kecamatanid'],
                'kelurahanid' => $data['kelurahanid'],
                'userid' => $this->session->userdata('id'),
                'type' => $data['type'],
                'deskripsi' => $data['deskripsi'],
            ];
        }
        $this->db->insert('lokasi', $item);
        $lokasiid = $this->db->insert_id();
        $item = [
            'file' => isset($data['file']['base64']) ? $this->mylib->decodebase64($data['file']['base64'], 'galeri') : "",
            'lokasiid' => $lokasiid,
            'status' => 1,
        ];
        $this->db->insert('foto', $item);
        if ($this->db->trans_status()) {
            $this->db->trans_commit();
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }

    public function put($data)
    {
        $this->load->library('MyLib');
        $this->load->helper("file");
        $this->db->trans_begin();
        if (isset($data['kategoriid'])) {
            $item = [
                'nama' => $data['nama'],
                'alamat' => $data['alamat'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'kecamatanid' => $data['kecamatanid'],
                'kelurahanid' => $data['kelurahanid'],
                'userid' => $this->session->userdata('id'),
                'type' => $data['type'],
                'deskripsi' => $data['deskripsi'],
                'kategoriid' => $data['kategoriid'],
            ];
        } else {
            $item = [
                'nama' => $data['nama'],
                'alamat' => $data['alamat'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'kecamatanid' => $data['kecamatanid'],
                'kelurahanid' => $data['kelurahanid'],
                'userid' => $this->session->userdata('id'),
                'type' => $data['type'],
                'deskripsi' => $data['deskripsi'],
            ];
        }
        $this->db->update('lokasi', $item, ['id' => $data['id']]);
        $foto = $this->db->get_where("foto", ['lokasiid' => $data['id'], 'status' => 1])->row_array();
        if (!is_null($data['file'])) {
            $item = [
                'file' => isset($data['file']['base64']) ? $this->mylib->decodebase64($data['file']['base64'], 'galeri') : "",
                'lokasiid' => $data['id'],
                'status' => 1,
            ];
            $this->db->delete('foto', ['lokasiid' => $data['id'], 'status' => 1]);
            $this->db->insert('foto', $item);
        }
        if ($this->db->trans_status()) {
            $this->db->trans_commit();
            unlink("public/img/galeri/".$foto['file']);
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }

    public function delete($id)
    {
        return $this->db->delete('lokasi', ['id'=>$id]);
    }
}

/* End of file Wisata_model.php */
