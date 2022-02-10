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

        $level_akun = $this->session->userdata('level');
        if ($level_akun != "admin") {
            return redirect('auth');
        }
    }

    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');

        $data['judul'] = 'Dashboard';
        $bulan1 = '01';
        $bulan2 = '02';
        $bulan3 = '03';
        $bulan4 = '04';
        $bulan5 = '05';
        $bulan6 = '06';
        $bulan7 = '07';
        $bulan8 = '08';
        $bulan9 = '09';
        $bulan10 = '10';
        $bulan11 = '11';
        $bulan12 = '12';

        $data['bulan1'] = $this->admin_m->surat_masuk_st($bulan1);
        $data['bulan2'] = $this->admin_m->surat_masuk_st($bulan2);
        $data['bulan3'] = $this->admin_m->surat_masuk_st($bulan3);
        $data['bulan4'] = $this->admin_m->surat_masuk_st($bulan4);
        $data['bulan5'] = $this->admin_m->surat_masuk_st($bulan5);
        $data['bulan6'] = $this->admin_m->surat_masuk_st($bulan6);
        $data['bulan7'] = $this->admin_m->surat_masuk_st($bulan7);
        $data['bulan8'] = $this->admin_m->surat_masuk_st($bulan8);
        $data['bulan9'] = $this->admin_m->surat_masuk_st($bulan9);
        $data['bulan10'] = $this->admin_m->surat_masuk_st($bulan10);
        $data['bulan11'] = $this->admin_m->surat_masuk_st($bulan11);
        $data['bulan12'] = $this->admin_m->surat_masuk_st($bulan12);

        $data['all_bulan'] = $this->admin_m->surat_masuk_all();

        $bulan1 = '01';
        $bulan2 = '02';
        $bulan3 = '03';
        $bulan4 = '04';
        $bulan5 = '05';
        $bulan6 = '06';
        $bulan7 = '07';
        $bulan8 = '08';
        $bulan9 = '09';
        $bulan10 = '10';
        $bulan11 = '11';
        $bulan12 = '12';

        $data['kbulan1'] = $this->admin_m->surat_keluar_st($bulan1);
        $data['kbulan2'] = $this->admin_m->surat_keluar_st($bulan2);
        $data['kbulan3'] = $this->admin_m->surat_keluar_st($bulan3);
        $data['kbulan4'] = $this->admin_m->surat_keluar_st($bulan4);
        $data['kbulan5'] = $this->admin_m->surat_keluar_st($bulan5);
        $data['kbulan6'] = $this->admin_m->surat_keluar_st($bulan6);
        $data['kbulan7'] = $this->admin_m->surat_keluar_st($bulan7);
        $data['kbulan8'] = $this->admin_m->surat_keluar_st($bulan8);
        $data['kbulan9'] = $this->admin_m->surat_keluar_st($bulan9);
        $data['kbulan10'] = $this->admin_m->surat_keluar_st($bulan10);
        $data['kbulan11'] = $this->admin_m->surat_keluar_st($bulan11);
        $data['kbulan12'] = $this->admin_m->surat_keluar_st($bulan12);
        $data['kall_bulan'] = $this->admin_m->surat_keluar_all();

        $this->load->view('template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function data_pengguna()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');

        $data['data'] = $this->admin_m->get_all_akun();
        $this->load->view('template/header', $data);
        $this->load->view('admin/akun/data_akun', $data);
        $this->load->view('template/footer');
    }
    public function tambah_akun()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');

        $data['data'] = $this->admin_m->get_all_akun();
        $this->load->view('template/header', $data);
        $this->load->view('admin/akun/input_akun', $data);
        $this->load->view('template/footer');
    }
    public function edit_akun($id_akun)
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');

        $data['data'] = $this->admin_m->get_row_akun($id_akun);
        $this->load->view('template/header', $data);
        $this->load->view('admin/akun/edit_akun', $data);
        $this->load->view('template/footer');
    }
    public function proses_tambah_akun()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
            'bidang' => $this->input->post('bidang'),
            'jabatan' => $this->input->post('jabatan'),
            'level' => "user",

        );

        $this->db->insert('akun', $data);
        return redirect('admin/data_pengguna');
    }
    public function hapus_akun($id_akun)
    {
        $this->db->where('id_akun', $id_akun);
        $this->db->delete('akun');
        return redirect('admin/data_pengguna');
    }
    public function hapus_suratizin($id_surat_izin)
    {
        $this->db->where('id_surat_izin', $id_surat_izin);
        $this->db->delete('surat_izin');
        return redirect('admin/surat_izin');
    }
    public function proses_edit_akun($id_akun)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
            'bidang' => $this->input->post('bidang'),
            'jabatan' => $this->input->post('jabatan'),

        );
        $this->db->where('id_akun', $id_akun);
        $this->db->update('akun', $data);
        return redirect('admin/data_pengguna');
    }
    public function ubah_admin($id_akun)
    {
        $data = array(
            'level' => "admin",

        );
        $this->db->where('id_akun', $id_akun);
        $this->db->update('akun', $data);
        return redirect('admin/data_pengguna');
    }
    public function ubah_user($id_akun)
    {
        $data = array(
            'level' => "user",

        );
        $this->db->where('id_akun', $id_akun);
        $this->db->update('akun', $data);
        return redirect('admin/data_pengguna');
    }
    public function surat_masuk()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratmasuk();
        $data['bulan'] = false;
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_masuk/data_suratmasuk', $data);
        $this->load->view('template/footer');
    }
    public function cetak_surat_masuk()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratmasuk();
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_masuk/cetak_data_suratmasuk', $data);
        // $this->load->view('template/footer');
    }
    public function cetak_surat_masuk_bulan()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $bulan = $this->input->post('bulan');
        $data['data'] = $this->admin_m->get_all_suratmasuk_bulan($bulan);
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_masuk/cetak_data_suratmasuk', $data);
        // $this->load->view('template/footer');
    }
    public function caritanggal_sm()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['data'] = $this->admin_m->get_all_suratmasuk_bulan($bulan);
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_masuk/data_suratmasuk', $data);
        $this->load->view('template/footer');
    }
    public function caritanggal_sk()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['data'] = $this->admin_m->get_all_suratkeluar_bulan($bulan);
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_keluar/data_suratkeluar', $data);
        $this->load->view('template/footer');
    }
    public function data_disposisi()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_disposisi();
        $this->load->view('template/header', $data);
        $this->load->view('admin/disposisi/data_disposisi', $data);
        $this->load->view('template/footer');
    }
    public function tambah_disposisi()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $this->load->view('template/header', $data);
        $this->load->view('admin/disposisi/input_disposisi', $data);
        $this->load->view('template/footer');
    }
    public function edit_disposisi($id_disposisi)
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_row_disposisi($id_disposisi);
        $this->load->view('template/header', $data);
        $this->load->view('admin/disposisi/edit_disposisi', $data);
        $this->load->view('template/footer');
    }
    public function edit_suratkeluar($id_surat_keluar)
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_row_suratkeluar($id_surat_keluar);
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_keluar/edit_suratkeluar', $data);
        $this->load->view('template/footer');
    }
    public function proses_tambah_disposisi()
    {
        $data = array(
            'nama_disposisi' => $this->input->post('nama_disposisi'),

        );

        $this->db->insert('disposisi', $data);
        return redirect('admin/data_disposisi');
    }
    public function proses_edit_disposisi($id_disposisi)
    {
        $data = array(
            'nama_disposisi' => $this->input->post('nama_disposisi'),

        );
        $this->db->where('id_disposisi', $id_disposisi);
        $this->db->update('disposisi', $data);
        return redirect('admin/data_disposisi');
    }
    public function hapus_disposisi($id_disposisi)
    {
        $this->db->where('id_disposisi', $id_disposisi);
        $this->db->delete('disposisi');
        return redirect('admin/data_disposisi');
    }
    public function hapus_suratmasuk($id_surat_masuk)
    {
        $this->db->where('id_surat_masuk', $id_surat_masuk);
        $this->db->delete('surat_masuk');
        return redirect('admin/surat_masuk');
    }
    public function tambah_surat_masuk()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratmasuk();
        $data['disposisi'] = $this->admin_m->get_all_disposisi();
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_masuk/input_suratmasuk', $data);
        $this->load->view('template/footer');
    }
    public function edit_suratmasuk($id_surat_masuk)
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_row_suratmasuk($id_surat_masuk);
        $data['disposisi'] = $this->admin_m->get_all_disposisi();
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_masuk/edit_suratmasuk', $data);
        $this->load->view('template/footer');
    }

    public function hapus_suratkeluar($id_surat_keluar)
    {
        $this->db->where('id_surat_keluar', $id_surat_keluar);
        $this->db->delete('surat_keluar');
        return redirect('admin/surat_keluar');
    }

    public function proses_surat_masuk()
    {
        $config['upload_path']   = './assets/file/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['remove_space'] = TRUE;
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('file_surat');
        $x = $this->upload->data();

        $data = array(
            'nama_surat' => $this->input->post('nama_surat'),
            'no_surat' => $this->input->post('no_surat'),
            'tgl_s_masuk' => $this->input->post('tgl_s_masuk'),
            'tgl_t_sm'            => $this->input->post('tgl_t_sm'),
            'asal_surat_masuk'  => $this->input->post('asal_surat_masuk'),
            'perihal' => $this->input->post('perihal'),
            'file_surat' => $x["orig_name"],
            'disposisi' => $this->input->post('disposisi'),
            'bulan_smasuk' => substr($this->input->post('tgl_t_sm'), 5, 2),
        );
        $this->db->insert('surat_masuk', $data);
        return redirect('admin/surat_masuk');
    }
    public function proses_edit_surat_masuk($id_surat_masuk)
    {
        $config['upload_path']   = './assets/file/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['remove_space'] = TRUE;
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('file_surat');
        $x = $this->upload->data();

        $data = array(
            'nama_surat' => $this->input->post('nama_surat'),
            'no_surat' => $this->input->post('no_surat'),
            'tgl_s_masuk' => $this->input->post('tgl_s_masuk'),
            'tgl_t_sm'            => $this->input->post('tgl_t_sm'),
            'asal_surat_masuk'  => $this->input->post('asal_surat_masuk'),
            'perihal' => $this->input->post('perihal'),
            'file_surat' => $x["orig_name"],
            'disposisi' => $this->input->post('disposisi'),
            'bulan_smasuk' => substr($this->input->post('tgl_t_sm'), 5, 2),
        );
        $this->db->where('id_surat_masuk', $id_surat_masuk);
        $this->db->update('surat_masuk', $data);
        return redirect('admin/surat_masuk');
    }
    public function proses_surat_keluar($id_surat_keluar)
    {
        $config['upload_path']   = './assets/file/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['remove_space'] = TRUE;
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('file_surat');
        $x = $this->upload->data();

        $data = array(
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'tujuan_surat' => $this->input->post('tujuan_surat'),
            // 'nomor_surat' => $this->input->post('no_surat'),
            'perihal' => $this->input->post('perihal'),
            'file_surat' => $x["orig_name"],
            'bulan_skeluar' => substr($this->input->post('tanggal_surat'), 5, 2),
        );
        $this->db->where('id_surat_keluar', $id_surat_keluar);
        $this->db->update('surat_keluar', $data);
        return redirect('admin/surat_keluar');
    }

    public function proses_surat_keluar_baru()
    {
        $config['upload_path']   = './assets/file/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['remove_space'] = TRUE;
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('file_surat');
        $x = $this->upload->data();

        $data = array(
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'tujuan_surat' => $this->input->post('tujuan_surat'),
            'nomor_surat' => $this->input->post('no_surat'),
            'perihal' => $this->input->post('perihal'),
            'file_surat' => $x["orig_name"],
            'bulan_skeluar' => substr($this->input->post('tanggal_surat'), 5, 2),
        );
        $this->db->insert('surat_keluar', $data);
        return redirect('admin/surat_keluar');
    }

    // 
    public function cetak_surat_keluar()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratkeluar();
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_keluar/cetak_data_suratkeluar', $data);
        // $this->load->view('template/footer');
    }
    public function cetak_surat_keluar_bulan()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $bulan = $this->input->post('bulan');
        $data['data'] = $this->admin_m->get_all_suratkeluar_bulan($bulan);
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_keluar/cetak_data_suratkeluar', $data);
        // $this->load->view('template/footer');
    }
    // 

    public function surat_keluar()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratkeluar();
        $data['disposisi'] = $this->admin_m->get_all_disposisi();
        $data['bulan'] = false;
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_keluar/data_suratkeluar', $data);
        $this->load->view('template/footer');
    }
    public function tambah_surat_keluar()
    {

        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratkeluar();
        $data['no_surat'] = $this->admin_m->no_surat();
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_keluar/input_suratkeluar', $data);
        $this->load->view('template/footer');
    }
    public function disposisi()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratmasuk();
        $data['id_disposisi'] = false;
        $data['disposisi'] = $this->admin_m->get_all_disposisi();
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_disposisi/surat_disposisi', $data);
        $this->load->view('template/footer');
    }
    public function cetak_disposisi()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratmasuk();

        $data['disposisi'] = $this->admin_m->get_all_disposisi();
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_disposisi/cetak_data_disposisi', $data);
        // $this->load->view('template/footer');
    }
    public function cetak_disposisi_bagian()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        // $data['data'] = $this->admin_m->get_all_suratmasuk();
        $id_disposisi = $this->input->post('id_disposisi');

        $data['data'] = $this->admin_m->get_all_suratmasuk_disposisi($id_disposisi);
        $data['disposisi'] = $this->admin_m->get_all_disposisi();
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_disposisi/cetak_data_disposisi', $data);
        // $this->load->view('template/footer');
    }
    public function disposisi_cari()
    {
        $id_disposisi = $this->input->post('disposisi');
        $data['id_disposisi'] = $this->input->post('disposisi');
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_suratmasuk_disposisi($id_disposisi);
        $data['disposisi'] = $this->admin_m->get_all_disposisi();
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_disposisi/surat_disposisi', $data);
        $this->load->view('template/footer');
    }

    public function surat_izin()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_surat_izin();
        $data['bulan'] = false;
        $data['keperluan'] = false;
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_izin/data_suratizin', $data);
        $this->load->view('template/footer');
    }

    public function tambah_surat_izin()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_izin/input_suratizin', $data);
        $this->load->view('template/footer');
    }

    public function proses_surat_izin()
    {
        $data = array(
            'keperluan' => $this->input->post('keperluan'),
            'dari_tanggal' => $this->input->post('dari_tanggal'),
            'sampai_tanggal' => $this->input->post('sampai_tanggal'),
            'akun_izin' => $this->session->userdata('id_akun'),
            'bulan_si' => substr($this->input->post('dari_tanggal'), 5, 2),
        );
        $this->db->insert('surat_izin', $data);
        return redirect('admin/surat_izin');
    }

    public function cetak_surat_izin()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_surat_izin();
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_izin/cetak_data_suratizin', $data);
        // $this->load->view('template/footer');
    }
    public function cetak_surat_izin_keperluan()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_surat_izin();
        $keperluan = $this->input->post('keperluan');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['keperluan'] = $this->input->post('keperluan');
        $data['data'] = $this->admin_m->get_all_surat_izin_k($bulan, $keperluan);
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_izin/cetak_data_suratizin', $data);
        // $this->load->view('template/footer');
    }
    public function cari_surat_izin()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');
        $keperluan = $this->input->post('keperluan');
        $bulan = $this->input->post('bulan');
        $data['bulan'] = $this->input->post('bulan');
        $data['keperluan'] = $this->input->post('keperluan');
        $data['data'] = $this->admin_m->get_all_surat_izin_k($bulan, $keperluan);
        $this->load->view('template/header', $data);
        $this->load->view('admin/surat_izin/data_suratizin', $data);
        $this->load->view('template/footer');
    }

    public function cetak_surat_izin_sendiri($id_surat_izin)
    {

        $data['judul'] = 'Admin';
        $data['nama'] = $this->session->userdata('nama');

        $data['data'] = $this->admin_m->get_all_surat_izin_s($id_surat_izin);
        // $this->load->view('template/header', $data);
        $this->load->view('admin/surat_izin/cetak_suratizin_sendiri', $data);
        // $this->load->view('template/footer');
    }
}

/* End of file Admin.php */
