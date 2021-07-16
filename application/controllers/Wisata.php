<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Lokasi_model', 'lokasi');
        $this->load->model('admin/Galery_model', 'galery');
    }

    public function index()
    {
        $data=[
            'wisatas'=> $this->lokasi->get('Wisata'),
            'galery' => $this->galery->getAll(),
            'breadcrumbs' => 'Wisata'
        ];
        $content['content'] = $this->load->view('guest/wisata/index', $data, TRUE);
        
        $this->load->view('guest/_shared/guest', $content);
    }

    public function detail($id=null)
    {
        $data=[
            'wisata'=> $this->lokasi->getId($id),
            'galery' => $this->galery->get($id),
            'breadcrumbs' => '<a href="' . base_url('wisata') . '">Wisata</a><i class="fa fa-angle-double-right"></i><span>Detail Wisata</span>'
        ];
        $content['content'] = $this->load->view('guest/wisata/detail', $data, TRUE);
        $this->load->view('guest/_shared/guest', $content);
    }

}

