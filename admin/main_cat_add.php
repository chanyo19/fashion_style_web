<?php include 'header.php'; ?>


<div class="content">
    <div class="header">
        <div class="stats">

        </div>

        <h1 class="page-title">Main Category</h1>
        <ul class="breadcrumb">
            <li class="active">Add New Main Category</li>
        </ul>

    </div>
    <div class="main-content">
        <div class="row">

            <div class="col-md-12 ">

                <div class="col-md-12 panel panel-default" style="padding: 0px;">
                    <div class="panel-heading no-collapse">Add New Main Category<span class="label label-warning"></span></div>


                    <form class="panel-text" id="form_1" action="php/main_category/add_main_cat.php" method="post" enctype="multipart/form-data">
                       
                        <div class="form-group col-md-6">
                           <label>Main Category Name</label>
                            <input type="text" name="category_name" value="" class="form-control" required>
                        </div>

         <div class="clearfix"></div>

                        
                        <div class="form-group col-md-12">

                            <button class="btn btn-primary submit_btn" name="submit"><i class="fa fa-save"></i> Add</button>
                        </div>

                    </form>

                </div>

            </div>


        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        $('.variation_box').hide();
        $(".is_variation").click(function () {

            var checked_status = $(this).is(":checked");
            //alert(checked_status);
            if (checked_status) {
                $('.variation_box').show();
            } else {
                $('.variation_box').hide();
            }
        });

        $(".delete_btn").click(function () {
            //alert('hi');
            var b_id = $(this).data('bid');
            //alert(b_id);
            var r = confirm("Are you sure to delete this?");
            if (r) {
                window.location.href = "php/brand/delete.php?b_id=" + b_id;
            }
        });

    });

    function readURL(input, ids) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#' + ids).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<?php include 'footer.php'; ?>