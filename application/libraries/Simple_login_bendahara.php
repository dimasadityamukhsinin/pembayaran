<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login_bendahara 
{
    
    protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        //Load data model bendahara
        $this->CI->load->model('bendahara_model');
    }
    
    //Fungsi Login
    public function login($username,$password)
    {
        $check = $this->CI->bendahara_model->login($username,$password);
        //Jika ada data bendahara, maka session untuk login dibuat
        if($check)
        {
            $id     = $check->id;
            $username        = $check->username;
            //Buat session
            $this->CI->session->set_userdata('id_bendahara',$id);
            $this->CI->session->set_userdata('username',$username);
            //jika sukses tampil halaman bendahara yang diproteksi
            redirect(base_url('bendahara/dashboard'),'refresh');
            
        }else{
            //Kalau username password salah, maka akan disuruh login lagi
            $this->CI->session->set_flashdata('warning','Username atau password salah');
            redirect(base_url('bendahara/login'),'refresh');
        }
    }
    
    //Fungsi cek login
    public function cek_login()
    {
        //Mmeriksa apakah session sudah atau atau belum, jika belum alihkan ke halaman login
        if($this->CI->session->userdata('id_bendahara') == ""){
            $this->CI->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('bendahara/login'),'refresh');
        }
    }
    
    //Fungsi logout
    public function logout()
    {
        // Membuang semua session yang telah diset pada saat login
        $this->CI->session->unset_userdata('id_bendahara');
        $this->CI->session->unset_userdata('username');
        // Setelah session dibuang, maka dialihkan ke halaman login kembali
        $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
        redirect(base_url('bendahara/login'),'refresh');
    }
}