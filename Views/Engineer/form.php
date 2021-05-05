
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Enginers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Engineer
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" id="createEnginner" name="createEnginner" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" id="strName" name="strName">
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
        <script>
            
        $(function(){
            $("#btnSend").click(function(){
                var strName = $.trim($("#strName").val());
                if(strName == ""){

                }else{
                    $.ajax({
                        type:"POST",
                        url: "<?php echo URL; ?>Engineer/create",
                        data: {strName: strName},
                        success: function(response){
                            if(response == 1){
                                alert("Enginner success!");
                                document.location = "<?php echo URL; ?>Engineer/lista";
                                }else{
                                    alert("This enginner already exists");
                                }
                        }
                    });
                    return false;
                }
            });
        });

        </script>