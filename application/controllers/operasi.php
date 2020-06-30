<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class operasi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('main');
		$this->load->helper('url');
 
	}

     public function delete_ebook()
     {
        $kode = $this->input->post('hapus');

        $this->main->hapus_ebook($kode);

        redirect('core/daftar_ebook');
    }

    public function edit_ebook(){
        $id=$this->input->post('id');
        $bab=$this->input->post('bab');
        $materi=$this->input->post('materi');
        $kelas=$this->input->post('kelas');
        $upload_ebook=$this->input->post('upload_ebook');

        $this->main->edit_ebook($bab,$materi,$kelas,$upload_ebook,$id);
        redirect('core/daftar_ebook');
    }

     public function delete_video()
     {
        $kode = $this->input->post('hapus');

        $this->main->hapus_video($kode);

        redirect('core/daftar_video');
    }

    public function edit_video(){
        $id=$this->input->post('id');
        $bab=$this->input->post('bab');
        $materi=$this->input->post('materi');
        $kelas=$this->input->post('kelas');
        $upload_video=$this->input->post('upload_video');

        $this->main->edit_video($bab,$materi,$kelas,$upload_video,$id);
        redirect('core/daftar_video');
    }




}