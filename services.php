<!DOCTYPE html>
<html>
     <head>
          <title>Aqua Design Innovations - Services</title>
          <link type="text/css" rel="stylesheet" href="css/global.css"/>
          <link type="text/css" rel="stylesheet" href="css/services.css"/>

          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Modal window -->
               <!-- Magnific Popup core CSS file -->
               <link rel="stylesheet" href="Magnific-Popup-master/dist/magnific-popup.css"> 

               <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 

               <!-- Magnific Popup core JS file -->
               <script src="Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
               
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
                              <li><a href="services.php" class="header-heading" id="header-current">Services</a>
                                   <ul  class="sub_menu">
                                        <li><a href="services.php#contact" id="contactBtn" class="">Contact</a></li>    
                                        <li><a href="services.php#installations" id="installationsBtn" class="">Installations</a></li>
                                        <li><a href="services.php#maintenance" id="maintenanceBtn" class="">Maintenance</a></li>
                                        <li><a href="services.php#gallery" id="galleryBtn" class="">Gallery</a></li>
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

<!-- Dot navigation -->
     <div id="dot-navigation-container">
          <ul>
               <li class="dot-navigation-icon">
                    <a id="contactBtn"  class="" href="services.php#contact">
                         <img class="navigation-dot" src="img/dots/dot-current.gif" width="25" height="25" alt="Contact Navigation Dot" title="Contact">
                    </a>
               </li>

               <li class="dot-navigation-icon">
                    <a id ="installationsBtn"  class="" href="services.php#installations">
                         <img class="navigation-dot" src="img/dots/dot.gif" width="25" height="25" alt="Installations Navigation Dot" title="Installations">
                    </a>
               </li>

               <li class="dot-navigation-icon">
                    <a id ="maintenanceBtn" class="" href="services.php#maintenance">
                         <img class="navigation-dot" src="img/dots/dot.gif" width="25" height="25" alt="Maintenance Navigation Dot" title="Maintenance">
                    </a>
               </li>

               <li class="dot-navigation-icon">
                    <a id ="galleryBtn" class="" href="services.php#gallery">
                         <img class="navigation-dot" src="img/dots/dot.gif" width="25" height="25" alt="Gallery Navigation Dot" title="Gallery">
                    </a>
               </li>
          </ul>
     </div>

