<?php 


/**
* 
*/
class Conecction extends Controllers
{
	
	function __construct()
	{
		$this->db = new QueryManager("localhost","root","","db_mvtickets");
	}
}

 ?>