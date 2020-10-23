<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        // Proteksi Halaman
        $this->simple_login_mahasiswa->cek_login();
    }

    // Halaman Dashboard
    public function index() 
    {
        // Ambil data login mahasiswa dari session
        $data = array(  'title'             => 'Halaman Mahasiswa',
                        'isi'               => 'mahasiswa/dashboard/list');
        $this->load->view('mahasiswa/layout/wrapper', $data, FALSE);
    }
}
?>