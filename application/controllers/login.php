<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	  function __construct() {
	      parent::__construct();
	      $this->load->helper('url');
	      $this->load->model('mlogin');
	      $this->load->library('session');
	  }

	public function auth()
	{

	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$where = array(
		'username' => $username,
		'password' => $password,
		);
	
	$cek_siswa = $this->mlogin->check("siswa",$where)->num_rows();
	$cek_guru = $this->mlogin->check("guru",$where)->num_rows();

	if($cek_siswa > 0){

		$data_session = array(
			'nama' => $username,
			'password' => $password,
			'status' => 'siswa'
			);
 
		$this->session->set_userdata($data_session);

		echo "success_siswa";

	} elseif ($cek_guru > 0) {
		$data_session = array(
			'nama' => $username,
			'password' => $password,
			'status' => 'guru'
			);

 		$this->session->set_userdata($data_session);
 		
		echo "success_guru";

	} else {

		echo "error";


		}
	}
		

}
