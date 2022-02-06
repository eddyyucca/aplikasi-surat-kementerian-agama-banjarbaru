<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{
    public function jumlah_alumni()
    {
        $query = $this->db->get('alumni');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_lowongan()
    {

        $query = $this->db->get('lowongan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function cek($id_lowongan, $id_alumni)
    {
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->where('id_alumni', $id_alumni);
        return $this->db->get('lamaran')->row();
    }

    public function jumlah_absen_bulan($bulan)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->where('MONTH(absen.tanggal)', $bulan);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_bidang()
    {
        $query = $this->db->get('bidang');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function get_all_vaksin()
    {
        return $this->db->get('vaksin')->result();
    }

    public function get_all_warga()
    {
        return $this->db->get('warga')->result();
    }
    public function get_all_warga_sdh1()
    {
        $this->db->join('warga', 'warga.id_warga = hasil.id_warga');
        $this->db->where('vaksin_ke', '1');
        return $this->db->get('hasil')->result();
    }
    public function get_all_warga_gagal()
    {
        $this->db->join('warga', 'warga.id_warga = hasil.id_warga');
        $this->db->where('vaksin', 'Gagal');
        return $this->db->get('hasil')->result();
    }
    public function get_all_warga_sdh2()
    {
        $this->db->join('warga', 'warga.id_warga = hasil.id_warga');
        $this->db->where('vaksin_ke', '2');
        return $this->db->get('hasil')->result();
    }
    public function get_all_warga_sdh3()
    {
        $this->db->join('warga', 'warga.id_warga = hasil.id_warga');
        $this->db->where('vaksin_ke', '3');
        return $this->db->get('hasil')->result();
    }
    public function get_all_warga_blm()
    {
        $this->db->where('status', '0');
        return $this->db->get('warga')->result();
    }
    public function get_all_dokter()
    {
        return $this->db->get('dokter')->result();
    }
    public function get_row_dokter($id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);

        return $this->db->get('dokter')->row();
    }
    public function get_row_warga($id_warga)
    {
        $this->db->where('id_warga', $id_warga);

        return $this->db->get('warga')->row();
    }
    public function get_status($id_alumni)
    {

        // $this->db->select('*');
        // $this->db->from('lamaran');

        // // $this->db->join('alumni', 'alumni.id_alumni = lamaran.id_alumni');
        // $this->db->join('lamaran', 'lamaran.id_lowongan = lamaran.id_lowongan');
        $this->db->join('lowongan', 'lowongan.id_lowongan = lamaran.id_lowongan');
        // // $this->db->join('akun', 'akun.telpon = alumni.telpon');
        // // $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.jurusan_smk');
        // $this->db->order_by('lowongan.id_lowongan', 'DESC');
        $this->db->where('id_alumni', $id_alumni);
        return $this->db->get('lamaran')->result();
    }

    public function get_row_vaksin($id_vaksin)
    {
        $this->db->where('id_vaksin', $id_vaksin);
        // $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.jurusan_smk');
        return $this->db->get('vaksin')->row();
    }
    public function get_all_permintaan($tgl_permintaan)
    {
        $this->db->join('permintaan_vaksin', 'permintaan_vaksin.id_warga = warga.id_warga');
        $this->db->where('tgl_vaksin', $tgl_permintaan);
        $this->db->where('hasil', "0");
        $this->db->order_by('no_urut', 'ASC');
        return $this->db->get('warga')->result();
    }

    public function get_row_alumni2($id_alumni)
    {
        $this->db->where('id_alumni', $id_alumni);
        return $this->db->get('alumni')->row();
    }

    public function get_all_pengajuan_admin()
    {
        return $this->db->get('berkas')->result();
    }

    public function get_all_pengajuan($nip)
    {

        $this->db->where('nip', $nip);
        $this->db->order_by('id_berkas', 'DESC');
        return $this->db->get('berkas')->result();
    }

    public function cek_pass($password, $telpon)
    {
        $this->db->where('telpon', $telpon);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('akun');

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function data_absen($nip)
    {
        $this->db->where('id_peg', $nip);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }
    public function cek_absen($nip, $tanggal)
    {
        $this->db->where('id_peg', $nip);
        $this->db->where('tanggal', $tanggal);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->row();
    }
    public function cek_absen_pulang($nip, $tanggal)
    {
        $this->db->where('id_peg', $nip);
        $this->db->where('tanggal', $tanggal);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }
    public function absen($id_peg)
    {
        $this->db->where('id_peg', $id_peg);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }

    public function cari_bulan_absen($date1, $date2, $id_peg)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->where('id_peg', $id_peg);
        $this->db->where('tanggal >=', $date1);
        $this->db->where('tanggal <=', $date2);
        $this->db->order_by('id_absen', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file alumni_m.php */
