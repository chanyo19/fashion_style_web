<div class="navbar navbar-default" role="navigation">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="" href="dashboard.php"><span class="navbar-brand"> Fashion Style Admin Panel </span></a>
                
                
                
                </div>



            <div class="navbar-collapse collapse" style="height: 1px;">

                <ul id="main-menu" class="nav navbar-nav navbar-right">

                    <li class="dropdown hidden-xs">
                        
                        

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> <?php echo $_SESSION['user_name']; ?>

                            <i class="fa fa-caret-down"></i>

                        </a>



                        <ul class="dropdown-menu">

                            <li><a href="user_view.php">My Account</a></li>

                            <li class="divider"></li>
                            
                            <li><a href="../index.php" target="new">View Site</a></li>
                            
                            <li class="divider"></li>

                            <li><a tabindex="-1" href="php/logout.php?id=<?php echo $_SESSION['user_id']; ?>">Logout</a></li>

                        </ul>

                    </li>
                    
                    

                </ul>



            </div>

        </div>