<?php 
	
	/**
	* 
	*/
	class Engineer_model extends Conecction
	{
		private $data = array();
		function __construct()
		{
			parent::__construct();
		}

		function verifyEngineer($fields,$where){
			return $this->db->select($fields,'tbl_engineers',$where);
		
		}

		function createModel($array){
			return $this->db->insert('tbl_engineers',$array);
		}

		function getDataModel($columns,$table){
			return $this->db->select($columns,$table,'1');
		}

		function getDataModelEngineer($columns,$where){
			return $this->db->select($columns,'tbl_engineers',$where);
		}

		function editDataModel($array,$where){
			return $this->db->update('tbl_engineers',$array,$where);
		}
	
	}

 ?>