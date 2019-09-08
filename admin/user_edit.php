<?php include 'header.php'; ?>

    
    <div class="content">
        <div class="header">

            <h1 class="page-title">Edit User</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li><a href="users.php">Users</a> </li>
                <li class="active">Edit User</li>
            </ul>

        </div>
        <div class="main-content">

            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">User Details</a></li>
            </ul>

            <div class="row">
                <div class="col-md-8">
                    <br>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="home">
                           
                           
                           <?php

$p_id = $_GET['id'];
					
//echo $p_id;					
					
include("php/connect.php");
$sql= "SELECT * FROM users WHERE id='$p_id'";
 
 
if($result = mysqli_query($conn,$sql)){
	
	 if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
	
			//$role =  $row['role'];
			$username =  $row['username'];
	
	$role =  $row['role'];
	
	$status =  $row['status'];
	
	
	
	
	
	
?>
                           
                           
                            <form id="form_2" action="php/user/edit.php?id=<?php echo $p_id; ?>" method="post">
                                <div class="form-group">
                                    <label>Username <?php //echo $username;  ?></label>
                                    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control">
                                </div>
                                
                                
                                <div class="form-group col-md-6">
                    <label>User Role</label>
                    <select name="role" id="role" class="form-control">
                    
                    <?php if ($role == 'admin' )
                    
           echo '<option value='.$role.'>Administrator</option>' ; ?> 
           
           <?php if ($role == 'user' )
                    
           echo '<option value='.$role.'>User</option>' ; ?> 
            
            
            
             <option value="admin">Administrator</option>
              <option value="admin">User</option>
	
            </select>
                    
                    </div>
                               
                               
                               <div class="form-group col-md-6">
                    <label>User Active</label>
                    <select name="status" id="status" class="form-control">
                    
                    <?php if ($status == '1' )
                    
           echo '<option value='.$status.'>Active</option>' ; ?> 
           
           <?php if ($status == '0' )
                    
           echo '<option value='.$status.'>Inactive</option>' ; ?> 
            
            
            
             <option value="1">Activate</option>
              <option value="0">Inactivate</option>
	
            </select>
                    
                    </div>
                                
                              
                                
                                
                                
                                <div class="form-group">
                                    <label></label>
                                    <button class="btn btn-primary"><i class="fa fa-save"></i> Add</button>
                                </div>
                                
                                <?php
						}
	 }
}

						?>
                                
                                
                            </form>
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