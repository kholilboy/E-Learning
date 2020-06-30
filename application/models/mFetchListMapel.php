<?php 
 
class mFetchListMapel extends CI_Model{	

	function fetch_data()
	{
    	return $this->db->get('mapel');
	}

	function fetch_data_video()
	{
		return $this->db->get('mapel_animasi');
	}

	function data($number, $offset){
		return $query = $this->db->get('mapel_animasi', $number, $offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('mapel_animasi')->num_rows();
	}
	
}