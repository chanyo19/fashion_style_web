<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fashion Style (Pvt) Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href='assets/images/favicon.png' />
    <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='assets/css/font-awesome.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/themify-icons.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/flaticon.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/owl.carousel.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/slick.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.mmenu.all.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/lightbox.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/chosen.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/animate.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.scrollbar.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.bxslider.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'/>
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700|Great+Vibes|Montserrat:400,700|Open+Sans:400,400i,600,600i,700,800i" rel="stylesheet">
    
    <style>
		.top_content {
			
			color: #666666;
			font-size: 14px;
			padding-left: 24px;
			float: left;
			font-family: "Arimo", sans-serif;
			
		}
	
	</style>
    
</head>
<body>
      
       <header class="header header-basic header-style_3 header-sticky">
        
        
<script> 
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en'
  }, 'google_translate_element');
}
</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 

        <div class="header-top">
            <div class="container">
                <div class="header-top-content">
                    <div class="header-top-left">
                    <span class="top_content"><i class="fa fa-phone" style="color: #008e55"></i> &nbsp; +94 382 230 701  &nbsp; &nbsp; &nbsp;
                    <i class="fa fa-envelope" style="color: #008e55;"></i> &nbsp; info@lankabrushexports.com &nbsp; &nbsp; &nbsp; <i class="fa fa-home" style="color: #008e55;"></i> &nbsp; 36, Industrial Zone, Modarawila, Panadura, Sri Lanka</span>
                    
                    
                    </div>
                    <div class="header-top-right">
                        <!-- Search Element -->
                        <div class="header-search header-element">
                            <span class="icon-search header-icon" data-togole="header-search"><i class="flaticon-search"></i></span>
                            <div id="header-search" class="header-element-content">
                                <h4 class="title-element">Search Now!</h4>
                                <!-- Search Form -->
                                <form role="search" method="get" action="#">
                                    <input type="text" value="" placeholder="Your search here..." class="search" id="s" name="q">
                                    <input type="submit" class="button-light" value="Search">
                                </form>
                                <!-- End Search Form -->
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 header-nav-left">
                        <!-- Left Nav Menu -->
                        <nav id="left-navigation" class="left-navigation head-nav-extra">
                            <div id="main-menu-left" class="main-nav main-menu">
                                <ul class="menu-nav">
                                    <!--<li  class="menu-item">
									<a href="index.php">Home</a>
									
								</li>-->
                                    
                                    <li class="menu-item">
									<a href="#">About Us</a>
									
								</li>
								
								 <li class="menu-item menu-item-has-children">
                                        <a href="#">PRODUCTS</a>
                                        <ul class="sub-menu">   

                                 <?php
                            include 'admin/php/connect.php';

                            $result = mysql_query("SELECT * FROM main_category WHERE status = 1");
                            while ($row = mysql_fetch_assoc($result)) {
                                $main_cat_name = $row['main_cat_name'];
								$p_id = $row['cat_id'];
                                ?>                               
                                                                
                                                                                                                
<li class="menu-item"><a href="products.php?id=<?php echo $row['cat_id'] ?>"><?php echo $main_cat_name; ?></a></li>
							 <?php
											 
							}
						   
						   ?>
                
                                        
                                    </ul>
                                    </li>
                                    
                                    
                                    
                                     <li class="menu-item">
									<a href="#">Manufacturing Plants</a>
									
								</li> 

                                  
                                </ul>
                                
                                
                            </div>
                        </nav>
                        <!-- End Left Nav Menu -->
                    </div>
                    <div class="col-sm-2 header-logo">
                        <div class="logo">
                            <a href="index.php" style="top: 0px;">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                        </div><!-- End Logo -->
                    </div>
                    <div class="col-sm-3 header-nav-right" style="text-align: center;">
                        <!-- Right Nav Menu -->
                        <nav id="right-navigation" class="right-navigation head-nav-extra">
                            <div id="main-menu-right" class="main-nav main-menu">
                                <ul class="menu-nav">
                                     
                                      <li class="menu-item">
									<a href="#">Sustainability</a>
									
								</li>
								
								<li class="menu-item">
									<a href="contact_us.php">CONTACT US</a>
									
								</li>    
								
								
									
                                  
                               
                                </ul>
                                
                               <!--  <div class="header-right">
                       
                        <div class="header-search header-element">
                            <span class="icon-search header-icon" data-togole="header-search"><i class="flaticon-search"></i></span>
                            <div id="header-search" class="header-element-content">
                                <h4 class="title-element">Search Now!</h4>
                               
                                <form role="search" method="get" action="#">
                                    <input type="text" value="" placeholder="Your search here..." class="search" id="s" name="q">
                                    <input type="submit" class="button-light" value="Search">
                                </form>
                                
                            </div>
                        </div>

                    </div>-->
                                
                            </div>
                            <!-- Header Right -->
                            <div class="header-right action-sticky">
                               
                        </nav>
                        <!-- End Right Nav Menu -->
                        <!-- Button Menu Mobile -->
                        <a href="#" class="mobile-navigation">
                            <span class="button-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </a>
                        <!-- End Button Menu Mobile -->
                    </div>
                    
                    <div class="col-sm-2 hidden-xs hidden-sm " style="padding-top: 10px;">
                      
                      <div class="header-search header-element">
                            <div id="google_translate_element"></div>
                        </div>
                      
                    </div>
                    
                    <!-- Menu On Mobile -->
                    <div class="menu-mobile-extra"></div>
                    <!-- End Menu On Mobile -->
                </div>
            </div>
        </div>
        <!-- Header Banner -->
        
        		 <div class="btn-chat hidden-xs hidden-sm" id="livechat-compact-container" style="visibility: visible; opacity: 1;">
	<div class="btn-holder">
		<a onclick="parent.LC_API.open_chat_window();return false;" href="#" class="link">Request a Quote</a>
	</div>
</div>
       