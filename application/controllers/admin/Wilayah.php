<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Wilayah_model', 'wilayah');

    }

    public function index()
    {
        $content['content'] = $this->load->view('admin/wilayah/index', '', true);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function get($id = null)
    {
        $result = $this->wilayah->get($id);
        echo json_encode($result);
    }


    public function post()
    {
        $data = $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->wilayah->post($data);
        echo json_encode($result);
    }

    public function put()
    {
        $data = $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->wilayah->put($data);
        echo json_encode($result);
    }

    public function delete($id = null)
    {
        $id= $this->input->get('id');
        $result = $this->wilayah->delete($id);
        echo json_encode($result);
    }
    public function postKelurahan()
    {
        $data = $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->wilayah->postKelurahan($data);
        echo json_encode($result);
    }

    public function putKelurahan()
    {
        $data = $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->wilayah->putKelurahan($data);
        echo json_encode($result);
    }

    public function deleteKelurahan($id = null)
    {
        $id= $this->input->get('id');
        $result = $this->wilayah->deleteKelurahan($id);
        echo json_encode($result);
    }

}

/* End of file Wilayah.php */
