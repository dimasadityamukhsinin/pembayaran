<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login_mahasiswa 
{
    
    protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        //Load data model mahasiswa
        $this->CI->load->model('mahasiswa_model');
    }
    
    //Fungsi Login
    public function login($username,$password)
    {
        $check = $this->CI->mahasiswa_model->login($username,$password);
        //Jika ada data mahasiswa, maka session untuk login dibuat
        if($check)
        {
            $id     = $check->id;
            $username  = $check->username;
            //Buat session
            $this->CI->session->set_userdata('id_mahasiswa',$id);
            $this->CI->session->set_userdata('username',$username);
            //jika sukses tampil halaman mahasiswa yang diproteksi
            redirect(base_url('mahasiswa/dashboard'),'refresh');
            
        }else{
            //Kalau username password salah, maka akan disuruh login lagi
            $this->CI->session->set_flashdata('warning','Username atau password salah');
            redirect(base_url('mahasiswa/login'),'refresh');
        }
    }
    
    //Fungsi cek login
    public function cek_login()
    {
        //Mmeriksa apakah session sudah atau atau belum, jika belum alihkan ke halaman login
        if($this->CI->session->userdata('id_mahasiswa') == ""){
            $this->CI->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('mahasiswa/login'),'refresh');
        }
    }
    
    //Fungsi logout
    public function logout()
    {
        // Membuang semua session yang telah diset pada saat login
        $this->CI->session->unset_userdata('id_mahasiswa');
        $this->CI->session->unset_userdata('username');
        // Setelah session dibuang, maka dialihkan ke halaman login kembali
        $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
        redirect(base_url('mahasiswa/login'),'refresh');
    }
}