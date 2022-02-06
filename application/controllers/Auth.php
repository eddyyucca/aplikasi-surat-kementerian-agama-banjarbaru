<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_m');
    }

    public function index()
    {
        $data['data'] = false;
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['judul'] = 'Login';
        $this->load->view('auth/template_auth/header', $data);
        $this->load->view('auth/index', $data);
        $this->load->view('auth/template_auth/footer', $data);
    }
    public function user_login()
    {
        $data['data'] = false;
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['judul'] = 'Login User';
        $this->load->view('auth/template_auth/header', $data);
        $this->load->view('auth/user_login', $data);
        $this->load->view('auth/template_auth/footer', $data);
    }

    public function auth()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = false;
            $data['judul'] = 'Login';
            $this->load->view('auth/template_auth/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('auth/template_auth/footer');
        } else {
            $nik = $this->input->post('nik');
            $password =  md5($this->input->post('password'));
            $cek = $this->auth_m->login($nik, $password);
            if ($cek == true) {
                foreach ($cek as $row);
                $this->session->set_userdata('telpon', $row->telpon);
                $this->session->set_userdata('nama', $row->nama);
                $this->session->set_userdata('id_warga', $row->id_warga);
                $this->session->set_userdata('nik', $row->nik);
                $this->session->set_userdata('level', $row->level);
                if ($row->level == "admin") {
                    redirect('admin');
                } elseif ($row->level == "user") {
                    redirect('user');
                }
            } else {
                $data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
                $data['judul'] = 'Login';
                $this->load->view('auth/template_auth/header', $data);
                $this->load->view('auth/index', $data);
                $this->load->view('auth/template_auth/footer');
            }
        }
    }
    public function auth_user()
    {
        $this->form_validation->set_rules('nip', 'NIP Pegawai', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = false;

            $data['judul'] = 'Login';
            $this->load->view('auth/template/header', $data);
            $this->load->view('auth/user_login', $data);
            $this->load->view('auth/template/footer');
        }

        $nip = $this->input->post('nip');
        $password =  md5($this->input->post('password'));
        $cek = $this->auth_m->login($nip, $password);
        if ($cek == true) {
            foreach ($cek as $row);
            $this->session->set_userdata('nip', $row->nip);
            $this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
            $this->session->set_userdata('id_pegawai', $row->id_pegawai);
            $this->session->set_userdata('bidang', $row->bidang);
            $this->session->set_userdata('level', $row->level);
            if ($row->level == "user") {
                redirect('user');
            } elseif ($row->level == "admin") {
                $this->session->set_Flashdata('pesan', "<div class='alert alert-danger' role='alert'>Password Salah !
        </div>");
                redirect("auth/user_login");
            }
        } else {
            $data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
            $data['judul'] = 'Login';
            $this->load->view('auth/template_auth/header', $data);
            $this->load->view('auth/user_login', $data);
            $this->load->view('auth/template_auth/footer');
        }
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function daftar()
    {
        $data['judul'] = 'Daftar Penerima Vaksin';
        $this->load->view('auth/template_auth/header', $data);
        $this->load->view('auth/daftar', $data);
        $this->load->view('auth/template_auth/footer');
    }

    public function proses_daftar()
    {
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|is_unique[warga.nik]');
        $this->form_validation->set_rules('telpon', 'Nomor Telpon', 'required|is_unique[warga.telpon]');
        if ($this->form_validation->run() == FALSE) {

            $data['nama'] = $this->session->userdata('nama');
            // $data['jurusan'] = $this->jurusan_m->get_all_jurusan();

            $data['judul'] = 'Daftar Penerima Vaksin';
            $this->load->view('auth/template_auth/header', $data);
            $this->load->view('auth/daftar', $data);
            $this->load->view('auth/template_auth/footer');
        } else {


            $data = array(
                'nik' => $this->input->post('no_ktp'),
                'nama' => $this->input->post('nama_lengkap'),
                'jk' => $this->input->post('jk'),
                'tempat' => $this->input->post('tempat'),
                'ttl' => $this->input->post('ttl'),
                'alamat' => $this->input->post('alamat'),
                'telpon' => $this->input->post('telpon'),
                'status' => "0",
            );
            $akun = array(
                'nik' => $this->input->post('no_ktp'),
                'password' => md5($this->input->post('telpon')),
                'level' => "user",
                'status' => "aktif",
            );
            $this->db->insert('warga', $data);
            $this->db->insert('akun', $akun);
            return redirect('auth/daftar');
        }
    }
}
