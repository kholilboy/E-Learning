<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class core extends CI_Controller {

	function __construct() {
	      parent::__construct();
	      $this->load->helper('url');
	      $this->load->library('session');
		  $this->load->model('mFetchListMapel');
		  $this->load->model('mFetchListTryout');
		  $this->load->model('mLoadDetailEbook');
		  $this->load->model('main');
	}

	public function index()
	{
		$data = array(
			'title' => "Masuk E-Learning"
		);
		 $this->load->view('login', $data);

	}

	public function error404()
	{
		if ($this->session->userdata('status') === 'siswa') {
			$data = array(
				'title' => "Error 404 Not Found"
			);
		 	$this->load->view('error_page/404_siswa', $data);
		}
		else{
			$data = array(
				'title' => "Error 404 Not Found"
			);
		 	$this->load->view('error_page/404_guru', $data);
		}


	}

	public function siswa()
	{

		if ($this->session->userdata('status') === 'siswa') {
			$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'title' => "Dashboard Siswa"
		);
		$this->load->view('templates/header', $data);			
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('siswa/home_siswa', $data);
		$this->load->view('siswa/modal_siswa', $data);
		$this->load->view('templates/footer');
		}

		else{
			redirect(base_url().'core/error404');
		}

	}


	public function video()
	{
		if ($this->session->userdata('status') === 'siswa') {
		
		$config['next_link'] = '&nbsp;>>';
		$config['prev_link'] = '<<&nbsp;';
		$config['first_link'] = '';
		$config['last_link'] = '';

		$this->load->database();
		$jumlah_data = $this->mFetchListMapel->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'core/video';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['user'] = $this->mFetchListMapel->data($config['per_page'], $from);
		$data['nama'] = $this->session->userdata('nama');
		$data['password'] = $this->session->userdata('password');
		$data['title'] = "Video Animasi Belajar";

		$this->load->view('templates/header', $data);			
		$this->load->view('video/sidebar', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('video/daftar-mapel', $data);
		$this->load->view('siswa/modal_siswa', $data);
		$this->load->view('templates/footer');
		}
		
		else{
			redirect(base_url());
		}

	}

	public function ebook()
	{
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'fetch_data' => $this->mFetchListMapel->fetch_data()->result(),
			'title' => "E-Book Pembelajaran"
		);
		$this->load->view('templates/header', $data);			
		$this->load->view('ebook/sidebar', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('ebook/daftar-mapel', $data);
		$this->load->view('siswa/modal_siswa', $data);
		$this->load->view('templates/footer');

	}

	public function tryout()
	{
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'fetch_data' => $this->mFetchListTryout->fetch_data(),
			'title' => "Tryout Uji Kompetensi"
		);
		$this->load->view('templates/header', $data);			
		$this->load->view('tryout/sidebar', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('tryout/tryout', $data);
		$this->load->view('siswa/modal_siswa', $data);
		$this->load->view('templates/footer');

	}

	public function nilai_tryout()
	{
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'fetch_data' => $this->mFetchListTryout->fetch_data(),
			'title' => "Nilai Uji Kompetensi"
		);
		$this->load->view('templates/header', $data);			
		$this->load->view('nilai/sidebar', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('nilai/nilai', $data);
		$this->load->view('siswa/modal_siswa', $data);
		$this->load->view('templates/footer');

	}

// Dashboard Guru Starts

	public function guru()
	{
		if ($this->session->userdata('status') === 'guru') {
			$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'title' => "Dashboard Guru"
		);

		$this->load->view('templates/header', $data);			
		$this->load->view('guru/sidebar', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('guru/home_guru', $data);
		$this->load->view('guru/modal_guru', $data);
		$this->load->view('templates/footer');

		}

		else{
			redirect(base_url().'core/error404');
		}

		
	}

	public function upload_ebook()
	{
		if ($this->session->userdata('status') === 'guru') {
			$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'title' => "Upload E-Book"
		);

		$this->load->view('templates/header', $data);			
		$this->load->view('upload/sidebar_ebook', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('upload/upload_ebook', $data);
		$this->load->view('guru/modal_guru', $data);
		$this->load->view('templates/footer');

		}

		else{
			redirect(base_url());
		}
		
	}

	public function daftar_ebook()
	{
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'fetch_data' => $this->mFetchListMapel->fetch_data(),
			'title' => "Daftar Ebook Pembelajaran"
		);
		$this->load->view('templates/header', $data);			
		$this->load->view('upload/sidebar_ebook', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('upload/daftar_ebook', $data);
		$this->load->view('guru/modal_guru', $data);
		$this->load->view('templates/footer');

	}

	public function detailEbook($id)
	{
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			// 'fetch_data' => $this->mFetchListMapel->fetch_data()->result(),
			'title' => "Daftar Ebook Pembelajaran"
		);
		
		$this->load->model('mLoadDetailEbook');
		$detail = $this->mLoadDetailEbook->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header', $data);			
		$this->load->view('ebook/sidebar', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('ebook/detail-mapel', $data);
		$this->load->view('templates/footer');
	}

	public function upload_video()
	{
		if ($this->session->userdata('status') === 'guru') {
			$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'title' => "Upload Video Animasi"
		);

		$this->load->view('templates/header', $data);			
		$this->load->view('upload/sidebar_video', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('upload/upload_video', $data);
		$this->load->view('guru/modal_guru', $data);
		$this->load->view('templates/footer');

		}

		else{
			redirect(base_url());
		}
		
	}

	public function daftar_video()
	{
		if ($this->session->userdata('status') === 'guru') {
			$data = array(
			'nama' => $this->session->userdata('nama'),
			'password' => $this->session->userdata('password'),
			'fetch_data' => $this->mFetchListMapel->fetch_data_video(),
			'title' => "Daftar Video Animasi"
		);

		$this->load->view('templates/header', $data);			
		$this->load->view('upload/sidebar_video', $data);
		$this->load->view('templates/topbar', $data);		
		$this->load->view('upload/daftar_video', $data);
		$this->load->view('guru/modal_guru', $data);
		$this->load->view('templates/footer');

		}

		else{
			redirect(base_url());
		}
		
	}





// End Dashboard Guru

}
