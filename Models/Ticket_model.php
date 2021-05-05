<?php 
	
	/**
	* 
	*/
	class Ticket_model extends Conecction
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function createModel($array){
			return $this->db->insert('tbl_tickets',$array);
		}

		function findModel($fields,$where){
			return $this->db->select($fields,'tbl_tickets',$where);
		}

		function getDataModel($columns,$where){
			return $this->db->select($columns,'tbl_tickets',$where);
		}

		function closedTicketModel($array,$where){
			return $this->db->update('tbl_tickets',$array,$where);
		}
	}

 ?>