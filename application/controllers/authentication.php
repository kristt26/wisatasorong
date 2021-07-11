<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authentication extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'Auth');
        
    }
    
    public function index()
    {
        $this->Auth->check();
        $this->load->view('auth');
    }
    public function login()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->Auth->login($data);
        if ($result) {
            $result['is_login'] = true;
            $this->session->set_userdata($result);
            echo json_encode($result);
        } else {
            $this->session->set_flashdata('pesan', 'Username tidak ditemukan!!!');
            // redirect('auth');
            http_response_code(401);
            echo json_encode("User nama dan password tidak ditemukan");
        }
    }

}

/* End of file authentication.php */