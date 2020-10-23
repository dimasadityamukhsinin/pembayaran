<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }
    
    public function index()
    {
        //Validasi 
        $this->form_validation->set_rules('username','Username','required',
                                         array('required' => '%s harus diisi'));
        
        $this->form_validation->set_rules('password','Password','required',
                                         array('required' => '%s harus diisi'));
        
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //Proses ke simple login
            $this->simple_login_mahasiswa->login($username,$password);
        }
        //Akhir Validasi
        
        $data = array(  'title' => 'Login Mahasiswa',
                     );
        $this->load->view('mahasiswa/login/list',$data,FALSE);
    }
    
    //Fungsi logout
    public function logout()
    {
        // Ambil fungsi logout dari simple login
        $this->simple_login_mahasiswa->logout();
    }
}