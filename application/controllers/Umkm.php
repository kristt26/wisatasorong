<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Lokasi_model', 'lokasi');
        $this->load->model('admin/Galery_model', 'galery');
    }

    public function index()
    {
        $data = [
            'umkm' => $this->lokasi->get('UMKM'),
            'galery' => $this->galery->getAll(),
            'breadcrumbs' => 'UMKM',
        ];
        $content['content'] = $this->load->view('guest/umkm/index', $data, true);

        $this->load->view('guest/_shared/guest', $content);
    }

    public function detail($id = null)
    {
        $data = [
            'wisata' => $this->lokasi->getId($id),
            'galery' => $this->galery->get($id),
            'breadcrumbs' => '<a href="' . base_url('umkm') . '">UMKM</a><i class="fa fa-angle-double-right"></i><span>Detail UMKM</span>',
        ];
        $content['content'] = $this->load->view('guest/umkm/detail', $data, true);
        $this->load->view('guest/_shared/guest', $content);
    }

}
