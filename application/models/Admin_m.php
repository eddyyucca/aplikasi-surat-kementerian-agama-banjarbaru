<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{
    public function surat_masuk_st($bulan)
    {
        $this->db->where('bulan_smasuk', $bulan);

        $query = $this->db->get('surat_masuk');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function surat_keluar_st($bulan)
    {
        $this->db->where('bulan_skeluar', $bulan);

        $query = $this->db->get('surat_keluar');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function no_surat()
    {
        $query = $this->db->get('surat_keluar');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function surat_masuk_all()
    {
        $query = $this->db->get('surat_masuk');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function surat_keluar_all()
    {
        $query = $this->db->get('surat_keluar');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function get_all_suratmasuk()
    {
        $this->db->join('disposisi', 'disposisi.id_disposisi = surat_masuk.disposisi', 'left');
        $this->db->order_by('id_surat_masuk', 'DESC');
        return   $this->db->get('surat_masuk')->result();
    }
    public function get_all_surat_izin()
    {
        $this->db->join('akun', 'akun.id_akun = surat_izin.akun_izin', 'left');
        $this->db->order_by('id_surat_izin', 'DESC');
        return   $this->db->get('surat_izin')->result();
    }
    public function get_all_surat_izin_k($bulan, $keperluan)
    {
        $this->db->where('bulan_si', $bulan);
        $this->db->where('keperluan', $keperluan);
        $this->db->join('akun', 'akun.id_akun = surat_izin.akun_izin', 'left');
        $this->db->order_by('id_surat_izin', 'DESC');
        return   $this->db->get('surat_izin')->result();
    }
    public function get_all_suratkeluar()
    {
        $this->db->order_by('id_surat_keluar', 'DESC');
        return   $this->db->get('surat_keluar')->result();
    }
    public function get_all_akun()
    {
        return   $this->db->get('akun')->result();
    }
    public function get_row_akun($id_akun)
    {
        $this->db->where('id_akun', $id_akun);

        return   $this->db->get('akun')->row();
    }
    public function get_all_suratmasuk_bulan($bulan)
    {
        $this->db->where('bulan_smasuk', $bulan);

        $this->db->join('disposisi', 'disposisi.id_disposisi = surat_masuk.disposisi', 'left');

        return   $this->db->get('surat_masuk')->result();
    }
    public function get_all_suratkeluar_bulan($bulan)
    {
        $this->db->where('bulan_skeluar', $bulan);
        return   $this->db->get('surat_keluar')->result();
    }
    public function get_all_suratmasuk_disposisi($id_disposisi)
    {
        $this->db->where('id_disposisi', $id_disposisi);

        $this->db->join('disposisi', 'disposisi.id_disposisi = surat_masuk.disposisi', 'left');

        return   $this->db->get('surat_masuk')->result();
    }
    public function get_row_suratmasuk($id_surat_masuk)
    {

        $this->db->where('id_surat_masuk', $id_surat_masuk);

        $this->db->join('disposisi', 'disposisi.id_disposisi = surat_masuk.disposisi', 'left');

        return   $this->db->get('surat_masuk')->row();
    }
    public function get_all_disposisi()
    {

        return   $this->db->get('disposisi')->result();
    }
    public function get_row_disposisi($id_disposisi)
    {
        $this->db->where('id_disposisi', $id_disposisi);
        return   $this->db->get('disposisi')->row();
    }
    public function get_row_suratkeluar($id_surat_keluar)
    {
        $this->db->where('id_surat_keluar', $id_surat_keluar);
        return   $this->db->get('surat_keluar')->row();
    }
}

/* End of file alumni_m.php */
