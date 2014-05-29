<!DOCTYPE html>
<html>
     <head>
          <title>Aqua Design Innovations</title>
          <link type="text/css" rel="stylesheet" href="css/global.css"/>
          <link type="text/css" rel="stylesheet" href="css/index.css"/>
		
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">


		<!--jquery library-->
		   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		   <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<!--nerve slider-->
			<script src="http://code.ryanbruzan.net/nerveSlider/jquery.nerveSlider.min.js"></script>
			<link rel="stylesheet" href="http://code.ryanbruzan.net/nerveSlider/nerveSlider.min.css" />
	    <!--activate the nerve slider-->
               <script type="text/javascript">
               $(document).ready(function(){
               	$(".slider").nerveSlider({
               		sliderWidth: "100%",
               		sliderHeight: "450px",
               		sliderResizable: true,
               		slidTransitionDelay: 7000
               		// More options below
               		});
               });
               </script>
</head>
<body>

<!-- Header -->
          <div id="header-container">
               <header>
                    <div id="header-logo">
                         <a href="index.php"><img src="img/logos/header-logo.png" /></a>
                    </div><!-- #header-logo -->

                    <div id="header-navigation">
                         <ul>
                              <li><a href="ecoqube.php" class="header-heading">EcoQube</a>
                                   <ul class="sub_menu">
                                        <li><a href="ecoqube.php#howitworks">How It Works</a></li>
                                        <li><a href="ecoqube.php#keyfeatures">Key Features</a></li>
                                        <li><a href="ecoqube.php#buyittoday">Buy It Today</a></li>
                                        <li><a href="ecoqube.php#fishandplants">Fish & Plants</a></li>
                                        <li><a href="ecoqube.php#press">Press Releases</a></li>
                                   </ul>
                              </li>
                              <li><a href="shop/index.php" class="header-heading">Shop</a> 
                                   <ul class="sub_menu">
                                        <li><a href="shop/ecoqube.php">EcoQube</a></li>
                                        <li><a href="shop/livestock.php">Livestock</a></li>
                                        <li><a href="shop/plants.php">Plants</a></li>
                                        <li><a href="shop/accessories.php">Accessories</a></li>
                                     </ul>                           
                              </li>
                              <li><a href="services.php" class="header-heading">Services</a>
                                   <ul  class="sub_menu">
                                        <li><a href="services.php#contact">Contact</a></li>    
                                        <li><a href="services.php#installations">Installations</a></li>
                                        <li><a href="services.php#maintenance">Maintenance</a></li>
                                        <li><a href="services.php#gallery">Gallery</a></li>
                                   </ul>
                              </li>
                              <li><a href="about.php" class="header-heading">About</a>
                                   <ul  class="sub_menu">
                                        <li><a href="about.php#ourstory">Our Story</a></li>
                                        <li><a href="about.php#values">Values</a></li>
                                        <li><a href="about.php#theteam">The Team</a></li>
                                        <li><a href="about.php#affiliates">Affiliates</a></li>
                                   </ul>
                              </li>
                              <li><a href="learn/index.php" class="header-heading">Learn</a>
                                   <ul  class="sub_menu">
                                        <li><a href="learn/blog.php">Blog</a></li>
                                        <li><a href="learn/ecosystems.php">Ecosystems</a></li>
                                   </ul>
                              </li>
                              <li><a href="faq.php" class="header-heading">FAQ</a>
                                   <ul class="sub_menu">
                                        <li><a href="faq.php#ecoqube">EcoQube</a></li>
                                        <li><a href="faq.php#shop">Shop</a></li>
                                        <li><a href="faq.php#services">Services</a></li>
                                        <li><a href="faq.php#shipping">Shipping</a></li>
                                        <li><a href="faq.php#warranty">Warranty</a></li>
                                   </ul>
                              </li>
                              <li><a href="index.php" id="header-icon-cart">&#xe811;</a>
                              </li>
                         </ul>
                    </div><!-- #header-navigation -->
               </header>
          </div><!-- #header-container -->


     <!-- Content  -->
        <div id="content-container">
        <div class="section-container" id="first-section-margin">
				<div class="slider upper-margin lower-margin">
				      <div class="picture1">
     				      <img src="img/ecoqube6.png" />
     					 <a href="ecoqube.php">
                                    <div class ="ns_slideContent">
          						<div class="index-slider-overlay">
                                        <img src="img/logos/ecoqube-logo.png" /><br />
          	          				<div class="words">
                                                  The most beautiful way to grow herbs, house <br />
                                                  plants, or flowers indoor while using the same <br />
                                                  plants to clean aquarium water <br />
                                                  with ease.
          							</div> <!--words-->
                                        </div><!-- .index-slider-overlay -->
          					 </div>
                               </a>
				      </div><!--end of .picture1 there is no css code for this-->

				</div> <!--end of .slider using nerveslider-->
               </div><!-- .section-container #first-section-margin -->
          </div><!-- #content-container -->

