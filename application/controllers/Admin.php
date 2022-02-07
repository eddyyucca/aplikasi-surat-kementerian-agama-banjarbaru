<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model('jabatan_m');
        // $this->load->model('lowongan_m');
        $this->load->model('admin_m');
        // $this->load->model('alumni_m');

        // $level_akun = $this->session->userdata('level');
        // if ($level_akun != "admin") {
        //     return redirect('auth');
        // }
    }

    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');

        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_vaksin();

        $this->load->view('template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function jurusan()
    {
        $data['judul'] = 'Data Surat Masuk';
        $data['nama'] = $this->session->userdata('nama_alumni');
        $data['data'] = $this->jurusan_m->get_all_jurusan();
        $this->load->view('template/header', $data);
        $this->load->view('admin/jurusan/data_jurusan', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Admin.php */
