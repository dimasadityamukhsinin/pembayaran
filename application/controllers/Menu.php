<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
	
	// Load Model
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data = array(  'title' =>  'SIM',
                     );
        $this->load->view('menu/list', $data, false);
    }

}