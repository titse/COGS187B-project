<!DOCTYPE html>
<html>
<head>
  <title>About</title>
  <link type="text/css" rel="stylesheet" href="css/global.css"/>
  <link type="text/css" rel="stylesheet" href="css/about.css"/>
  <link rel="shortcut icon" href="img/logos/favicon.ico">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Modal window -->
  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="Magnific-Popup-master/dist/magnific-popup.css">

  <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- Magnific Popup core JS file -->
  <script src="Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

  <!-- JQuery visible library to detect which sections of the page is visible on the users screen and sdjust the blue dot-->
  <script type="text/javascript" src="js/jquery.visible.js"></script>

  <!-- Custom Javascript functions used across pages -->
  <script type="text/javascript" src="js/global.js"></script>

  <!-- FlexSlider2 -->
  <link rel="stylesheet" href="flexslider2/flexslider-aboutpage.css" type="text/css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> -->
  <script src="flexslider2/jquery.flexslider.js"></script>

  <!-- Fixed header + horizontal scroll -->
  <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
  <script type="text/javascript" src="ScrollToFixed-master/jquery-scrolltofixed.js"></script>
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
          </li>
        </ul>
      </div><!-- #header-navigation -->
    </header>
  </div><!-- #header-container -->

  <!-- Dot navigation -->
  <div id="dot-navigation-container">
    <ul>
      <li class="dot-navigation-icon">
        <a id="topBtn" class="dot-hover" href="ecoqube.php#top" data-title="Top">
          <img class="navigation-dot" id="img-section-0-dot" src="img/dots/dot-current.gif" width="25" height="25" alt="Top Navigation Dot"/>
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="ourstoryBtn" class="dot-hover" href="about.php#ourstory" data-title="Our Story">
          <img class="navigation-dot" id="img-section-1-dot" src="img/dots/dot.gif" width="25" height="25" alt="Our Story Navigation Dot" />
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="valuesBtn" class="dot-hover" href="about.php#values" data-title="Vision and values">
          <img class="navigation-dot" id="img-section-2-dot" src="img/dots/dot.gif" width="25" height="25" alt="Values Navigation Dot"  />
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="theteamBtn" class="dot-hover" href="about.php#theteam" data-title="The Team">
          <img class="navigation-dot" id="img-section-3-dot" src="img/dots/dot.gif" width="25" height="25" alt="The Team Navigation Dot" />
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="affiliatesBtn" class="dot-hover" href="about.php#affiliates" data-title="Affiliates and sposorships">
          <img class="navigation-dot" id="img-section-4-dot" src="img/dots/dot.gif" width="25" height="25" alt="Affiliates Navigation Dot"/>
        </a>
      </li>
    </ul>
  </div>

  <!-- Content  -->
  <div id="content-container">
    <div class="section-container section-0">
      <div id="top" class="about-founders-image">
        <img src="img/about/team-1.jpg" />
      </div><!-- .about-founders-image -->
    </div><!-- .section-container -->

    <!-- Our Story -->
    <div class="section-container">
      <div class="section-content">
        <div class="section-heading section-1">
          <a id="ourstory" class="anchor"></a>We are Kevin and Eric.
        </div><!-- .section-heading -->
        <div class="about-ourstory">
          <br />
          Currently, we attend UC San Diego and are aquarium geeks who met in high school and instantly became intrigued by planted aquatic ecosystems.
          <br /><br />
          As we got older, we realized the bigger challenges humanity as a whole faces in terms of food and water shortages, so we decided to use our knowledge of aquariums to deliver the concept of aquaponics to as many people as possible.
          <br /><br />
          With knowledge and experience, we established ADI with the fundamental goals to build a business around a solution for the aquarium industry and to raise environmental awareness.
          <br />
          <br />
          But now, we'd like to expand our reach to you through the EcoQube, a miniature aquatic ecosystem that we created to deliver the practical solution and beauty of aquaponics to households and offices around the world!
          <br /><br />
          We know that we can’t solve the many problems in our world with a fish tank, no matter how beautiful it is, but we hope to connect people to our environment and influence the way they perceive the larger issues in our world today.
          <br /><br />
          “Because the crazy ones who think they can change the world are the ones who do.” –Apple
        </div><!-- .about-ourstory -->
        <br /><div id="ourstory-slide">
          <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li><img src="img/about/ourstory-4.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-5.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-6.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-13.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-7.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-10.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-1.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-9.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-2.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-3.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-18.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-21.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-8.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-14.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-15.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-17.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-16.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-19.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/about/ourstory-20.jpg" class="about-ourstory-images" /></li>
              <li><img src="img/ecoqube2.jpg" class="about-ourstory-images" /></li>
            </ul>
          </div></div>
        </div><!-- .section-content -->
      </div><!-- .section-container -->

      <!-- Values -->
      <div class="section-container">
        <div class="section-content">
          <div class="section-heading section-2">
            <a id="values" class="anchor"></a>Vision and Values
          </div><!-- .section-heading -->
          <br />
          We have a vision to be much more than just an online vendor for aquarium goods and an installation company.
          <br /><br />
          <ul class="about-values-list">
            <li>Less Transport- Less time and resources spent on transporting livestock directly leads to unsurpassed quality.</li>
            <li>Less Environmental Impact- Less fish are lost and less fossil fuel is burned. Resulting in more:</li>
            <li>Competitive Pricing- Savings are then passed onto you and higher profit margins allows for.</li>
            <li>Domestic Jobs- Happy local employees will then provide you with unmatchable.</li>
            <li>Quality and Service- Something all of our customers deserve!</li>
          </ul>
          <br /><br />
          When dealing with ADI, you are more than just a customer; you become part of the revolution.
        </div><!-- section-content -->
      </div><!-- .section-container -->

      <!-- The Team -->
      <div class="section-container section-3">
        <div class="section-content">
          <div class="section-heading">
            <a id="theteam" class="anchor"></a>The Team
          </div><!-- .section-heading -->
          <br />
          <img src="img/about/team-2.jpg" class="about-team-members" />
        </div><!-- section-content -->
      </div><!-- .section-container -->

      <!-- Affiliates -->
      <div class="section-container">
        <div class="section-content">
          <div class="section-heading section-4">
            <a id="affiliates" class="anchor"></a>Affiliates, Sponsorships, and Philanthropy
          </div><!-- .section-heading -->
          <br />
          <div id="secondary-slider" class="flexslider">
            <ul class="slides">
              <li>
                <div class="about-inside">
                  <span class="about-affiliates-names">Chris E. Yin</span>
                  <br />
                  <span class="about-flexslider2-text">Chief Operating Officer at Bespoke Partners and founder of Pathways Ventures, an on-campus incubator at University of California, San Diego.</span>
                </div>
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
          Aqua Design Innovations 2014 - All Rights Reserved
        </div><!-- #footer-copyright -->
      </footer>
    </div><!-- #footer-container -->

    <!-- Script -->
    <!-- Javascript code identifying which sections are visible on the screen -->
    <script type="text/javascript">
    var currSection = "";
    var DEBUG = true;

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
        // animation: "slide"
        animation: "fade",
        animationSpeed:0,
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
