<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sample_Model extends CI_Model {

  public function record($table='',$id = '',$data='',$operation=''){

  	switch($operation){
  		case 'add':
  		$this->db->insert($table, $data);
  		break;
  		case 'all':
  		$this->db->select('*');
  		$this->db->from($table);
  		$query=$this->db->get();
  		return $query->result_array();
      case 'delete':
      $this->db->where('id',$id);
      $this->db->delete($table);
      break;
      case 'single':
      $this->db->select('*');
      $this->db->from($table);
      $this->db->where('id',$id);
      $query = $this->db->get();
      return $query->result_array();
       case 'update':
      $this->db->where('id', $id);
      $this->db->update($table, $data); 
      break;

  	}
   


     
  }

}
?>