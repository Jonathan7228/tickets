
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
                            View Tickets
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="center">Number Ticket</th>
                                        <th class="center">Customer</th>
                                        <th class="center">Date Open</th>
                                        <th class="center">Date Closed</th>
                                        <th class="center">Status</th>
                                        <th class="center">View</th>
                                        <th class="center">Closed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $status="Open";
                                        foreach ($array as $key => $value) {
                                            $conn=mysqli_connect("localhost","root","","db_mvtickets") ;
                                            $customers="select * from tbl_customers where intId = ".$value['intIdCustomer']."";
                                            $resultCustomers=mysqli_query($conn,$customers);
                                            $customer=mysqli_fetch_array($resultCustomers);
                                            if($value['bitStatus']==1){$status="Closed";}else{$status="Open";}
                                            echo '<tr class="odd gradeX">';
                                            echo '<td>'.$value['intId'].'</td>';
                                            echo '<td>'.$customer[1].'</td>';
                                            echo '<td>'.$value['tmpDateGet'].'</td>';
                                            echo '<td>'.$value['tmpDateSol'].'</td>';
                                            echo '<td class="center">'.$status.'</td>';
                                            //echo '<td class="center"><a id="btnView" onclick="hola('.$value['intId'].');"><img src="'.URL.VIEWS.DTF.'img/view.png"></a></td>';
                                            echo '<td class="center"><a href="'.URL.'Ticket/view/'.$value['intId'].'"><img src="'.URL.VIEWS.DTF.'img/view.png"></a></td>';
                                            if($value['bitStatus']==0){
                                                echo '<td class="center"><a  href="'.URL.'Ticket/closed/'.$value['intId'].'"><img src="'.URL.VIEWS.DTF.'img/closed.png"></a></td>';
                                            }else{
                                                echo '<td class="center"><img src="'.URL.VIEWS.DTF.'img/closed_op.png"></td>';
                                            }
                                            echo '</tr>';
                                        } 
                                    ?>                                    
                                </tbody>
                            </table>
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
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>