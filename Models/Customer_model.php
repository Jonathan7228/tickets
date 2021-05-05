<?php 
	
	/**
	* 
	*/
	class Customer_model extends Conecction
	{
		private $data = array();
		function __construct()
		{
			parent::__construct();
		}

		function verifyCustomer($fields,$where){
			return $this->db->select($fields,'tbl_customers',$where);
		
		}

		function createModel($array){
			return $this->db->insert('tbl_customers',$array);
		}

		function getDataModel($columns,$table){
			return $this->db->select($columns,$table,'1');
		}

		function getDataModelCustomer($columns,$where){
			return $this->db->select($columns,'tbl_customers',$where);
		}

		function editDataModel($array,$where){
			return $this->db->update('tbl_customers',$array,$where);
		}
	}

 ?>