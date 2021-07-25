<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        
    }
    

    public function index()
    {
        $data = $this->Auth_model->getcounter();
        $content['content'] = $this->load->view('admin/home/index', $data, TRUE);
        $this->load->view('admin/_shared/layout', $content);
    }

}

/* End of file Controllername.php */
