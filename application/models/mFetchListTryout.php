<?php 
 
class mFetchListTryout extends CI_Model{	

	function fetch_data()
	{
    	return $this->db->get('tryout');
	}
	
}