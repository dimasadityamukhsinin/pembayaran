<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tagihan_model');
        // Proteksi Halaman
        $this->simple_login_bendahara->cek_login();
    }

    // Halaman Tagihan
    public function index()
    {

        $tagihan = $this->tagihan_model->listing();
        $data = array(  'title' =>  'Halaman Tagihan',
                        'tagihan'   =>  $tagihan,
                        'isi'       =>  'bendahara/tagihan/list'
                     );
        $this->load->view('bendahara/layout/wrapper', $data, false);
    }

    //Tambah Tagihan
    public function tambah()
    {

        $tagihan = $this->tagihan_model->listing();
        //Validasi input
        $valid = $this->form_validation;
        
        $valid->set_rules('spp', 'SPP', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('id_mahasiswa', 'ID Mahasiswa', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('kontribusi', 'Kontribusi', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('buku', 'Buku', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('semester', 'Semester', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('tanggal', 'Tanggal', 'required',
                    array('required'    =>  "%s Harus diisi"));
        
        if($valid->run()===false){
            //End validasi
            
        $data = array(	'title' => 'Tambah Tagihan',
                        'tagihan'   =>  $tagihan,
                        'isi'      => 'bendahara/tagihan/tambah');
        $this->load->view('bendahara/layout/wrapper',$data,FALSE);
        //Masuk Database
        }else{
	    $i = $this->input;   
            
            $data = array(  'spp' =>  $i->post('spp'),
                            'id_mahasiswa'       =>  $i->post('id_mahasiswa'),
                            'kontribusi'           =>  $i->post('kontribusi'),
                            'buku'           =>  $i->post('buku'),
                            'semester'           =>  $i->post('semester'),
                            'tanggal'           =>  $i->post('tanggal'),
                            'total'           =>  $i->post('spp') + $i->post('kontribusi') + $i->post('buku'),
                         );
            $this->tagihan_model->tambah($data);
            $this->session->set_flashdata('sukses','Data telah ditambah');
            redirect(base_url('bendahara/tagihan'),'refresh');
        }
    }

    //Edit Tagihan
    public function edit($id = null)
    {
        if (!isset($id)) NULL;
        
        $tagihan = $this->tagihan_model->detail($id);
        //validasi input
        $valid      = $this->form_validation;
        
        $valid->set_rules('spp', 'SPP', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('id_mahasiswa', 'ID Mahasiswa', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('kontribusi', 'Kontribusi', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('buku', 'Buku', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('semester', 'Semester', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('tanggal', 'Tanggal', 'required',
                    array('required'    =>  "%s Harus diisi"));
        
        if($valid->run()===false){
            //Akhir Validasi
        
        $data = array(  'title'     =>  'Edit Tagihan',
                        'tagihan'      =>  $tagihan,
                        'isi'       =>  'bendahara/tagihan/edit'
                     );
        $this->load->view('bendahara/layout/wrapper', $data, false);
        //masuk database
        }else{
            $i = $this->input;
            
            $data = array(  'id'     =>  $id,
                            'spp' =>  $i->post('spp'),
                            'id_mahasiswa'       =>  $i->post('id_mahasiswa'),
                            'kontribusi'           =>  $i->post('kontribusi'),
                            'buku'           =>  $i->post('buku'),
                            'semester'           =>  $i->post('semester'),
                            'tanggal'           =>  $i->post('tanggal'),
                            'total'           =>  $i->post('spp') + $i->post('kontribusi') + $i->post('buku'),
                         );
            $this->tagihan_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data telah diedit');
            redirect(base_url('bendahara/tagihan'), 'refresh');
        }
        //akhir masuk database
    }

    // Delete Tagihan
    public function delete($id = null)
    {
        if (!isset($id)) NULL;

        if (!$id) {
            NULL;
        }else {
            $this->tagihan_model->delete($id);
            $this->session->set_flashdata('sukses', 'Data telah dihapus');
            redirect(base_url('bendahara/tagihan'), 'refresh');
        }
    }
}
?>