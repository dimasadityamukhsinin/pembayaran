<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tagihan_model');
        // Proteksi Halaman
        $this->simple_login_pimpinan->cek_login();
    }

    // Halaman Tagihan
    public function index()
    {

        $tagihan = $this->tagihan_model->listing();
        $data = array(  'title' =>  'Halaman Tagihan',
                        'tagihan'   =>  $tagihan,
                        'isi'       =>  'pimpinan/tagihan/list'
                     );
        $this->load->view('pimpinan/layout/wrapper', $data, false);
    }
}
?>