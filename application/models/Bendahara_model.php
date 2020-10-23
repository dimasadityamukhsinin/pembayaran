<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bendahara_model extends CI_Model {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    //Listing all Bendahara
    public function listing($id)
    {
        $this->db->select('*');
        $this->db->from('bendahara');
        $this->db->where('bendahara.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    //Login Bendahara
    public function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('bendahara');
        // JOIN
        $this->db->where(array('username' => $username,
                               'password' => md5($password)));
        $query = $this->db->get();
        return $query->row();
    }
}
?>