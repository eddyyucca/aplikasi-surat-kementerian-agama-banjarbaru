<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function hitung($tgl_vaksin)
    {
        $this->db->where('tgl_vaksin', $tgl_vaksin);
        $query = $this->db->get('permintaan_vaksin');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function get_row_warga($telpon)
    {
        $this->db->where('telpon', $telpon);

        return $this->db->get('warga')->row();
    }
    public function get_row_vaksin($id_warga)
    {

        // $this->db->select('*');
        // $this->db->from('warga');
        // $this->db->join('warga', 'warga.id_warga = hasil.id_warga');
        $this->db->join('vaksin', 'vaksin.id_vaksin = hasil.vaksin');
        // $this->db->join('vaksin', 'vaksin.id_vaksin = hasil.vaksin');
        $this->db->where('id_warga', $id_warga);
        return $this->db->get('hasil')->result();
    }
    public function no_antri($id_warga)
    {

        // // $this->db->select('*');
        // // $this->db->from('warga');
        // // $this->db->join('warga', 'warga.id_warga = hasil.id_warga');
        // $this->db->join('vaksin', 'vaksin.id_vaksin = hasil.vaksin');
        // // $this->db->join('vaksin', 'vaksin.id_vaksin = hasil.vaksin');
        $this->db->where('id_warga', $id_warga);
        $this->db->where('hasil', "0");
        return $this->db->get('permintaan_vaksin')->row();
    }
    public function cek_pass($password, $nik)
    {
        $this->db->where('nik', $nik);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('akun');

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}

/* End of file alumni_m.php */