<!-- Content  -->
          <div id="content-container">
               <div class="section-container" id="first-section-margin">
                    <a href="services-modal-1.php" class="services-modal-1">
                         <div class="services-video-overlay">
                              Innovative Design<br />
                              Professional Installations<br />
                              Carefree Maintenance<br /><br />
                              When dealing with ADI, you are more than <br />
                              just a customer; you become part of the revolution.
                         </div><!-- .services-video-overlay -->
                         <div class="services-play-icon">
                              &#xe817;
                         </div><!-- .services-play-icon -->
                         <div class="services-video-image">
                              <img src="img/services/happyharbour1.png" />
                         </div><!-- .services-video-image -->
                    </a>
                    <script type="text/javascript">
                         $(document).ready(function() {

                              $('.services-modal-1').magnificPopup({
                              type: 'ajax',
                              alignTop: true,
                              overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
                              });

                         });
                    </script>
               </div><!-- .section-container #first-section-margin -->

               <!-- Contact -->
                    <div class="section-container">
                         <div class="section-content">
                              <div class="section-heading">
                                   <a id="contact" class="anchor"></a>Get a Free Quote Today!
                              </div><!-- .section-heading -->
                              <br />
                              Free Consultation & Quote!<br /><br />
                              Contact us today: (858) 224 - FISH<br /><br />
                              Aqua Design Innovations focuses on innovative methods of freshwater aquarium installations to create a unique aquatic ecosystem, one that has rarely been seen before.<br /><br />
                              With years of experience involved with nature aquatic ecosystems, ADI is well equipped with the best methods, products, and sources for livestock, plants, driftwood, and stones.<br /><br />
                              Whether it’s your business or your home, our freshwater aquariums will add beauty to where ever they are installed. If you want to talk to us about getting a free consultation, we’d love to hear from you!
                         </div><!-- .section-content -->
                    </div><!-- .section-container -->

               <!-- Blurb -->
                    <div class="section-container">
                         <div class="services-blurb-overlay">
                              “I’ve never had an aquarium with so many fish that is so easy <br />
                              to maintain! Thanks ADI for such an easy install <br />
                              process! Everything was taken care of for me, <br />
                              including easy instructions for self-maintenance after the install.”<br />
                              -Erica Shen
                         </div><!-- srevices-blurb-overlay -->
                         <div class="services-blurb">
                              <img src="img/services/installations1.png" />
                         </div><!-- .services-blurb -->
                    </div><!-- .section-container -->

               <!-- Installations -->
                    <div class="section-container">
                         <div class="section-content">
                              <div class="section-heading">
                                   <a id="installations" class="anchor"></a>Installations
                              </div><!-- .section-heading -->
                              <br />
                              We have installed tanks from 10-100 gallons within a 1-3 week timeframe. For tanks larger than this, it might take much longer to gather all the equipment and materials. We do our best to deliver a quality product in a timely manner.<br /><br />
                              Contact us for a free consultation where we can lay out the entire installation process for you!
                         </div><!-- .section-content -->
                    </div><!-- .section-container -->

               <!-- Maintenance -->
                    <div class="section-container">
                         <div class="section-content">
                              <div class="section-heading">
                                   <a id="maintenance" class="anchor"></a>Maintenance
                              </div><!-- .section-heading -->
                              <br />
                              Our services include hassle-free and carefree maintenance.<br />
                              Planted tanks are actually a lot easier to maintain than you would think.<br />
                              We do our best to establish a self sustaining ecosystem that requires little to no maintenance!
                         </div><!-- .section-content -->
                    </div><!-- .section-container -->

               <!-- Gallery -->
                    <div class="section-container" id="last-section-margin">
                         <div class="section-content">
                              <div class="section-heading">
                                   <a id="gallery" class="anchor"></a>Gallery of Our Previous Installations
                              </div><!-- .section-heading -->
                              <br />
                              <!-- Camera Slider -->
                                  <link rel='stylesheet' id='camera-css'  href='camera/css/camera.css' type='text/css' media='all'>     
                                  <!-- <script type='text/javascript' src='camera/scripts/jquery.min.js'></script> -->
                                  <script type='text/javascript' src='camera/scripts/jquery.mobile.customized.min.js'></script>
                                  <script type='text/javascript' src='camera/scripts/jquery.easing.1.3.js'></script> 
                                  <script type='text/javascript' src='camera/scripts/camera.min.js'></script>  
                                  
                                  <script>
                                  jQuery(function(){
                                    
                                    jQuery('#camera_wrap_1').camera({
                                      height: '350px',
                                      loader: 'bar',
                                      pagination: true,
                                      thumbnails: true,
                                      fx:'scrollLeft',
                                      transPeriod:0
                                    });

                                  });
                                </script>
                                <!-- Camera Slider -->
                                       <div id="sliderbg">
                                           <div class="fluid_container">
                                                 <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                                                     <div data-thumb="img/services/installations2-th.jpg" data-src="img/services/installations2.jpg">
                                                     </div>
                                                     <div data-thumb="img/services/installations3-th.jpg" data-src="img/services/installations3.jpg">
                                                     </div>
                                                     <div data-thumb="img/services/installations4-th.jpg" data-src="img/services/installations4.jpg">
                                                     </div>
                                                 </div>
                                           </div>
                                       </div>
                         </div><!-- .section-content -->
                    </div><!-- .section-container #last-section-margin -->

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

     </body>

<!-- Scroll js file -->
     <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
     <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
     <script type="text/javascript" src="js/scrolld.js"></script>
     <script type="text/javascript">
          $("[id*='Btn']").stop(true).on('click',function(e){e.preventDefault();$(this).scrolld();});
     </script>

</html>