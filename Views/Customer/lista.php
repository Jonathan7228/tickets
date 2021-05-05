
<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Customers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View Customers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Number Customer</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($array as $key => $value) {
                                            echo '<tr class="odd gradeX">';
                                            echo '<td>'.$value['strName'].'</td>';
                                            echo '<td class="center"><a href="'.URL.'Customer/edit/'.$value['intId'].'"><img src="'.URL.VIEWS.DTF.'img/view.png"></a></td>';
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