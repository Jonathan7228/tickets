<?php 
$date = date("Y-m-d H:i:s"); 

$conn=mysqli_connect("localhost","root","","db_mvtickets") ;
$customers="select * from tbl_customers";
$resultCustomers=mysqli_query($conn,$customers);

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
                            Create Ticket
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="createTicket" name="createTicket" method="POST">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Who get ticket</label>
                                            <select class="form-control" id="intIdEngineerGet" name="intIdEngineerGet">
                                                <option value="">Select a Enginner</option>
                                                    <?php
                                                    while($eng=mysqli_fetch_array($resultEngineer))
                                                    echo "<option value='".$eng["intId"]."''>".$eng["strName"]."</option>";
                                                ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Customer</label>
                                            <select class="form-control" id="intIdCustomer" name="intIdCustomer">
                                                <option value="">Select a Customer</option>
                                                <?php
                                                    while($cust=mysqli_fetch_array($resultCustomers))
                                                    echo "<option value='".$cust["intId"]."''>".$cust["strName"]."</option>";
                                                ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" id="tmpDateGet" name="tmpDateGet" readonly="readonly" value="<?php echo $date; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="5" id="strDescriptionGet" name="strDescriptionGet"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">                                  
                                        <button type="submit" id="btnSendTicket" class="btn btn-default">Send</button>
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
        <script>
            
        $(function(){
            $("#btnSendTicket").click(function(){
                var intIdEngineerGet = $.trim($("#intIdEngineerGet").val());
                var intIdCustomer = $.trim($("#intIdCustomer").val());
                var tmpDateGet = $.trim($("#tmpDateGet").val());
                var strDescriptionGet = $.trim($("#strDescriptionGet").val());
                if(intIdEngineerGet == "" || intIdCustomer == "" || tmpDateGet == "" || strDescriptionGet == ""){

                }else{ 
                    $.ajax({
                        type:"POST",
                        url: "<?php echo URL; ?>Ticket/create",
                        data: {intIdEngineerGet:intIdEngineerGet, intIdCustomer:intIdCustomer, tmpDateGet:tmpDateGet, strDescriptionGet:strDescriptionGet},
                        success: function(response){
                            if(response == 1){
                                alert("Ticket success!");
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