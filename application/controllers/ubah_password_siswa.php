<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ubah_password_siswa extends CI_Controller {

	  function __construct() {
	      parent::__construct();
	      $this->load->helper('url');
	      $this->load->model('mlogin');
	      $this->load->model('main');
	      $this->load->library('session');
	  }

	   public function ubah_password() {
	   $nama_siswa = $this->input->post('nama');
	   $password_baru = $this->input->post('sandi');

	   $this->main->cek_data($nama_siswa, $password_baru);
        redirect(base_url());

	   }














}





?>