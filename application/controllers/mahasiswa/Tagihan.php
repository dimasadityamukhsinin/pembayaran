<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tagihan_model');
        $this->load->model('mahasiswa_model');
        // Proteksi Halaman
        $this->simple_login_mahasiswa->cek_login();
    }

    // Halaman Tagihan
    public function index()
    {
        $id = $this->session->userdata('id_mahasiswa');
        $tagihan = $this->tagihan_model->detailmahasiswa($id);
        $data = array(  'title' =>  'Halaman Tagihan',
                        'tagihan'   =>  $tagihan,
                        'isi'       =>  'mahasiswa/tagihan/list'
                     );
        $this->load->view('mahasiswa/layout/wrapper', $data, false);
    }

    public function bayar($id = null)
    {
        if (!isset($id)) NULL;

        $tagihan = $this->tagihan_model->detail($id);
        $data = array(  'title' =>  'Halaman Bayar',
                        'tagihan' =>  $tagihan,
                        'isi'       =>  'mahasiswa/tagihan/bayar'
                     );
        $this->load->view('mahasiswa/layout/wrapper', $data, false);
    }

    public function proses($id = null)
    {
        if (!isset($id)) NULL;
        
        require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
        
        $tagihan = $this->tagihan_model->detail($id);
        $id_mahasiswa = $this->session->userdata('id_mahasiswa');
        $mahasiswa = $this->mahasiswa_model->listing($id_mahasiswa);
     
        \Stripe\Charge::create ([
                "amount" => $tagihan->total * 100,
                "currency" => "usd",
                "source" => $this->input->post('stripeToken'),
                "description" => "Pembayaran mahasiswa dengan username ".$mahasiswa->username 
        ]);

        $i = $this->input;
            
        $data = array(  'id'    => $id,
                        'status' =>  1,
                     );
        $this->tagihan_model->edit($data);
        $this->session->set_flashdata('sukses', 'Tagihan telah dibayar');
        redirect(base_url('mahasiswa/tagihan'), 'refresh');
    }
}
?>