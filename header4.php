<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fashion Style (Pvt) Ltd | Leading Cloth Manufacturing Chain </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--<link rel="shortcut icon" href='assets/images/favicon.png' />-->
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
    <link rel='stylesheet' type='text/css' href='assets/css/style2.css'/>
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700|Great+Vibes|Montserrat:400,700|Open+Sans:400,400i,600,600i,700,800i" rel="stylesheet">
    
    <style>
		.top_content {
			
			color: #666666;
			font-size: 14px;
			padding-left: 24px;
			float: left;
			font-family: "Arimo", sans-serif;
			
		}
		
		.logo{
			
			
			background: #FFFFFF;
  width: 150px;

		}

			  
			  
#google_translate_element {
 /* position: absolute;*/
  /*bottom: calc(53px + 16px);*/
	/*margin-top: -15px;
	float: right;*/
  /*right: 16px!important;*/
 /*z-index: 99999;*/
}
.goog-te-gadget {
  font-family: Roboto, 'Open Sans', sans-serif!important;
  text-transform: uppercase;
}
.goog-te-gadget-simple  {
  background-color: rgba(0,0,0,1)!important;
  border: 1px solid rgba(255,255,255,1) !important;
  padding: 8px!important;
  border-radius: 4px!important;
  font-size: 1rem!important;
  line-height:2rem!important;
  display: inline-block;
  cursor: pointer;
  zoom: 1;
}
.goog-te-menu2 {
  max-width: 100%;
}
.goog-te-menu-value {
  color: #fff !important;
    &:before {
    font-family: 'Material Icons';
    content: "\E927";
    margin-right: 16px;
    font-size: 2rem;
    vertical-align: -10px;
    width:32px!important;
  } 
}
.goog-te-menu-value span:nth-child(5) {
  display:none;
}
.goog-te-menu-value span:nth-child(3) {
  border:none!important;
  font-family: 'Material Icons';
  &:after {
    font-family: 'Material Icons';
    content: "\E5C5";
    font-size: 1.5rem;
    vertical-align: -6px;
  }  
}

.goog-te-gadget-icon {
    background-image: url(img/google_translater.png)!important;
    background-position: 0px 0px;
    height: 32px!important;
    width: 32px!important;
    margin-right: 8px!important;

    display: none;
}

// ============ HIDE TOP BAR ============ 
.goog-te-banner-frame.skiptranslate {display: none!important;} 
body {top: 0px!important;}

/* ================================== *\
    Mediaqueries
\* ================================== */
@media (max-width: 667px) {
	#google_translate_element {
		bottom: calc(100% - 50% - 53px);
		left: 16px!important;
		width: 100%!important;
		goog-te-gadget {
			width:100%!important;
		}
		.skiptranslate {
			width:100%!important;			
		}
		.goog-te-gadget-simple {
			width: calc(100% - 32px)!important;
			text-align: center;
		}	
	}
}

			  
			  </style>
			  			  	  
<script type="text/javascript">
	
	// WORK IN PROGRESS BELOW
      	
$('document').ready(function () {


		// RESTYLE THE DROPDOWN MENU
    $('#google_translate_element').on("click", function () {

        // Change font family and color
        $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
            .css({
                'color': '#544F4B',
                'font-family': 'Roboto',
								'width':'100%'
            });
        // Change menu's padding
        $("iframe").contents().find('.goog-te-menu2-item-selected').css ('display', 'none');
			
				// Change menu's padding
        $("iframe").contents().find('.goog-te-menu2').css ('padding', '0px');
      
        // Change the padding of the languages
        $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');
      
        // Change the width of the languages
        $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
        $("iframe").contents().find('td').css('width', '100%');
      
        // Change hover effects
        $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
            $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
        }, function () {
            $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
        });

        // Change Google's default blue border
        $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

        // Change the iframe's box shadow
        $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
        
      
      
        // Change the iframe's size and position?
        $(".goog-te-menu-frame").css({
            'height': '100%',
            'width': '100%',
            'top': '0px'
        });
        // Change iframes's size
        $("iframe").contents().find('.goog-te-menu2').css({
            'height': '100%',
            'width': '100%'
        });
    });
});

	
</script>
    
</head>
<body>
      
       <header class="header header-basic header-style_3 header-sticky">
        

        
        
        <div class="main-header" style="background-color: #0a0a0a;">
            <div class="container">
                <div class="row">
                     <div class="col-sm-2 header-nav-left">
                        <div class="logo hidden-xs" id="logo2" style="position: absolute; text-align: center;">
                            <a href="index.php" >
                                <img src="assets/images/logo1.png"  alt="logo" style="margin-top: 5px;">
                            </a>
                        </div><!-- End Logo -->
                          <div class="logo hidden-md hidden-lg">
                            <a href="index.php">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                        </div><!-- End Logo -->
                    </div>
                    
                    <div class="col-sm-10 header-nav-right" style="text-align: center;">
                        <!-- Right Nav Menu -->
                        <nav id="right-navigation" class="right-navigation head-nav-extra">
                            <div id="main-menu-right" class="main-nav main-menu">
                                <ul class="menu-nav">
                                    
                                    <li class="menu-item hidden-xs hidden-sm">
                                    	
                                    	  	<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div id="google_translate_element"></div><script type="text/javascript"></script>
                                    	
                                    </li>
                                      
                                    <li class="menu-item">
									<a href="about_us.php"  style="color: #FFFFFF;">About Us</a>
									
								</li>
								
								 <li class="menu-item menu-item-has-children">
                                        <a href="#"  style="color: #FFFFFF;">PRODUCTS</a>
                                        <ul class="sub-menu">

                                 <?php
                            include 'admin/php/connect.php';
							$sql="SELECT * FROM main_category WHERE status = 1";
                            $result=mysqli_query($conn,$sql);
                            while ($row = mysqli_fetch_assoc($result)) {
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
									<a href="our_services.php"  style="color: #FFFFFF;">Our Services</a>
									
								</li>
                                     
                                      <li class="menu-item">
									<a href="sustainability.php"  style="color: #FFFFFF;">Sustainability</a>
									
								</li>

								<li class="menu-item">
									<a href="contact_us.php"  style="color: #FFFFFF;">CONTACT US</a>
									
								</li>    
								
								 <!--  
								
									<li class="menu-item">
									
										<div class="col-sm-1 hidden-xs hidden-sm" style="margin-top: -10px;">
                      
                  
                  	
               	<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div id="google_translate_element"></div><script type="text/javascript"></script>
                  	

                      
                    </div>
									
								</li> 
                                  -->
                               
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
                    
                    
                    
                    <!-- Menu On Mobile -->
                    <div class="menu-mobile-extra"></div>
                    <!-- End Menu On Mobile -->
                </div>
            </div>
        </div>
        <!-- Header Banner -->
        
<!--        		 <div class="btn-chat hidden-xs hidden-sm" id="livechat-compact-container" style="visibility: visible; opacity: 1;">-->
<!--	<div class="btn-holder">-->
<!--		<a href="#" data-toggle="modal" data-target="#myModal" class="link">Request a Quote</a>-->
<!--	</div>-->
<!--</div>-->
       