<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Lokasi_model', 'lokasi');

    }

    public function index()
    {
        $content['content'] = $this->load->view('admin/wisata/index', '', true);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function get()
    {
        $result = $this->lokasi->get("Wisata");
        echo json_encode($result);
    }

    public function getId($id = null)
    {
        $result = $this->lokasi->getId($id);
        echo json_encode($result);
    }

    public function tambah()
    {
        $content['content'] = $this->load->view('admin/wisata/post', '', true);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function post()
    {
        $data = $data = json_decode($this->input->raw_input_stream, true);
        $result = $this->lokasi->post($data);
        echo json_encode($result);
    }

    public function put()
    {
        $data = $data = json_decode($this->input->raw_input_stream, true);
        $result = $this->lokasi->put($data);
        echo json_encode($result);
    }

    public function delete($id = null)
    {
        # code...
    }

}

/* End of file Wisata.php */
