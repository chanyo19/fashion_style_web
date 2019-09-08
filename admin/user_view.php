<?php include 'header.php'; ?>

<div class="content">
    <div class="header">
        <div class="stats">

        </div>

        <h1 class="page-title">Users</h1>
        <ul class="breadcrumb">
            <li><a href="dashboard.php">Home</a> </li>
            <li class="active">View Users</li>
        </ul>

    </div>
    <div class="main-content">





        <div class="panel panel-default">
            <a href="#page-stats" class="panel-heading" data-toggle="collapse">Latest Status</a>
            <div id="page-stats" class="panel-collapse panel-body collapse in">

                <div class="row">
<div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead >
                                    <tr >
                                       <th>ID</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Edit</th>
                                        <th>Active / Inactive</th>
                                    </tr>
                                </thead>

                                <tbody>
                                
                                 <?php
                            include 'php/connect.php';

                            $result = mysqli_query($conn,"SELECT * FROM users");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $username = $row['username'];
								
								$status = $row['status'];
								
								$role = $row['role'];
								
								$user_id = $row['id'];
	
                                ?>
                                
                                    <tr>
            <td align="center"><?php echo $user_id; ?></td>
            <td align="center"><?php echo $username; ?></td>
 			<td align="center"><?php echo $role; ?></td>
           
			<td> <a href="user_edit.php?id=<?php echo $row['id'] ?>"><img src="images/eye.png"></a></td>
			
			<td align="center"><?php if ($status == '1' ) 
			echo '<a href="php/user/user_active.php?id='.$user_id.'" ><button type="button" class="btn btn-success">Active</button></a>' ; ?> 
          
          <?php if ($status == '0' )
		echo '<a href="php/user/user_inactive.php?id='.$user_id.'" ><button type="button" class="btn btn-danger">Inactive</button></a>' ; ?></td>
			
			
                                        
                                    </tr>
                           <?php
											 
							}
						   
						   ?>
                                </tbody>
                            </table>
                        </div>

                   

                    
                </div>
            </div>
        </div>

        

        


        <footer>
            <hr>


        </footer>
    </div>
</div>
<?php include 'footer.php'; ?>