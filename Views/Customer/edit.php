<?php foreach ($array as $key => $value) { ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Customers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Customer
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" id="createCustomer" name="createCustomer" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="hidden" id="intId" name="intId" value="<?php echo $value['intId']; ?>">
                                            <input class="form-control" id="strName" name="strName" value="<?php echo $value['strName']; ?>">
                                        </div>
                                                                                
                                        <button type="submit" id="btnSend" class="btn btn-default">Send</button>
                                    </form>
                                </div>
                                
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
            $("#btnSend").click(function(){
               
                var intId = $.trim($("#intId").val());
                var strName = $.trim($("#strName").val());

                if(strName == ""){

                }else{
                    $.ajax({
                        type:"POST",
                        url: "<?php echo URL; ?>Customer/editData",
                        data: {intId:intId, strName:strName},
                        success: function(response){
                            if(response == 1){
                                alert("Customer success!");
                                document.location = "<?php echo URL; ?>Customer/liste";
                                }else{
                                    alert("This customer already exists");
                                }
                        }
                    });
                    return false;
                }
            });
        });

        </script>