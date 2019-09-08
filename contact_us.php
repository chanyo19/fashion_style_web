<?php


	include 'header4.php';

?>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function (e){
        $("#contact_form2").on('submit',(function(e){
            e.preventDefault();
            $("#mail-status").hide();
            $('#send-message').hide();
            $('#loader-icon').show();
            $.ajax({
                url: "php/contact_us/contact.php",
                type: "POST",
                dataType:'json',
                data: {
                    "title":$('input[name="title"]').val(),
                    "name":$('input[name="name"]').val(),
                    "email":$('input[name="email"]').val(),
                    "phone":$('input[name="phone"]').val(),
                    "content":$('textarea[name="content"]').val(),
                    "g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},
                success: function(response){
                    $("#mail-status").show();
                    $('#loader-icon').hide();
                    if(response.type == "error") {
                        $('#send-message').show();
                        $("#mail-status").attr("class","error1");
                    } else if(response.type == "message"){
                        $('#send-message').hide();
                        $("#mail-status").attr("class","success");
                    }
                    $("#mail-status").html(response.text);
                },
                error: function(){}
            });
        }));
    });
</script>


<style>

    #message {  padding: 0px 40px 0px 0px; }
    #mail-status {
        padding: 12px 20px;
        width: 100%;
        display:none;
        font-size: 1em;

        color:#FFFFFF;
    }
    .error1{background-color: #d21e2b;  margin-bottom: 40px;}
    .success{background-color: #28a745; }
    .g-recaptcha {margin: 0 0 25px 0;}
</style>



<!-- Header Banner -->
        <div class="header-banner banner-image"><!-- Banner Img -->
            <div class="banner-wrap">
                <div class="banner-overlay-color" style="background-color: rgba(0,0,0,0.4)"></div>
                <div class="banner-header" style="background-image: url(assets/images/img1.jpg); min-height:250px;" >
                    <div class="banner-content">
                        <h3 class="title-page" data-color="#333333">Strike Up a Conversation With Us!</h3>
                        <div class="breadcrumb-wrap">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="#"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>Contact Us</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Banner -->
    </header>
    <div class="main-content">
        <div class="site-content-inner">
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    <div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12" style="padding:150px 0 0;">
                        <div id="main" class="site-main">
                            <!-- Contact Content -->
                            <div class="contact-wrap">
                                <!-- Map Element -->
                                <div class="xshop-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2393666659455!2d79.90616521532594!3d6.861890921039234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a7cadc1382f%3A0xe594de726d60dce8!2s108%20Udahamulla%20Station%20Rd%2C%20Nugegoda!5e0!3m2!1sen!2slk!4v1567929735988!5m2!1sen!2slk" width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                                <!-- End Map Element -->
                                <!-- Contact Form Element -->
                                <div class="xshop-contact-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="contact-info">
                                                <h5 class="title-contact-info">Contact Info</h5>



                                                <div id="tab_product" class="tab-product-page">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist" >
                                                        <li role="presentation" class="active">
                                                            <a href="#srilanka" aria-controls="description" role="tab" data-toggle="tab">Sri Lanka</a>
                                                        </li>

                                                        <li role="presentation">
                                                            <a href="#europe" aria-controls="addinformation" role="tab" data-toggle="tab">Europe</a>
                                                        </li>

                                                    </ul>





                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="srilanka">
                                                            <div class="box-content">
                                                                <ul class="list-contact-info equal-container">
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-map.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> address</h6>
                                                                                <div class="desc-info">No.108,Station Road,
                                                                                    Nugegoda,  <br/>
                                                                                    Sri Lanka. </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-phone.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> Phone</h6>
                                                                                <div class="desc-info">(+94) 382 230 701
                                                                                    <br/>
                                                                                    (+94) 382 230 702
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-mail.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> E-mail</h6>
                                                                                <div class="desc-info"><a href="mailto:marketing@fashionstyle.com">marketing@fashionstyle.com  </a></div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-clock.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> working hours</h6>
                                                                                <div class="desc-info">
                                                                                    <p>Monday - Friday: 8am - 5pm</p>
                                                                                    <p>Saturday - Sunday: Closed</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>




                                                            </div>
                                                        </div>




                                                        <div role="tabpanel" class="tab-pane" id="europe">
                                                            <div class="box-content">

                                                                <ul class="list-contact-info equal-container">
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-map.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> address</h6>
                                                                                <div class="desc-info">
                                                                                    
                                                                                    46, Main Street, Queniborough,
                                                                                    Leicestershire Le 7 3da, United Kingdom


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-phone.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> Phone</h6>
                                                                                <div class="desc-info">44 116 2640461

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-mail.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> E-mail</h6>
                                                                                <div class="desc-info"><a href="mailto:marketing@fashionstyle.com">marketing@fashionstyle.com  </a></div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="item-contact-info">
                                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-clock.png" alt="img">
                                                            </span>
                                                                            <div class="contact-info-content">
                                                                                <h6 class="title-info"> working hours</h6>
                                                                                <div class="desc-info">
                                                                                    <p>Monday - Friday: 8am - 5pm</p>
                                                                                    <p>Saturday - Sunday: Closed</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>




                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="title-contact-info">write to us</h5>
                                            <div class="contact-form ">

                                                <form id="contact_form2" class="form-contact" action="" method="POST" novalidate>

                                                    <div class="row">
                                                         <div class="col-sm-6 col-xs-12">
                                                            <p>
	<input style="border-bottom: 1px solid #e7e7e7;" type="text" placeholder="Subject"  class="input-control first-name"  id="title" name="title">
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12">
                                                            <p>
    <input type="text" style="border-bottom: 1px solid #e7e7e7;" placeholder="* Name"  class="input-control second-name" value="" name="name" aria-required="true" required>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12">
                                                            <p>

   <input type="text" id="phone" name="phone" placeholder="* Phone " title="Please Enter Your Mobile No." aria-required="true" required>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12">
                                                            <p>
                                                                <input type="text"  id="email" name="email" placeholder="* Email" title="Email" class="required email input-control second-name" aria-required="true" required>
                                                            </p>
                                                        </div>
                                                      
                                                        <div class="col-sm-12 col-md-12">
                                                            <p>
                                                                <textarea id="comment-content" name="content" placeholder="* Message : " aria-invalid="false" class="textarea-control" rows="5" cols="40"></textarea>
                                                            </p>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12">
                                                            <div id="mail-status"></div>
                                                        </div>


                                                        <div class="col-sm-12 col-md-12">
                                                            <p>
                                                                <button type="Submit" class="button-duck" id="send-message" style="clear:both;">Send Message</button>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div id="loader-icon" style="display:none;"><img src="img/progress.gif" /></div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Contact Form Element -->
                            </div>
                            <!-- Contact Content -->
                        </div>
                    </div>
                    <!-- End Main content -->
                </div>
            </div>
        </div>
    </div>



<?php

	include 'footer4.php';

?>


