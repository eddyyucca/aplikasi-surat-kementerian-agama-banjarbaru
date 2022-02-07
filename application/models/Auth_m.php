<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('akun.username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
}

/* End of file Auth_m.php */
