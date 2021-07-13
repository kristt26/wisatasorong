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
        # code...
    }
    public function put($data)
    {
        # code...
    }
    public function delete($id)
    {
        # code...
    }

}

/* End of file Wilayah_model.php */
