<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{

    public function getDataDepartemen()
    {
        $query = $this->db->get('bidang');
        return $query->result();
    }

    public function getByRoleId()
    {
        $this->db->select('
            user.*, user.id AS id_dep, departemen.nama_dep
        ');
        $this->db->join('departemen', 'user.id_dep = departemen.id');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }
    public function insertUser($data)
    {
        $this->db->insert('user', $data);
    }
    public function getDataUser()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('user', $data);
    }
}

/* End of file User_model.php */
