<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galery_model extends CI_Model {
    public function get($id)
    {
        return [
            'lokasi'=>$this->db->get_where('lokasi', ['id'=>$id])->row_array(), 
            'foto'=>$this->db->get_where('foto', ['lokasiid'=>$id, 'status'=>0])->result_array()
        ];
    }

    public function post($data)
    {
        $this->load->library('MyLib');
        $item = [
            'file' => isset($data['file']['base64']) ? $this->mylib->decodebase64($data['file']['base64'], 'galeri') : "",
            'lokasiid' => $data['lokasiid'],
            'status' => 0,
        ];
        $this->db->insert('foto', $item);
        $data['id'] = $this->db->insert_id();
        $data['file'] = $item['file'];
        return $data;
    }
}

/* End of file Galery_model.php */
