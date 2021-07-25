<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function get($id)
    {
        return $this->db->get('kategori')->result_array();
    }
    public function post($data)
    {
        $this->db->insert('kategori', $data);
        $data['id'] = $this->db->insert_id();
        return $data;
    }
    public function put($data)
    {
        $item = [
            'nama'=>$data['nama'],
            'warna'=>$data['warna']
        ];
        $this->db->update('kategori', $item, ['id'=>$data['id']]);
        return $data;
    }
    public function delete($id)
    {
        return $this->db->delete('kategori', ['id'=>$id]);
    }
    

}

/* End of file Kategori_model.php */
