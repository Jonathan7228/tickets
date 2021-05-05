<?php 

/**
* 
*/
class Ticket extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function form(){
		$this->view->render($this,'form',"");
		
	}


	public function create(){
		$array["intIdEngineerGet"]=$_POST['intIdEngineerGet'];
		$array["intIdCustomer"]=$_POST['intIdCustomer'];
		$array["tmpDateGet"]=$_POST['tmpDateGet'];
		$array["strDescriptionGet"]=$_POST['strDescriptionGet'];
		$this->model->createModel($array);
		echo 1;
	}

	public function view($intId){
		$response = $this->model->getDataModel("*","intId = '".$intId."'");
		$this->view->render($this,"view",$response);
	}

	public function closed($intId){
		$response = $this->model->getDataModel("*","intId = '".$intId."'");
		$this->view->render($this,"closed",$response);
	}

	public function closedTicket(){
		if (isset($_POST['intId']) && isset($_POST['intIdEngineerSol']) && isset($_POST['tmpDateSol']) && isset($_POST['strDescriptionSol'])) {
			$intId = $_POST['intId'];
			$array['intIdEngineerSol'] =$_POST['intIdEngineerSol'];
			$array['tmpDateSol'] =$_POST['tmpDateSol'];
			$array['strDescriptionSol'] =$_POST['strDescriptionSol'];
			$array['bitStatus'] = 1;
			$this->model->closedTicketModel($array,"intId = '".$intId."'"); 
			echo 1;
		}

	}
}

 ?>