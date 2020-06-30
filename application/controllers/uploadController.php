<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class uploadController extends CI_Controller {


	function __construct() {
	      parent::__construct();
	      $this->load->helper('url');
	      $this->load->model('main');
	}

	public function add_ebook() {

        $this->form_validation->set_rules("nama_bab", "nama_bab", "required");
        $this->form_validation->set_rules("judul", "judul", "required");
        $this->form_validation->set_rules("kelas", "kelas", "required");
        // $this->form_validation->set_rules("upload_ebook", "upload_ebook", "required");

        if ($this->form_validation->run() === true) {  // Cek validasi, return true jika lolos validasi
            
            $data = array(
                'bab'    => $this->input->post("nama_bab"),
                'materi'    => $this->input->post("judul"),
                'kelas'    => $this->input->post("kelas"),
                'upload_ebook'  => $this->input->post("upload_ebook")
            );

            // Konfigurasi upload file
            $config = array(
                'upload_path'   => './uploads/',
                'allowed_types' => 'pdf',
                'max_size'      => 0,
                'max_width'     => 0,
                'max_height'    => 0
            );

            $this->load->library('upload', $config);    // Load library upload & pasang config

            // Menangkap file yang diupload
            if (!$this->upload->do_upload('upload_ebook')) {
                echo $this->upload->display_errors();   // Menangkap pesan error
                
            } else {
                $data["upload_ebook"] = $this->upload->data()["file_name"];    // Mengambil nama file upload
                
            }


            $id = $this->main->insertdata($data);

        }
        
        redirect('core/daftar_ebook');
    }

    public function add_video() {

        $this->form_validation->set_rules("nama_bab", "nama_bab", "required");
        $this->form_validation->set_rules("judul", "judul", "required");
        $this->form_validation->set_rules("kelas", "kelas", "required");
        $this->form_validation->set_rules("upload_video", "upload_video", "required");

        if ($this->form_validation->run() === true) {  // Cek validasi, return true jika lolos validasi
            
            $data = array(
                'bab'    => $this->input->post("nama_bab"),
                'materi'    => $this->input->post("judul"),
                'kelas'    => $this->input->post("kelas"),
                'upload_video'  => $this->input->post("upload_video")
            );

            $id = $this->main->insertdataVideo($data);

        }
        
        redirect('core/daftar_video');
    }


}