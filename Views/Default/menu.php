<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">Tickets MV</a>
            </div>
            <!-- /.navbar-header -->

         
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?php echo URL; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-ticket fa-fw"></i> Tickets<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL; ?>Ticket/form">Create Ticket</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>">View Tickets</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Customers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL; ?>Customer/form">Create Customer</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>Customer/lista">View Customer</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Engineers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL; ?>Engineer/form">Create Engineer</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>Engineer/lista">View Engineer</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>