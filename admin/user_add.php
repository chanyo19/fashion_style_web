
    <?php include 'header.php'; ?>

    
    
<style>
	
select, input, textarea {
    -webkit-appearance: none;
    -webkit-border-radius: 0;
    border-radius: 0;
}
	
	 input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
       
        
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
       
       
        position: relative;
        background-color: #008e55;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
	
	</style>
    
    <div class="content">
        <div class="header">

            <h1 class="page-title">Add User</h1>
            <ul class="breadcrumb">
                <li><a href="dashboard.php">Home</a> </li>
                <li><a href="user_view.php">Users</a> </li>
                <li class="active">Add User</li>
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
                            <form id="form_2" action="php/user/add.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" value="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" value="" class="form-control">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label>User Role</label>
                                   <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="role" name="role" value="admin" style="width: 0px;">
  <label class="form-check-label" for="inlineRadio1"><p style="font-weight: lighter;"> &nbsp; &nbsp; Administrator</p></label>
 &nbsp; 
  <input class="form-check-input" type="radio" id="role" name="role" value="user" style="width: 0px;">
  <label class="form-check-label" for="inlineRadio2"><p style="font-weight: lighter;"> &nbsp; &nbsp;User</p></label>
 
</div>
                                </div>
                                
                                <div class="form-group">
                                    <label>User Active</label>
                                   <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="status" name="status" value="1" style="width: 0px;">
  <label class="form-check-label" for="inlineRadio1"><p style="font-weight: lighter;">&nbsp; &nbsp;Activate</p></label>
 &nbsp; 
  <input class="form-check-input" type="radio" id="status" name="status" value="0" style="width: 0px;">
  <label class="form-check-label" for="inlineRadio2"><p style="font-weight: lighter;">&nbsp; &nbsp;Inactivate</p></label>
 
</div>
                                </div>
                                
                                <div class="form-group">
                                    <label></label>
                                    <button class="btn btn-primary"><i class="fa fa-save"></i> Add</button>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>

            <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Delete Confirmation</h3>
                        </div>
                        <div class="modal-body">

                            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
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