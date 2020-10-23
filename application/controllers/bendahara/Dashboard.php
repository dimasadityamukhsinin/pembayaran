<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tagihan_model');
        // Proteksi Halaman
        $this->simple_login_bendahara->cek_login();
    }

    // Halaman Dashboard
    public function index()
    {
        $belum_januari = $this->tagihan_model->belum_januari();
        $belum_februari = $this->tagihan_model->belum_februari();
        $belum_maret = $this->tagihan_model->belum_maret();
        $belum_april = $this->tagihan_model->belum_april();
        $belum_mei = $this->tagihan_model->belum_mei();
        $belum_juni = $this->tagihan_model->belum_juni();
        $belum_juli = $this->tagihan_model->belum_juli();
        $belum_agustus = $this->tagihan_model->belum_agustus();
        $belum_september = $this->tagihan_model->belum_september();
        $belum_oktober = $this->tagihan_model->belum_oktober();
        $belum_november = $this->tagihan_model->belum_november();
        $belum_desember = $this->tagihan_model->belum_desember();
        
        $lunas_januari = $this->tagihan_model->lunas_januari();
        $lunas_februari = $this->tagihan_model->lunas_februari();
        $lunas_maret = $this->tagihan_model->lunas_maret();
        $lunas_april = $this->tagihan_model->lunas_april();
        $lunas_mei = $this->tagihan_model->lunas_mei();
        $lunas_juni = $this->tagihan_model->lunas_juni();
        $lunas_juli = $this->tagihan_model->lunas_juli();
        $lunas_agustus = $this->tagihan_model->lunas_agustus();
        $lunas_september = $this->tagihan_model->lunas_september();
        $lunas_oktober = $this->tagihan_model->lunas_oktober();
        $lunas_november = $this->tagihan_model->lunas_november();
        $lunas_desember = $this->tagihan_model->lunas_desember();
        $data = array(  'title' => 'Halaman Bendahara',
                        'belum_januari' => $belum_januari,
                        'belum_februari' => $belum_februari,
                        'belum_maret' => $belum_maret,
                        'belum_april' => $belum_april,
                        'belum_mei' => $belum_mei,
                        'belum_juni' => $belum_juni,
                        'belum_juli' => $belum_juli,
                        'belum_agustus' => $belum_agustus,
                        'belum_september' => $belum_september,
                        'belum_oktober' => $belum_oktober,
                        'belum_november' => $belum_november,
                        'belum_desember' => $belum_desember,
                        
                        'lunas_januari' => $lunas_januari,
                        'lunas_februari' => $lunas_februari,
                        'lunas_maret' => $lunas_maret,
                        'lunas_april' => $lunas_april,
                        'lunas_mei' => $lunas_mei,
                        'lunas_juni' => $lunas_juni,
                        'lunas_juli' => $lunas_juli,
                        'lunas_agustus' => $lunas_agustus,
                        'lunas_september' => $lunas_september,
                        'lunas_oktober' => $lunas_oktober,
                        'lunas_november' => $lunas_november,
                        'lunas_desember' => $lunas_desember,
                        'isi'   => 'bendahara/dashboard/list');
        $this->load->view('bendahara/layout/wrapper', $data, FALSE);
    }
}
?>