<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Users_model', 'users');
    }

    public function index()
    {
        $content['content'] = $this->load->view('admin/users/index', '', true);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function get($id = null)
    {
        $result = $this->users->get();
        echo json_encode($result);
    }

    public function tambah()
    {
        $content['content'] = $this->load->view('admin/umkm/post', '', true);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function post()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->users->post($data);
        echo json_encode($result);
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

/* End of file Users.php */
