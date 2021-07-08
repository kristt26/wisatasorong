<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    public function index()
    {
        $content['content'] = $this->load->view('admin/wisata/index', '', TRUE);
        $this->load->view('admin/_shared/layout', $content);
    }

    public function get($id = null)
    {
        
    }

    public function tambah()
    {
        $content['content'] = $this->load->view('admin/wisata/post', '', TRUE);
        $this->load->view('admin/_shared/layout', $content);
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

/* End of file Wisata.php */
