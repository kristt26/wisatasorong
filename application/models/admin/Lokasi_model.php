<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_model extends CI_Model
{

    public function get($type)
    {
        return $this->db->query("SELECT
            `lokasi`.*,
            (SELECT file FROM foto WHERE foto.lokasiid=lokasi.id AND status=1) AS foto
        FROM
            `lokasi` WHERE lokasi.type = '$type'")->result_array();
    }

    public function post($data)
    {
        $this->load->library('MyLib');
        $this->db->trans_begin();
        $item = [
            'nama' => $data['nama'],
            'alamat' => $data['alamat'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'kecamatanid' => $data['kecamatanid'],
            'kelurahanid' => $data['kelurahanid'],
            'userid' => $this->session->userdata('id'),
            'type' => $data['type'],
        ];
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

}

/* End of file Wisata_model.php */
