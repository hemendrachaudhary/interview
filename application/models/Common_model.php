<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Common_model extends CI_Model {
	function __construct() {
		parent::__construct ();
                $this->load->database();
	}
	public function insertAll($table, $data) {
		// $this->db->last_query();;
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
			if ($insert_id > 0) {
				return $insert_id;
			} else {
				return false;
			}
	}
	public function getAllResult($table){
  $allData = $this->db->get($table)->result();
		return $allData;
	}
	
	public function getAllResultArray($table, $where) {
		$allData = $this->db->get_where($table, $where)->result();
                return $allData;    
	}
	
	public function  getRowResultArray($table, $where){
		$allData = $this->db->get_where($table, $where)->row();
		  
                return $allData;
                
	}
	
	public function getAllResultWhereOrderBy($table, $where, $colum) { 
	
		if(empty($where)){
			$allData = $this->db->order_by($colum, "desc")->get($table)->result();
			return $allData;
		}else{
			$allData = $this->db->order_by($colum, "desc")->get_where($table, $where)->result();
			return $allData;
		}
	}

	public function updateAllResultWhere($table, $where, $data) {
		$this->db->where($where)->update($table, $data);
		$afftectedRows = $this->db->affected_rows();
              
		return $afftectedRows;
	}
	
	

	public function deleteArray($table,$data){
		$allData = $this->db->where($data)->delete($table);
		return $allData;
		
	}
 
  } 

?>