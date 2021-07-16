<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

    public function index()
    {
        $data=[
            'breadcrumbs' => 'Visi & Misi'
        ];
        $content['content'] = $this->load->view('guest/visimisi/index', $data, TRUE);
        
        $this->load->view('guest/_shared/guest', $content);
    }

}

