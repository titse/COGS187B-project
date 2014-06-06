<!DOCTYPE html>
<html>
<head>
     <title>About</title>
     <link type="text/css" rel="stylesheet" href="css/global.css"/>
     <link type="text/css" rel="stylesheet" href="css/about.css"/>
     <link type="image/png" rel="shortcut icon" href="img/logos/favicon.ico" />

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Custom Javascript functions used across pages -->
          <script type="text/javascript" src="js/global.js"></script>

     <!-- Modal window -->
          <!-- Magnific Popup core CSS file --> <link rel="stylesheet" href="Magnific-Popup-master/dist/magnific-popup.css">
          <!-- jQuery 1.7.2+ or Zepto.js 1.0+ --> <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <!-- Magnific Popup core JS file --> <script src="Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

     <!-- JQuery visible library to detect which sections of the page is visible on the users screen and sdjust the blue dot-->
          <script type="text/javascript" src="js/jquery.visible.js"></script>

     <!-- FlexSlider2 -->
          <link rel="stylesheet" href="flexslider2/flexslider-about.css" type="text/css">
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> -->
          <script src="flexslider2/jquery.flexslider.js"></script>

     <!-- Allows for a fixed header to have horizontal scroll -->
          <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
          <script type="text/javascript" src="ScrollToFixed-master/jquery-scrolltofixed.js"></script>
