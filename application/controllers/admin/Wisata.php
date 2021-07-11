<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Lokasi_model', 'lokasi');
        
    }
    

    public function index()
    {
        $content['content'] = $this->load->view('admin/wisata/index', '', TRUE);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function get($id = null)
    {
        $result = $this->lokasi->get("Wisata");
        echo json_encode($result);
    }

    public function tambah()
    {
        $content['content'] = $this->load->view('admin/wisata/post', '', TRUE);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function post()
    {
        $data = $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->lokasi->post($data);
        if($result)
            echo json_encode(true);
        else
            http_response_code(400);
            echo json_encode(false);
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

/* End of file Wisata.php */
