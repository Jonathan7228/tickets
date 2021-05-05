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

$EngineerSol="select * from tbl_engineers where intId=".$value['intIdEngineerSol']."";
$resultEngineerSol=mysqli_query($conn,$EngineerSol);
$engSol = mysqli_fetch_array($resultEngineerSol);


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
                            View Ticket
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="createTicket" name="createTicket" method="POST">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Who get ticket</label>
                                                <input class="form-control" id="intIdEngineerGet" name="intIdEngineerGet" disabled="disabled" value="<?php echo $eng[1]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Customer</label>
                                                <input class="form-control" id="intIdCustomer" name="intIdCustomer" disabled="disabled" value="<?php echo $cus[1]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" id="tmpDateGet" name="tmpDateGet" disabled="disabled" value="<?php echo $value['tmpDateGet']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="5" id="strDescriptionGet" name="strDescriptionGet" disabled="disabled" ><?php echo $value['strDescriptionGet']; ?></textarea>
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Engineer solves ticket</label>
                                            <input class="form-control" id="intIdEngineerSol" name="intIdEngineerSol" disabled="disabled" value="<?php echo $engSol["strName"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Solution date ticket</label>
                                            <input class="form-control" id="tmpDateSol" name="tmpDateSol" disabled="disabled" value="<?php echo $value['tmpDateSol']; ?>">
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Solution</label>
                                            <textarea class="form-control" rows="5" id="strDescriptionSol" disabled="disabled"  name="strDescriptionSol" ><?php echo $value['strDescriptionSol']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">                   
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

        </script>