<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    //Listing all Mahasiswa
    public function listing($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    //Login Mahasiswa
    public function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        // JOIN
        $this->db->where(array('username' => $username,
                               'password' => md5($password)));
        $query = $this->db->get();
        return $query->row();
    }
}
?>