<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah_model extends CI_Model
{
    public function get($id)
    {
        $this->load->library('mylib');
        if (is_null($id)) {
            $kecamatans = $this->db->get('kecamatan')->result_object();
            $kelurahans = $this->db->get('kelurahan')->result_object();
            return ['kecamatans' => $kecamatans, 'kelurahans' => $kelurahans];
        }
    }
    public function post($data)
    {
        $this->db->insert('kecamatan', $data);
        $data['id'] = $this->db->insert_id();
        $data['kelurahans']= array();
        return $data;
    }
    public function put($data)
    {
        $this->db->update('kecamatan', ['nama'=>$data['nama']], ['id'=>$data['id']]);
        return $data;
    }
    public function delete($id)
    {
        return $this->db->delete('kecamatan', ['id'=>$id]);
    }
    public function postKelurahan($data)
    {
        $this->db->insert('kelurahan', $data);
        $data['id'] = $this->db->insert_id();
        return $data;
    }
    public function putKelurahan($data)
    {
        $this->db->update('kelurahan', ['nama'=>$data['nama']], ['id'=>$data['id']]);
        return $data;
    }
    public function deleteKelurahan($id)
    {
        return $this->db->delete('kelurahan', ['id'=>$id]);
    }
}

/* End of file Wilayah_model.php */
