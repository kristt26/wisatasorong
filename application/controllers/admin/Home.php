<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function index()
    {
        $content['content'] = $this->load->view('admin/home/index', '', TRUE);
        
        $this->load->view('admin/_shared/layout', $content);
    }

}

/* End of file Controllername.php */
