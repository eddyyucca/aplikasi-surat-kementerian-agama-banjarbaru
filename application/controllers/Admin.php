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
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_vaksin();

        $this->load->view('template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function warga()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_warga();

        $this->load->view('template/header', $data);
        $this->load->view('admin/warga/data_warga', $data);
        $this->load->view('template/footer', $data);
    }
    public function tindakan()
    {
        $tgl_permintaan = $this->input->post('tgl_permintaan');

        if ($tgl_permintaan == false) {
            $tgl_permintaan = date('Y-m-d');
            $data['nama'] = $this->session->userdata('nama');
            $data['data'] = false;
            $data['judul'] = 'Dashboard';
            $data['data'] = $this->admin_m->get_all_permintaan($tgl_permintaan);

            $this->load->view('template/header', $data);
            $this->load->view('admin/warga/tindakan', $data);
            $this->load->view('template/footer', $data);
        } else {
            $data['nama'] = $this->session->userdata('nama');
            $data['data'] = false;
            $data['judul'] = 'Dashboard';
            $data['data'] = $this->admin_m->get_all_permintaan($tgl_permintaan);

            $this->load->view('template/header', $data);
            $this->load->view('admin/warga/tindakan', $data);
            $this->load->view('template/footer', $data);
        }
    }
    public function tindakan_vaksin($id_warga)
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_row_warga($id_warga);
        $data['vaksin'] = $this->admin_m->get_all_vaksin();
        $data['dokter'] = $this->admin_m->get_all_dokter();

        $this->load->view('template/header', $data);
        $this->load->view('admin/tindakan/tindakan_vaksin', $data);
        $this->load->view('template/footer', $data);
    }
    public function warga_sdh_vaksin1()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_warga_sdh1();

        // $this->load->view('template/header', $data);
        $this->load->view('admin/warga/data_warga_sudahvaksin1', $data);
        // $this->load->view('template/footer', $data);
    }
    public function warga_gagal_vaksin()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_warga_gagal();

        // $this->load->view('template/header', $data);
        $this->load->view('admin/warga/data_warga_gagal', $data);
        // $this->load->view('template/footer', $data);
    }
    public function warga_sdh_vaksin2()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_warga_sdh2();

        // $this->load->view('template/header', $data);
        $this->load->view('admin/warga/data_warga_sudahvaksin2', $data);
        // $this->load->view('template/footer', $data);
    }
    public function warga_sdh_vaksin3()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_warga_sdh3();

        // $this->load->view('template/header', $data);
        $this->load->view('admin/warga/data_warga_sudahvaksin3', $data);
        // $this->load->view('template/footer', $data);
    }
    public function warga_blm_vaksin()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = false;
        $data['judul'] = 'Dashboard';
        $data['data'] = $this->admin_m->get_all_warga_blm();

        // $this->load->view('template/header', $data);
        $this->load->view('admin/warga/data_warga_belumvaksin', $data);
        // $this->load->view('template/footer', $data);
    }

    // vaksin
    // -------------------- //
    public function vaksin()
    {
        $data['judul'] = 'Data vaksin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_vaksin();
        $this->load->view('template/header', $data);
        $this->load->view('admin/vaksin/data_vaksin', $data);
        $this->load->view('template/footer');
    }
    public function dokter()
    {
        $data['judul'] = 'Data Dokter';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_dokter();
        $this->load->view('template/header', $data);
        $this->load->view('admin/dokter/data_dokter', $data);
        $this->load->view('template/footer');
    }
    public function cetak_dokter()
    {
        $data['judul'] = 'Data Dokter';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_dokter();
        // $this->load->view('template/header', $data);
        $this->load->view('admin/dokter/cetak_dokter', $data);
        // $this->load->view('template/footer');
    }
    public function cetak_data_vaksin()
    {
        $data['judul'] = 'Data vaksin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_all_vaksin();
        // $this->load->view('template/header', $data);
        $this->load->view('admin/vaksin/cetak_data_vaksin', $data);
        // $this->load->view('template/footer');
    }
    public function tambah_vaksin()
    {
        $data['judul'] = 'Data vaksin';
        $data['nama'] = $this->session->userdata('nama');
        $this->load->view('template/header', $data);
        $this->load->view('admin/vaksin/input_vaksin', $data);
        $this->load->view('template/footer');
    }
    public function tambah_dokter()
    {
        $data['judul'] = 'Data Dokter';
        $data['nama'] = $this->session->userdata('nama');
        $this->load->view('template/header', $data);
        $this->load->view('admin/dokter/input_dokter', $data);
        $this->load->view('template/footer');
    }
    public function edit_vaksin($id_vaksin)
    {
        $data['judul'] = 'Data vaksin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_row_vaksin($id_vaksin);

        $this->load->view('template/header', $data);
        $this->load->view('admin/vaksin/edit_vaksin', $data);
        $this->load->view('template/footer');
    }
    public function update_vaksin($id_vaksin)
    {
        $data['judul'] = 'Data vaksin';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_row_vaksin($id_vaksin);

        $this->load->view('template/header', $data);
        $this->load->view('admin/vaksin/update_stok', $data);
        $this->load->view('template/footer');
    }
    public function edit_dokter($id_dokter)
    {
        $data['judul'] = 'Data Dokter';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->admin_m->get_row_dokter($id_dokter);

        $this->load->view('template/header', $data);
        $this->load->view('admin/dokter/edit_dokter', $data);
        $this->load->view('template/footer');
    }

    public function update_stok($id_vaksin)
    {
        $stok_masuk = $this->input->post('vaksin_masuk');
        $stok_ada = $this->input->post('jumlah');
        $hasil = $stok_ada + $stok_masuk;
        $data = array(
            "jumlah" => $hasil,
        );
        $this->db->where('id_vaksin', $id_vaksin);
        $this->db->update('vaksin', $data);
        return redirect('admin/vaksin');
    }
    public function hasil_vaksin($id_warga)
    {

        $data = array(
            "id_warga" => $id_warga,
            "vaksin" => $this->input->post('vaksin'),
            "dokter" => $this->input->post('dokter'),
            "keterangan" => $this->input->post('keterangan'),
            "vaksin_ke" => $this->input->post('vaksin_ke'),
            "tgl" => date('Y-m-d'),
        );
        $data2 = array(
            "status" => $this->input->post('vaksin'),
        );
        $data3 = array(
            "hasil" => '1',
        );


        $this->db->where('id_warga', $id_warga);
        $this->db->update('warga', $data2);
        $this->db->insert('hasil', $data);
        $this->db->update('permintaan_vaksin', $data3);
        return redirect('admin/warga');
    }

    public function proses_update_vaksin($id_vaksin)
    {
        $this->form_validation->set_rules('nama_vaksin', 'Vaksin', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = $this->admin_m->get_row_vaksin($id_vaksin);
            $data['judul'] = 'Data vaksin';
            $data['nama'] = $this->session->userdata('nama');
            $this->load->view('template/header', $data);
            $this->load->view('admin/vaksin/edit_vaksin', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nama_vaksin' => $this->input->post('nama_vaksin'),
                'jumlah' => $this->input->post('jumlah'),
            );
            $this->db->where('id_vaksin', $id_vaksin);
            $this->db->update('vaksin', $data);
            return redirect('admin/vaksin');
        }
    }
    public function proses_update_dokter($id_dokter)
    {
        $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required');
        // $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = $this->admin_m->get_row_vaksin($id_dokter);
            $data['judul'] = 'Data vaksin';
            $data['nama'] = $this->session->userdata('nama');
            $this->load->view('template/header', $data);
            $this->load->view('admin/dokter/edit_dokter', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nama_dokter' => $this->input->post('nama_dokter'),
                'jk' => $this->input->post('jk'),
                'ttl' => $this->input->post('ttl'),
                'alamat' => $this->input->post('alamat'),
                'telpon' => $this->input->post('telpon'),
            );
            $this->db->where('id_dokter', $id_dokter);
            $this->db->update('dokter', $data);
            return redirect('admin/dokter');
        }
    }
    public function proses_input_vaksin()
    {
        $this->form_validation->set_rules('nama_vaksin', 'Vaksin', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Data vaksin';
            $data['nama'] = $this->session->userdata('nama');
            $this->load->view('template/header', $data);
            $this->load->view('admin/vaksin/input_vaksin', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nama_vaksin' => $this->input->post('nama_vaksin'),
                'jumlah' => $this->input->post('jumlah')
            );
            $this->db->insert('vaksin', $data);
            return redirect('admin/vaksin');
        }
    }
    public function proses_input_dokter()
    {
        $this->form_validation->set_rules('nama_dokter', 'DOkter', 'required');
        // $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Data Dokter';
            $data['nama'] = $this->session->userdata('nama');
            $this->load->view('template/header', $data);
            $this->load->view('admin/dokter/input_dokter', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nama_dokter' => $this->input->post('nama_dokter'),
                'jk' => $this->input->post('jk'),
                'ttl' => $this->input->post('ttl'),
                'alamat' => $this->input->post('alamat'),
                'telpon' => $this->input->post('telpon'),
            );
            $this->db->insert('dokter', $data);
            return redirect('admin/dokter');
        }
    }
    public function hapus_vaksin($id_vaksin)
    {
        $this->db->where('id_vaksin', $id_vaksin);
        $this->db->delete('vaksin');
        return redirect('admin/vaksin');
    }
    public function hapus_dokter($id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);
        $this->db->delete('dokter');
        return redirect('admin/dokter');
    }


    public function proses_update_lowongan($id_lowongan)
    {
        $this->form_validation->set_rules('nama_lowongan', 'Nama Lowongan', 'required');
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan');
        $this->form_validation->set_rules('batas_tanggal', 'Batas Tanggal');
        $this->form_validation->set_rules('isi_lowongan', 'Isi Lowongan');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Lowongan Baru';
            $data['nama'] = $this->session->userdata('nama');
            $data['vaksin'] = $this->admin_m->get_all_vaksin();

            $this->load->view('template/header', $data);
            $this->load->view('admin/lowongan/input_lowongan', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nama_lowongan' => $this->input->post('nama_lowongan'),
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'batas_tanggal' => $this->input->post('batas_tanggal'),
                'isi_lowongan' => $this->input->post('isi_lowongan'),
            );
            $this->db->where('id_lowongan', $id_lowongan);

            $this->db->update('lowongan', $data);
            return redirect('admin/data_lowongan');
        }
    }

    public function jadikan_admin($nip)
    {
        $data = array(
            "level" => "admin"
        );
        $this->db->where('nip', $nip);
        $this->db->update('akun', $data);
        return redirect('admin/pegawai');
    }
    public function jadikan_user($nip)
    {
        $data = array(
            "level" => "user"
        );
        $this->db->where('nip', $nip);
        $this->db->update('akun', $data);
        return redirect('admin/pegawai');
    }

    public function lihat_lowongan($id_lowongan)
    {
        $data['judul'] = 'Data Lowongan';
        $data['nama'] = $this->session->userdata('nama');
        $data['data'] = $this->lowongan_m->get_row_lowongan($id_lowongan);

        $this->load->view('template/header', $data);
        $this->load->view('user/lowongan/lihat_lowongan', $data);
        $this->load->view('template/footer');
    }

    public function delete_vaksin($id_vaksin)
    {
        $this->db->where('id_vaksin', $id_vaksin);
        $this->db->delete('vaksin');

        return redirect('admin/vaksin');
    }
    public function delete_warga($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('warga');
        $this->db->where('nik', $nik);
        $this->db->delete('akun');
        return redirect('admin/warga');
    }

    // Pegawai end
    // -------------------- //

    // menerima pengajuan  
    // -------------------- //
    public function edit_warga($id_warga)
    {
        $data['judul'] = 'Daftar Penerima Vaksin';
        $data['nama'] = $this->session->userdata('nama');
        $this->load->view('template/header', $data);
        $this->load->view('admin/warga/edit_warga', $data);
        $this->load->view('template/footer');
    }


    public function tolak($id_lamaran)
    {
        $data = array(
            'status_lamaran' => '2'
        );
        $this->db->where('id_lamaran', $id_lamaran);
        $this->db->update('lamaran', $data);
        redirect("admin/pengajuan_kerja");
    }

    public function terima($id_lamaran)
    {
        $data = array(
            'status_lamaran' => '3'
        );
        $this->db->where('id_lamaran', $id_lamaran);
        $this->db->update('lamaran', $data);
        redirect("admin/pengajuan_kerja");
    }
}

/* End of file Admin.php */
