<?php 

/**
* 
*/
class Customer extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function form(){
		$this->view->render($this,'form',"");
		
	}

	public function lista(){
		$response = $this->model->getDataModel('*','tbl_customers');
		$this->view->render($this,'lista',$response);	
	}

	public function edit($intId){
		$response = $this->model->getDataModelCustomer("*","intId = '".$intId."'");
		$this->view->render($this,'edit',$response);
	}


	public function create(){
		if(isset($_POST['strName'])){
			$response = $this->model->verifyCustomer('*',"strName = '".$_POST['strName']."'");
			$response = $response[0];
			if ($response == NULL) {
				$array["strName"]=$_POST['strName'];
				$this->model->createModel($array);
				echo 1;
			} else {
				echo 0;
			}
			
		}
		
	}
	

	public function editData(){
		if (isset($_POST['intId']) && isset($_POST['strName'])) {
			$intId = $_POST['intId'];
			$array['strName'] =$_POST['strName'];
			$this->model->editDataModel($array,"intId = '".$intId."'"); 
			echo 1;
		}

	}
}

 ?>