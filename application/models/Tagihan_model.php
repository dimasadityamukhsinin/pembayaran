<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan_model extends CI_Model {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing all Tagihan
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('tagihan');
        $this->db->order_by('semester', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    //detail Tagihan Mahasiswa
    public function detailmahasiswa($id)
    {
        $this->db->select('*');
        $this->db->from('tagihan');
        $this->db->where('id_mahasiswa', $id);
        $this->db->order_by('semester', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    //Detail Tagihan
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('tagihan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Tambah
    public function tambah($data)
    {
        $this->db->insert('tagihan', $data);
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tagihan', $data);
    }
    
    // Delete
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tagihan');
    }

    public function belum_januari()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 1');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_januari()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 1');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_februari()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 2');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_februari()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 2');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_maret()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 3');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_maret()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 3');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_april()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 4');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_april()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 4');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_mei()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 5');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_mei()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 5');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_juni()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 6');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_juni()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 6');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_juli()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 7');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_juli()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 7');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_agustus()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 8');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_agustus()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 8');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_september()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 9');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_september()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 9');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_oktober()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 10');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_oktober()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 10');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_november()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 11');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_november()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 11');
        $query = $this->db->get();
        return $query->row();
    }

    public function belum_desember()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 0 and month(tanggal) = 12');
        $query = $this->db->get();
        return $query->row();
    }

    public function lunas_desember()
    {
        $this->db->select('sum(total) as totaltagihan');
        $this->db->from('tagihan');
        $this->db->where('status = 1 and month(tanggal) = 12');
        $query = $this->db->get();
        return $query->row();
    }
}
?>