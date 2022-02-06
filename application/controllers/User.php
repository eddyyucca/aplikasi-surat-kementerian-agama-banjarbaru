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
    public function daftar_vaksin()
    {
        $data['judul'] = 'Dashboard Alumni';
        $data['nama'] = $this->session->userdata('nama');
        $telpon =  $this->session->userdata('telpon');
        $data['data'] = $this->user_m->get_row_warga($telpon);
        $this->load->view('template_user/header', $data);
        $this->load->view('user/daftar_vaksin', $data);
        $this->load->view('template_user/footer');
    }
    public function proses_daftar()
    {
        $tgl_vaksin = $this->input->post('tgl_vaksin');
        $x = $this->user_m->hitung($tgl_vaksin);
        $antrian = $x + 1;
        $data = array(
            'id_warga' =>  $this->session->userdata('id_warga'),
            'tgl_vaksin' =>   $this->input->post('tgl_vaksin'),
            'no_urut' =>   $antrian,
            'hasil' =>   "0",

        );
        $this->db->insert('permintaan_vaksin', $data);
        return redirect('user');
    }

    public function ubah_password()
    {
        $data['judul'] = 'Ubah Password Pegawai';
        $data['nama'] = $this->session->userdata('nama');
        $telpon =  $this->session->userdata('telpon');
        $data['data'] = $this->user_m->get_row_warga($telpon);
        $data['pesan'] = false;

        $this->load->view('template_user/header', $data);
        $this->load->view('user/password/ubah_password', $data);
        $this->load->view('template_user/footer');
    }

    public function proses_ubah_password()
    {
        $nik =  $this->session->userdata('nik');
        $password = md5($this->input->post('password_lama'));
        $cek = $this->user_m->cek_pass($password, $nik);

        if ($cek == true) {
            $data['judul'] = 'Ubah Password Pegawai';
            $data['nama'] = $this->session->userdata('nama');
            $data['pesan'] = '<div class="alert alert-success" role="alert">Password Berhasil Diubah !
    </div>';
            $data_update = array(
                "password" => md5($this->input->post('password_baru'))
            );
            $this->db->where('nik', $nik);
            $this->db->update('akun', $data_update);
            $this->load->view('template_user/header', $data);
            $this->load->view('user/password/ubah_password', $data);
            $this->load->view('template_user/footer');
        } else {
            $data['judul'] = 'Ubah Password Pegawai';
            $data['nama'] = $this->session->userdata('nama');


            $data['pesan'] = '<div class="alert alert-danger" role="alert">Password Salah !
    </div>';

            $this->load->view('template_user/header', $data);
            $this->load->view('user/password/ubah_password', $data);
            $this->load->view('template_user/footer');
        }
    }
}   

/* End of file User.php */
