<?php 
 
class main extends CI_Model {   

    
    function cek_data_guru($nama_guru, $password_baru) {
       $query = $this->db->query("UPDATE guru SET `password`='$password_baru' WHERE `username`='$nama_guru'");
       return $query;
    }

    function cek_data($nama_siswa, $password_baru) {
       $query = $this->db->query("UPDATE siswa SET `password`='$password_baru' WHERE `username`='$nama_siswa'");
       return $query;
    }

    function insertdata($data) {
        // Param 1: nama table, param 2: data berupa assosiatif array
        $this->db->insert("mapel", $data);
        return $this->db->insert_id();
    }

    function insertdataVideo($data) {
        $this->db->insert("mapel_animasi", $data);
        return $this->db->insert_id();
    }

    function hapus_ebook($kode) {
        $hasil = $this->db->query("DELETE FROM mapel WHERE id='$kode'");
        return $hasil;
    }

    function edit_ebook($bab,$materi,$kelas,$upload_ebook,$id){
        $hasil=$this->db->query("UPDATE mapel SET bab='$bab',materi='$materi',kelas='$kelas',upload_ebook='$upload_ebook' WHERE id='$id'");
        return $hasil;
    }

    function hapus_video($kode) {
        $hasil = $this->db->query("DELETE FROM mapel_animasi WHERE id='$kode'");
        return $hasil;
    }

    function edit_video($bab,$materi,$kelas,$upload_video,$id) {
        $hasil=$this->db->query("UPDATE mapel_animasi SET bab='$bab',materi='$materi',kelas='$kelas',upload_video='$upload_video' WHERE id='$id'");
        return $hasil;
    }

}