<!-- Footer  -->
          <div id="footer-container">
               <div id="footer-topbar">
                    <form name="input" id="footer-subscribe-form">
                         Sign up for weekly deals!
                         <input type="text" placeholder="Example@Email.com" />
                         <input type="submit" value="Subscribe"/>
                    </form><!-- #footer-subscribe-form [this id tag is not yet in stylesheet.css]-->
               </div><!-- #footer-topbar -->

               <footer>
                    <div id="footer-left-col">
                         <div id="footer-logo">
                              <a href="index.php"><img src="img/logos/footer-logo.png" /></a>
                         </div><!-- #footer-logo -->
                    </div><!-- #footer-left-col -->

                    <div id="footer-right-col">
                         <div id="footer-contact">
                              <div id="footer-phone-email">
                                   <ul>
                                        <li>
                                             <a href="mailto:info@aquadesignainnovations.com"><span id="footer-icon-email">&#xe801;</span> info@aquadesignainnovations.com</a>
                                        </li>
                                        <li>
                                             <a href="tel:8582243474"><span id="footer-icon-phone">&#xe800;</span>(888) 224-FISH</a>
                                        </li>
                                   </ul>
                              </div>
                              <div id="footer-social-media">
                                   <ul>
                                        <li>
                                             <a href="https://www.facebook.com/AQUADESIGNINNOVATIONS"><span id="footer-icon-fb">&#xe81b;</span></a>
                                        </li>
                                        <li>
                                             <a href="https://twitter.com/DesignADI"><span id="footer-icon-tw">&#xe81a;</span></a>
                                        </li>
                                   </ul>
                              </div>
                         </div><!-- #footer-contact -->

                         <div id="footer-sitemap-container">
                              <div class="footer-heading-1">
                              </div><!-- .footer-heading-1 -->

                              <div id="footer-sitemap">
                                   <ul>
                                        <li><span class="footer-heading-2"><a href="ecoqube.php">EcoQube</a></span></li>
                                        <li><a href="ecoqube.php#howitworks">How It Works</a></li>
                                        <li><a href="ecoqube.php#keyfeatures">Key Features</a></li>
                                        <li><a href="ecoqube.php#buyittoday">Buy It Today</a></li>
                                        <li><a href="ecoqube.php#fishandplants">Fish & Plants</a></li>
                                        <li><a href="ecoqube.php#press">Press Releases</a></li>
                                   </ul>
                                   <ul>
                                        <li><span class="footer-heading-2"><a href="shop/index.php">Shop</a></span></li>
                                        <li><a href="shop/ecoqube.php">EcoQube</a></li>
                                        <li><a href="shop/livestock.php">Livestock</a></li>
                                        <li><a href="shop/plants.php">Plants</a></li>
                                        <li><a href="shop/accessories.php">Accessories</a></li>
                                   </ul>
                                   <ul>
                                        <li><span class="footer-heading-2"><a href="services.php">Services</a></span></li>
                                        <li><a href="services.php#contact">Contact</a></li>    
                                        <li><a href="services.php#installations">Installations</a></li>
                                        <li><a href="services.php#maintenance">Maintenance</a></li>
                                        <li><a href="services.php#gallery">Gallery</a></li>
                                   </ul>
                                   <ul>
                                        <li><span class="footer-heading-2"><a href="about.php">About</a></span></li>
                                        <li><a href="about.php#ourstory">Our Story</a></li>
                                        <li><a href="about.php/#values">Values</a></li>
                                        <li><a href="about.php/#theteam">The Team</a></li>
                                        <li><a href="about.php/#affiliates">Affiliates</a></li>
                                   </ul>
                                   <ul>
                                        <li><span class="footer-heading-2"><a href="learn/index.php">Learn</a></span></li>
                                        <li><a href="learn/blog.php">Blog</a></li>
                                        <li><a href="learn/ecosystems.php">Ecosystems</a></li>
                                   </ul>
                                   <ul>
                                        <li><span class="footer-heading-2"><a href="faq.php">FAQ</a></span></li>
                                        <li><a href="faq.php#ecoqube">EcoQube</a></li>
                                        <li><a href="faq.php#shop">Shop</a></li>
                                        <li><a href="faq.php#services">Services</a></li>
                                        <li><a href="faq.php#shipping">Shipping</a></li>
                                        <li><a href="faq.php#warranty">Warranty</a></li>
                                   </ul>
                              </div><!-- #footer-sitemap -->
                         </div><!-- #footer-sitemap-container -->
                    </div><!-- #footer-right-col -->

                    <div id="footer-copyright">
                         <p>Aqua Design Innovations 2014 - All Rights Reserved</p>
                    </div><!-- #footer-copyright -->

                    </footer>
          </div><!-- #footer-container -->

<<<<<<< HEAD
     </body>
</html>
=======
</body>
</html>
>>>>>>> 7e1fc0165312144dc8735974b0f9517951795702
