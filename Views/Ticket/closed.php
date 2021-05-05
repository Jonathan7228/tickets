<?php 

foreach ($array as $key => $value) {
$date = date("Y-m-d H:i:s"); 

$conn=mysqli_connect("localhost","root","","db_mvtickets") ;
$customer="select * from tbl_customers where intId=".$value['intIdCustomer']."";
$resultCustomer=mysqli_query($conn,$customer);
$cus = mysqli_fetch_array($resultCustomer);

$Engineer="select * from tbl_engineers where intId=".$value['intIdEngineerGet']."";
$resultEngineer=mysqli_query($conn,$Engineer);
$eng = mysqli_fetch_array($resultEngineer);


$Engineers="select * from tbl_engineers";
$resultEngineer=mysqli_query($conn,$Engineers);
                                      

    

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tickets</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Closed Ticket
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="closedTicket" name="closedTicket" method="POST">
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Number Ticket: <?php echo $value['intId']; ?></label>
                                                <input type="hidden" class="form-control" id="intId" name="intId" readonly="readonly" value="<?php echo $value['intId']; ?>">
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Who get ticket</label>
                                                <input class="form-control" id="intIdEngineerGet" name="intIdEngineerGet" readonly="readonly" value="<?php echo $eng[1]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Customer</label>
                                                <input class="form-control" id="intIdCustomer" name="intIdCustomer" readonly="readonly" value="<?php echo $cus[1]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" id="tmpDateGet" name="tmpDateGet" readonly="readonly" value="<?php echo $value['tmpDateGet']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="5" id="strDescriptionGet" name="strDescriptionGet" readonly="readonly" ><?php echo $value['strDescriptionGet']; ?></textarea>
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Engineer solves ticket</label>
                                            <select class="form-control" id="intIdEngineerSol" name="intIdEngineerSol">
                                                <option value="">Select a Enginner</option>
                                                    <?php
                                                    while($eng=mysqli_fetch_array($resultEngineer))
                                                    echo "<option value='".$eng["intId"]."''>".$eng["strName"]."</option>";
                                                ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Solution date ticket</label>
                                            <input class="form-control" id="tmpDateSol" name="tmpDateSol" readonly="readonly" value="<?php echo $date; ?>">
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Solution</label>
                                            <textarea class="form-control" rows="5" id="strDescriptionSol" name="strDescriptionSol" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" id="btnSend" class="btn btn-default">Send</button>                    
                                        <button type="button" id="btnBack" class="btn btn-default">Back</button>
                                    </div>
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        <?php } ?>
        <script>
            
        $(function(){
            $("#btnBack").click(function(){
               document.location = "<?php echo URL; ?>";
            });
        });

        $(function(){
            $("#btnSend").click(function(){
                var intId = $.trim($("#intId").val());
                var intIdEngineerSol = $.trim($("#intIdEngineerSol").val());
                var tmpDateSol = $.trim($("#tmpDateSol").val());
                var strDescriptionSol = $.trim($("#strDescriptionSol").val());
                if(intIdEngineerSol == "" || tmpDateSol == "" || strDescriptionSol == ""){

                }else{ 
                    $.ajax({
                        type:"POST",
                        url: "<?php echo URL; ?>Ticket/closedTicket",
                        data: {intId:intId,intIdEngineerSol:intIdEngineerSol, tmpDateSol:tmpDateSol, strDescriptionSol:strDescriptionSol},
                        success: function(response){
                            if(response == 1){
                                alert("Ticket closed success!");
                                document.location = "<?php echo URL; ?>";
                                }else{
                                    alert("Error");
                                }
                        }
                    });
                    return false;
                }
            });
        });

        </script>