</head>
<body>
     <!-- Header --> <div id="header-container">
          <header>
               <div id="header-logo">
                    <a href="index.php"><img src="img/logos/header-logo.png" /></a>
               </div><!-- #header-logo -->

               <div id="header-navigation">
                    <ul>
                         <li><a href="ecoqube.php" class="header-heading">EcoQube <img src="img/ecoqube/eq-leaf.png" id="eq-leaf" width="12"></a>
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
                         <li><a href="about.php" class="header-heading" id="header-current">About</a>
                              <ul  class="sub_menu">
                                   <li><a href="about.php#ourstory" id="ourstoryBtn" class="">Our Story</a></li>
                                   <li><a href="about.php#values" id="valuesBtn" class="">Values</a></li>
                                   <li><a href="about.php#theteam" id="theteamBtn" class="">The Team</a></li>
                                   <li><a href="about.php#affiliates" id="affiliatesBtn" class="">Affiliates</a></li>
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
                              <div id="cart-item-notification">
                                <p id="item-count"> 7 </p>
                              </div>

                              <div id="shoppingcart-dropdown">
                                   <div id="shoppingcart-header">
                                        <p>SHOPPING CART</p>
                                   </div>
                                   <div id="shoppingcart-product-field">
                                        <div class="shoppingcart-product">
                                             <img src="img/shop/ecoqube-white.png"  alt="Product image">
                                             <div class="delete-prod">
                                                  x
                                             </div>
                                             <p class="prod-name">EcoQube UV</p>
                                             <div class="qty-adjust">
                                                  <p>&#xe864;</p>
                                                  <p>&#xe862;</p>
                                             </div>
                                             <p class="total-values">
                                                  1  <br>
                                                  $ 98.00
                                             </p>
                                             <p class="total">Qty: <br> Price:</p>
                                        </div>
                                        <div class="shoppingcart-product">
                                             <img src="img/shop/clouded-minnow.jpg" class="horizontal" alt="Product image">
                                             <div class="delete-prod">
                                                  x
                                             </div>
                                             <p class="prod-name">Clouded minnow</p>
                                             <div class="qty-adjust">
                                                  <p>&#xe864;</p>
                                                  <p>&#xe862;</p>
                                             </div>
                                             <p class="total-values">
                                                  2  <br>
                                                  $ 2.98
                                             </p>
                                             <p class="total">Qty: <br> Price:</p>
                                        </div>
                                        <div class="shoppingcart-product">
                                             <img src="img/shop/basil.jpg" class="horizontal" alt="Product image">
                                             <div class="delete-prod">
                                                  x
                                             </div>
                                             <p class="prod-name">Basil</p>
                                             <div class="qty-adjust">
                                                  <p>&#xe864;</p>
                                                  <p>&#xe862;</p>
                                             </div>
                                             <p class="total-values">
                                                  1  <br>
                                                  $ 6.99
                                             </p>
                                             <p class="total">Qty: <br> Price:</p>
                                        </div>
                                        <div class="shoppingcart-product">
                                             <img src="img/shop/guppy.jpg" class="horizontal" alt="Product image">
                                             <div class="delete-prod">
                                                  x
                                             </div>
                                             <p class="prod-name">Guppy</p>
                                             <div class="qty-adjust">
                                                  <p>&#xe864;</p>
                                                  <p>&#xe862;</p>
                                             </div>
                                             <p class="total-values">
                                                  3  <br>
                                                  $ 9.57
                                             </p>
                                             <p class="total">Qty: <br> Price:</p>
                                        </div>
                                   </div>
                                   <div id="shoppingcart-footer">
                                        <div id="shoppingcart-summary">
                                             <div id="totals">
                                                  <p>
                                                       Total qty: <br>
                                                       Total price:
                                                  </p>
                                             </div>
                                             <div id="total-values">
                                                  <p>
                                                       7 <br>
                                                       $ 117.54
                                                  </p>
                                             </div>
                                             <div id="checkout">
                                                  <input id="checkout-btn" type="submit" value="Checkout"/>
                                             </div>
                                        </div>
                                        <div id="shoppingcart-notification">
                                             <p>30% OFF FISH STORE PRICES ON QUANTITIES OF 12 OR MORE</p>
                                        </div>
                                   </div>
                              </div>
                         </li>
                    </ul>
               </div><!-- #header-navigation -->
          </header>
     </div><!-- #header-container -->

     <!-- Dot navigation --> <div id="dot-navigation-container">
          <ul>
               <li class="dot-navigation-icon">
                    <a id="topBtn" class="dot-hover" href="ecoqube.php#top" data-title="Top">
                         <img class="navigation-dot" id="img-section-0-dot" src="img/dots/dot-current.png" width="25" height="25" alt="Top Navigation Dot"/>
                         <img class="navigation-dot hover" id="img-section-0-dot" src="img/dots/dot-hover.png" width="25" height="25" alt="Top Navigation Dot"/>
                    </a>
               </li>
               <li class="dot-navigation-icon">
                    <a id="ourstoryBtn" class="dot-hover" href="about.php#ourstory" data-title="Our Story">
                         <img class="navigation-dot" id="img-section-1-dot" src="img/dots/dot.png" width="25" height="25" alt="Our Story Navigation Dot" />
                         <img class="navigation-dot hover" id="img-section-1-dot" src="img/dots/dot-hover.png" width="25" height="25" alt="Our Story Navigation Dot" />
                    </a>
               </li>
               <li class="dot-navigation-icon">
                    <a id="valuesBtn" class="dot-hover" href="about.php#values" data-title="Vision and values">
                         <img class="navigation-dot" id="img-section-2-dot" src="img/dots/dot.png" width="25" height="25" alt="Values Navigation Dot"  />
                         <img class="navigation-dot hover" id="img-section-2-dot" src="img/dots/dot-hover.png" width="25" height="25" alt="Values Navigation Dot"  />
                    </a>
               </li>
               <li class="dot-navigation-icon">
                    <a id="theteamBtn" class="dot-hover" href="about.php#theteam" data-title="The Team">
                         <img class="navigation-dot" id="img-section-3-dot" src="img/dots/dot.png" width="25" height="25" alt="The Team Navigation Dot" />
                         <img class="navigation-dot hover" id="img-section-3-dot" src="img/dots/dot-hover.png" width="25" height="25" alt="The Team Navigation Dot" />
                    </a>
               </li>
               <li class="dot-navigation-icon">
                    <a id="affiliatesBtn" class="dot-hover" href="about.php#affiliates" data-title="Affiliates and sposorships">
                         <img class="navigation-dot" id="img-section-4-dot" src="img/dots/dot.png" width="25" height="25" alt="Affiliates Navigation Dot"/>
                         <img class="navigation-dot hover" id="img-section-4-dot" src="img/dots/dot-hover.png" width="25" height="25" alt="Affiliates Navigation Dot"/>
                    </a>
               </li>
          </ul>
     </div><!-- #dot-navigation-container -->

     <!-- Content  --> <div id="content-container">
          <div id="top" class="section-container section-0">
               <div class="about-founders-image">
                    <img src="img/about/team-1.jpg" />
               </div><!-- .about-founders-image -->
          </div><!-- .section-container -->

          <!-- Our Story --> <div class="section-container">
               <div class="section-content">
                    <div class="section-heading section-1">
                         <a id="ourstory" class="anchor"></a>Our Story
                    </div><!-- .section-heading -->
                    <div class="about-ourstory">
                         <div class="about-timeline">
                              <ul class="about-outer-list">
                                   <li class="left timeline-year-first">
                                        <span class="about-timeline-heading">The Beginning</span>
                                   </li>
                                   <li class="left about-timeline-logos">
                                        We started out working as operations managers, biology assistants, sales representatives, and installing aquariums at various locations.
                                        <br /><br /><br />
                                        <img src="img/about/californiaacademyofsciences.png" />
                                        <img src="img/about/aquaforestaquarium.png" />
                                        <img src="img/about/aquaticcentral.png" />
                                   </li>
                                   <li class="right pad">
                                        With knowledge and experience, we established ADI with the fundamental goals to build a business around a solution for the aquarium industry and to raise environmental awareness.
                                   </li>
                                   <li class="left about-timeline-images">
                                        Eventually, we decided to start our own online aquarium store while selling shrimp out of a garage in San Francisco
                                        <br /><br /><br />
                                        <img src="img/about/ourstory-1.jpg" />
                                   </li>
                                   <li class="right timeline-year-second pad">
                                        <span class="about-timeline-heading">The Evolution</span>
                                   </li>
                                   <li class="right about-timeline-images">
                                        We brought our love of aquariums with us to college.
                                        <br /><br /><br />
                                        <img src="img/about/ourstory-8.jpg" class="about-ourstory-timeline-images" />
                                   </li>
                                   <li class="left pad">
                                        We continued pursuing our passion for connecting people with nature through aquatic ecosystem installations.
                                   </li>
                                   <li class="right timeline-year-third">
                                        <span class="about-timeline-heading">The Company Today</span>
                                   </li>
                                   <li class="right pad">
                                        But now, we'd like to expand our reach to you through the EcoQube, a miniature aquatic ecosystem that we created to deliver the practical solution and beauty of aquaponics to households and offices around the world!
                                   </li>
                                   <li class="left about-timeline-images pad">
                                        <a href="https://www.kickstarter.com/projects/kevinzl/ecoqube-desktop-ecosystem-that-grow-flowers-and-he"><img src="img/about/kickstarter.png" target="_blank"/></a>
                                   </li>
                                   <li class="highlight about-timeline-highlight">
                                        <a href="ecoqube.php"><img src="img/ecoqube2.jpg" /></a>
                                   </li>
                                   <li class="left">
                                        We know that we can’t solve the many problems in our world with a fish tank, no matter how beautiful it is, but we hope to connect people to our environment and influence the way they perceive the larger issues in our world today.
                                   </li>
                              </ul><!-- .about-outer-list -->
                         </div><!-- .about-timeline -->
                    </div><!-- .about-ourstory -->
               </div><!-- .section-content -->
          </div><!-- .section-container -->

      <!-- Vision and Values -->
      <div class="section-container">
        <div class="section-content">
          <div class="section-heading section-2">
            <a id="values" class="anchor"></a>Vision and Values
          </div><!-- .section-heading -->
          <br /><br />
          <div class="about-vision">
            <div class="about-vision-blurb"><span class="about-vision-heading">Our Vision</span><br />To be much more than just an online vendor for aquarium goods and an installation company.</div>
            <div class="about-vision-blurb"><span class="about-vision-heading">Less Environmental Impact</span><br />Less fish are lost and less fossil fuel is burned.</div>
            <div class="about-vision-blurb"><span class="about-vision-heading">Competitive Pricing</span><br />Savings are then passed onto you and higher profit margins allows for.</div>
            <br />
            <div class="about-vision-blurb"><span class="about-vision-heading">Domestic Jobs</span><br />Happy local employees will then provide you with unmatchable.</div>
            <div class="about-vision-blurb"><span class="about-vision-heading">Quality and Service</span><br />Something all of our customers deserve!</div>
            <div class="about-vision-blurb"><span class="about-vision-heading">Less Transport</span><br />Less time and resources spent on transporting livestock directly leads to unsurpassed quality.</div>
            <div class="about-vision-quote">When dealing with ADI, you are more than just a customer; you become part of the revolution.</div>
          </div><!-- .about-vision -->
        </div><!-- .section-content -->
      </div><!-- .section-container -->

      <!-- The Team -->
      <div class="section-container section-3">
        <div class="section-content">
          <div class="section-heading">
            <a id="theteam" class="anchor"></a>The Team
          </div><!-- .section-heading -->
          <div class="about-team">
          <br />
          <img src="img/about/team-2.jpg" class="about-team-members" />
          <br />
          <br />
          We are Kevin and Eric- UC San Diego students and aquarium geeks who met in high school and instantly became intrigued by planted aquatic ecosystems. As we got older, we realized the bigger challenges humanity as a whole faces in terms of food and water shortages, so we decided to use our knowledge of aquariums to deliver the concept of aquaponics to as many people as possible.
          </div>
        </div><!-- section-content -->
      </div><!-- .section-container -->

      <!-- Affiliates -->
      <div class="section-container">
        <div class="section-content">
          <div class="section-heading section-4">
            <a id="affiliates" class="anchor"></a>Affiliates and Sponsorships
          </div><!-- .section-heading -->
          <br />
          <div id="secondary-slider" class="flexslider">
            <ul class="slides">
              <li>
                <div class="about-inside">
                    <!-- <div class="about-inside-one">
                         &#XE865;
                    </div> -->
                    <div class="about-inside-two">
                  <span class="about-affiliates-names">Chris E. Yin</span>
                  <br />
                  <span class="about-flexslider2-text">Chief Operating Officer at Bespoke Partners and founder of Pathways Ventures, an on-campus incubator at University of California, San Diego.</span>
                </div></div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">Marshall Kauf</span>
                  <br /></span>
                  <span class="about-flexslider2-text">Senior Associate at Bespoke Partners as well as member of the Entrepreneur’s Organization in Los Angeles.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">Chris Sims</span>
                  <br />
                  <span class="about-flexslider2-text">Owner of <a href="http://www.aquaticcentral.com">Aquatic Central</a>, one of the largest aquarium stores in Northern California.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">San Francisco Bay Area Aquatic Plant Society</span>
                  <br />
                  <span class="about-flexslider2-text">A bay area aquarium community with over 1000 members. The most informative forum for freshwater aquariums in Northern California. <a href="http://www.sfbaaps.org">SFBAAPS</a></span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">Curtis Chinn</span>
                  <br />
                  <span class="about-flexslider2-text">Biology teacher at Galileo Academy of Sciences and Technology. Graduated with degree in biological sciences at UC Davis. Curtis was in charge of Galileo’s Aqua Culture Club and sought to introduce and teach students about aquatic ecosystems and the science behind them.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">Patrick Carter</span>
                  <br />
                  <span class="about-flexslider2-text">Biologist at the California Academy of Sciences in San Francisco and former employee at Aqua Forest Aquarium. He’s also the founder of <a href="http://http://www.urban-aquatics.com/">Urban Aquatics</a>- an installation, maintenance, and consultation company for aquatic related hobbies</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">Nick Xyong</span>
                  <br />
                  <span class="about-flexslider2-text">Active aquarium hobbyist with years of experience in aquatic plants and livestock. Founder of <a href="http://www.speedieaquatics.com">Speedie Aquatics</a>- currently one of the largest online retailers of plants and invertebrates.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">David Kim</span>
                  <br />
                  <span class="about-flexslider2-text">BS in Biochem-Cellular Biology, BA in Art at UC San Diego. David aspires to use biological sciences to create sustainable ecosystems while presenting it as an art. At the UC San Diego, David installed <a href="http://vimeo.com/38627965">a unique aquatic ecosystem</a> for their Sixth College administrative offices.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names"><a href="https://www.abasd.org/home.php">Asian Business Association of San Diego</a></span>
                  <br />
                  <span class="about-flexslider2-text">A non-profit 501(c)(6) organization that provides a strong voice on business, cultural and political issues of interest to San Diego’s Asian and Pacific Islander community.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names"><a href="http://galileoweb.org/chinnc/old-pages/aquarium-club/">Galileo Academy Aquarium Club</a></span>
                  <br />
                  <span class="about-flexslider2-text">A student initiated community, sponsored by the Futurama After School program.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names"><a href="http://scapeclub.org/">SCAPE - Southern California Aquatic Plant Enthusiasts</a></span>
                  <br />
                  <span class="about-flexslider2-text">A local, non profit group formed of the most dedicated Aquatic Plant Enthusiasts in Southern California.</span>
                </div>
              </li>
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names"><a href="http://www.plantedtank.net/">The Planted Tank</a></span>
                  <br />
                  <span class="about-flexslider2-text">A community dedicated to aquarium afficianados.</span>
                </div>
              </li>
            </ul>
          </div>
        </div><!-- section-content -->
      </div><!-- .section-container .last-section-margin -->
    </div><!-- #content-container -->

    <!-- Footer -->
    <div id="footer-container">
      <div id="footer-topbar">
        <form name="input" id="footer-subscribe-form">
          <input class="footer-input" type="email" placeholder="Sign up for weekly deals!" required />
          <input id="footer-submit" type="submit" value="Subscribe"/>
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
            <div id="footer-sitemap">
              <ul>
                <li><a href="ecoqube.php">EcoQube</a></li>
                <li><a href="ecoqube.php#howitworks">How It Works</a></li>
                <li><a href="ecoqube.php#keyfeatures">Key Features</a></li>
                <li><a href="ecoqube.php#buyittoday">Buy It Today</a></li>
                <li><a href="ecoqube.php#fishandplants">Fish & Plants</a></li>
                <li><a href="ecoqube.php#press">Press Releases</a></li>
              </ul>
              <ul>
                <li><a href="shop/index.php">Shop</a></li>
                <li><a href="shop/ecoqube.php">EcoQube</a></li>
                <li><a href="shop/livestock.php">Livestock</a></li>
                <li><a href="shop/plants.php">Plants</a></li>
                <li><a href="shop/accessories.php">Accessories</a></li>
              </ul>
              <ul>
                <li><a href="services.php">Services</a></li>
                <li><a href="services.php#contact">Contact</a></li>
                <li><a href="services.php#installations">Installations</a></li>
                <li><a href="services.php#maintenance">Maintenance</a></li>
                <li><a href="services.php#gallery">Gallery</a></li>
              </ul>
              <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="about.php#ourstory">Our Story</a></li>
                <li><a href="about.php/#values">Values</a></li>
                <li><a href="about.php/#theteam">The Team</a></li>
                <li><a href="about.php/#affiliates">Affiliates</a></li>
              </ul>
              <ul>
                <li><a href="learn/index.php">Learn</a></li>
                <li><a href="learn/blog.php">Blog</a></li>
                <li><a href="learn/ecosystems.php">Ecosystems</a></li>
              </ul>
              <ul>
                <li><a href="faq.php">FAQ</a></li>
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
          Aqua Design Innovations 2014 - All Rights Reserved
        </div><!-- #footer-copyright -->

      </footer>
    </div><!-- #footer-container -->

    <!-- Script -->
    <!-- Javascript code identifying which sections are visible on the screen -->
    <script type="text/javascript">
    var currSection = "";
    var DEBUG = true;


    //CHanges dots based on scrolling
    $(window).scroll(function() {
      if ($(".section-0").visible()) {
        updateDots("section-0");
      } else if ($(".section-1").visible()) {
        updateDots("section-1");
      } else if ($(".section-2").visible()) {
        updateDots("section-2");
      } else if ($(".section-3").visible()) {
        updateDots("section-3");
      } else if ($(".section-4").visible()) {
        updateDots("section-4");
      } else if ($(".section-5").visible()) {
        updateDots("section-5");
      }
    });
    </script>

    <!-- Scroll js file -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/scrolld.js"></script>
    <script type="text/javascript">
    $("[id*='Btn']").stop(true).on('click',function(e){e.preventDefault();$(this).scrolld();});
    </script>

    <!-- Flexslider -->
    <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $('#main-slider').flexslider({
        animation: "slide",
        animationSpeed:0,
        controlNav: false,
        maxItems:5,
        minItems:4,
        move:5,
        itemWidth:275,
        itemMargin:5,
        slideshowSpeed: 7000,
        pauseOnAction: true,
        pauseOnHover: true,
        touch: true
      });

      $('#secondary-slider').flexslider({
        animation: "fade",
        animationSpeed:500,
        slideshowSpeed: 7000,
        pauseOnAction: true,
        pauseOnHover: true,
        touch: true
      });
    });
    </script>

    <!-- Enable horizontal scroll with fixed header -->
    <script>
    $(document).ready(function() {
      $('#header-container').scrollToFixed();
    });
    </script>
  </body>
  </html>
