<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Lokasi_model', 'lokasi');
        $this->load->model('admin/Galery_model', 'galery');
        $this->load->library('MyLib');
    }

    public function index()
    {
        $this->load->model('Auth_model');
        // $this->mylib->counter(base_url('public/guest/counter.txt'));
        $data = [
            'wisatas' => $this->lokasi->get('Wisata'),
            'umkms' => $this->lokasi->get('UMKM'),
            'galery' => $this->galery->getAll(),
            'counter' => $this->Auth_model->getcounter(),
        ];
        $this->load->view('guest/_shared/layout', $data);
    }
}
