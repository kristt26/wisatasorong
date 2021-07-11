<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Wilayah_model', 'wilayah');
        
    }
    
    public function index()
    {
        
    }

    public function get($id = null)
    {
        $result = $this->wilayah->get($id);
        echo json_encode($result);
    }

    public function tambah()
    {
        
    }

    public function post()
    {
        # code...
    }

    public function put()
    {
        # code...
    }

    public function delete($id = null)
    {
        # code...
    }

}

/* End of file Wilayah.php */
