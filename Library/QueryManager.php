<?php 

/**
* 
*/
class QueryManager
{
	
	private $link;
	function __construct($HOST,$USER,$PASS,$NAME)
	{
		$this->link = new mysqli($HOST,$USER,$PASS,$NAME);
		if (mysqli_connect_errno()) {
			printf("conect failed: %\n",mysqli_connect_error());
			exit();
		}
	}

	function select($attr,$table,$where){
		$query = "SELECT ".$attr." FROM ".$table." WHERE ".$where.";";
		$result = $this->link->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$response[] = $row;
			}
			return $response;
		}
	}

	function insert($table,$columns){
		$columnas = null;
		$data = null;
		foreach ($columns as $key => $value) {
			$columnas .= $key.',';
			$data .='"'.$value.'",'; 
		}
		$columnas = substr($columnas, 0, -1);
		$data = substr($data, 0, -1);
		$stmt = "INSERT INTO ".$table." (".$columnas.") VALUES (".$data.")";
		$result = $this->link->query($stmt) or die($this->link->error);
	}

	function update($table,$columns,$where){
		$values = "";
		foreach ($columns as $key => $value) {
			$values .= $key.'="'.$value.'",';
		}
		$values = substr($values, 0, strlen($values)-1);
		$query = "UPDATE $table SET $values WHERE $where";
		$result = $this->link->query($query) or die ($this->link->error.__LINE__);
		return true;
	}
}

 ?>