<?php include 'header.php'; ?>


<div class="content">
    <div class="header">

        <h1 class="page-title">Makeup</h1>
        <ul class="breadcrumb">
            <li><a href="#">Home</a> </li>
            <li class="active">Makeup</li>
        </ul>

    </div>
    <div class="main-content">

        <div class="btn-toolbar list-toolbar">
            <a href="product_add.php"><button class="btn btn-primary"><i class="fa fa-plus"></i> New Makeup</button></a>
            <div class="btn-group">
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Image</th>
                    <th>Collection Title</th>
                    <th>Product Title</th>
                    <th style="width: 3.5em;"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("php/connect.php");
              $sql= "SELECT p.*, s.* FROM product as p INNER JOIN sub_menu as s ON s.id=p.sub_menu_id WHERE p.menu_id=1";
				if($result = mysql_query($sql)){
				if(mysql_num_rows($result) > 0){
				while($row = mysql_fetch_array($result)){

					
					
                    ?>
                    <tr>
                        <td><?php echo $row['sub_menu'] ?></td>
                        <td><img src="../images/<?php echo $row['img_1'] ?>" height="40" /></td>
                        <td><?php echo $row['collection_title'] ?></td>
                        <td><?php echo $row['product_title'] ?></td>
                        <td>
                            <a href="products.php?id=<?php echo $row['id'] ?>"><i class="fa fa-pencil"></i></a>
                            <a href="#" role="button" data-toggle="modal"><i class="fa fa-trash-o delete_btn"></i></a>
                        </td>
                    </tr>
                <?php }
						}
						}
						?>
                
            </tbody>
        </table>

        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>

        <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Delete Confirmation</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?<br>This cannot be undone.</p>
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