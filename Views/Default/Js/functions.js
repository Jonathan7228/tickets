
$().ready(function(){
	$("#createCustomer").validate({
		rules: {
			strName:{
				required: true
			}
		},
			messages:{
				strName: { required: "Please Insert Name", }
			}

	});
	$("#strName").focus();
});

$().ready(function(){
	$("#createEnginner").validate({
		rules: {
			strName:{
				required: true
			}
		},
			messages:{
				strName: { required: "Please Insert Name", }
			}

	});
	$("#strName").focus();
});

$().ready(function(){
	$("#createTicket").validate({
		rules: {
			intIdEngineerGet:{
				required: true
			},
			intIdCustomer:{
				required: true
			},
			strDescriptionGet:{
				required: true
			}
		},
			messages:{
				intIdEngineerGet: { required: "Please Select a Enginner", },
				intIdCustomer: { required: "Please Select a Customer", },
				strDescriptionGet: { required: "Please Insert Description", }
			}

	});
	
});


$().ready(function(){
	$("#closedTicket").validate({
		rules: {
			intIdEngineerSol:{
				required: true
			},
			strDescriptionSol:{
				required: true
			}
		},
			messages:{
				intIdEngineerSol: { required: "Please Select a Enginner", },
				strDescriptionSol: { required: "Please Insert Solution", }
			}

	});
	
});