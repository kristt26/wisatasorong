<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kategori_model', 'Kategori');
        
    }
    

    public function index()
    {
        $content['content'] = $this->load->view('admin/kategori/index', '', TRUE);
        $this->load->view('admin/_shared/layout', $content);
    }
    public function get($id = null)
    {
        $result = $this->Kategori->get($id);
        echo json_encode($result);
    }


    public function post()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->Kategori->post($data);
        echo json_encode($result);
    }

    public function put()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->Kategori->put($data);
        echo json_encode($result);
    }

    public function delete($id = null)
    {
        $result = $this->Kategori->delete($id);
        echo json_encode($result);
    }
}

/* End of file Kategori.php */
