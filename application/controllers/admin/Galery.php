<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Galery_model', 'galery');
    }
    
    public function index()
    {
        $content['content'] = $this->load->view('admin/galery/index', '', TRUE);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function get()
    {
        $id = $this->input->get('id');
        $result = $this->galery->get($id);
        echo json_encode($result);
    }

    public function post()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->galery->post($data);
        echo json_encode($result);
    }

}

/* End of file Galery.php */
