<?php 
 
class mLoadDetailEbook extends CI_Model {   

    
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('mapel', array('id' => $id))->row();

        return $query;


    }









}