<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Akun_model'); // di jadikan constructor agar langsung di jalankan saat di akses dan bisa di akses ke semua fungction
	}

	function profile()
	{
		$akun = $this->Akun_model->getAll(); // memanggil method getAll
	    $data['akun'] = $akun; // menampung di variable $data
		$this->load->view('template/header');
        $this->load->view('template/navbar');
	    $this->load->view('akun',$data); // passing $data ke view akun
        $this->load->view('template/footer');
	}
}