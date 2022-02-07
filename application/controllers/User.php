<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_m');

        $level_akun = $this->session->userdata('level');
        if ($level_akun != "user") {

            return redirect('auth');
        }
    }
    public function index()
    {
        $data['judul'] = 'Dashboard Alumni';
        $data['nama'] = $this->session->userdata('nama');
        $telpon =  $this->session->userdata('telpon');
        $id_warga =  $this->session->userdata('id_warga');
        $data['data'] = $this->user_m->get_row_warga($telpon);
        $data['data2'] = $this->user_m->get_row_vaksin($id_warga);
        $data['antri'] = $this->user_m->no_antri($id_warga);
        $this->load->view('template_user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template_user/footer');
    }
}   

/* End of file User.php */
