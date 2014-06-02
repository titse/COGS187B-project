<!DOCTYPE html>
<html>
<head>
  <title>EcoQube</title>
  <link type="text/css" rel="stylesheet" href="css/global.css"/>
  <link type="text/css" rel="stylesheet" href="css/ecoqube.css"/>
  <link type="text/css" rel="stylesheet" href="css/shop.css"/>
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


  <!-- JQuery visible library to detect which sections of the page is visible on the users screen and adjust the blue dot-->
  <script src="js/jquery.visible.js"></script>

  <!-- Javascript library to easily hide, show and move stuff around -->
  <script type="text/javascript" src="js/layerlib.js"></script>

  <!-- Custom Javascript functions used across pages -->
  <script type="text/javascript" src="js/global.js"></script>

  <!-- Fixed header + horizontal scroll -->
  <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
  <script type="text/javascript" src="ScrollToFixed-master/jquery-scrolltofixed.js"></script>
</head>
<body>
  <!-- Header -->
  <div id="header-container">
    <header>
      <div id="header-logo">
        <a href="index.php"><img src="img/logos/header-logo.png" alt="Aqua Design Innovations" /></a>
      </div><!-- #header-logo -->

      <div id="header-navigation">
        <ul>
          <li><a href="ecoqube.php" class="header-heading" id="header-current">EcoQube</a>
            <ul class="sub_menu">
              <li><a href="ecoqube.php#howitworks" id="howitworksBtn" class="">How It Works</a></li>
              <li><a href="ecoqube.php#keyfeatures" id="keyfeaturesBtn" class="">Key Features</a></li>
              <li><a href="ecoqube.php#buyittoday" id="buyittodayBtn" class="">Buy It Today</a></li>
              <li><a href="ecoqube.php#fishandplants" id="fishandplantsBtn" class="">Fish & Plants</a></li>
              <li><a href="ecoqube.php#press" id="pressBtn" class="">Press Releases</a></li>
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
          <li>
            <a href="index.php" id="header-icon-cart">&#xe811;</a>
          </li>
        </ul>
      </div><!-- #header-navigation -->
    </header>
  </div><!-- #header-container -->

  <!-- Dot navigation -->
  <div id="dot-navigation-container">
    <ul>
      <li class="dot-navigation-icon">
        <a id="topBtn" class="section-0-dot dot-hover" href="ecoqube.php#top" data-title="Top">
          <img class="navigation-dot" id="img-section-0-dot" src="img/dots/dot-current.gif" width="25" height="25" alt="Top Navigation Dot"/>
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="howitworksBtn" class="section-1-dot dot-hover" href="ecoqube.php#howitworks" data-title="How does the EcoQube work">
          <img class="navigation-dot" id="img-section-1-dot" src="img/dots/dot.gif" width="25" height="25" alt="How It Works Navigation Dot" />
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="keyfeaturesBtn" class="section-2-dot dot-hover" href="ecoqube.php#keyfeatures" data-title="Key features">
          <img class="navigation-dot" id="img-section-2-dot" src="img/dots/dot.gif" width="25" height="25" alt="Key Features Navigation Dot" />
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="buyittodayBtn" class="section-3-dot dot-hover" href="ecoqube.php#buyittoday" data-title="Buy the EcoQube today">
          <img class="navigation-dot" id="img-section-3-dot" src="img/dots/dot.gif" width="25" height="25" alt="Buy the EcoQube today Navigation Dot" />
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="fishandplantsBtn" class="section-4-dot dot-hover" href="ecoqube.php#fishandplants" data-title="Compatible fish and plants">
          <img class="navigation-dot" id="img-section-4-dot" src="img/dots/dot.gif" width="25" height="25" alt="Fish and Plants Navigation Dot" />
        </a>
      </li>

      <li class="dot-navigation-icon">
        <a id="pressBtn" class="section-5-dot dot-hover" href="ecoqube.php#press" data-title="Press deleases">
          <img class="navigation-dot" id="img-section-5-dot" src="img/dots/dot.gif" width="25" height="25" alt="Press releases navigation dot"/>
        </a>
      </li>
    </ul>
  </div>

  <!-- Content  -->
  <div id="content-container">

    <!-- Video -->
    <div class="section-container first-section-margin section-0">
      <a id="top" href="ecoqube-modal-1.php" class="ecoqube-modal-1">
        <div class="ecoqube-video-overlay">
          Introducing the<br />
          <img src="img/logos/ecoqube-logo.png" /><br />
          a beautiful, compact, all-in-one<br />
          aquatic ecosystem for your home or office.
        </div><!-- .ecoqube-video-overlay -->
        <div class="ecoqube-play-icon">
          &#xe817;
        </div><!-- .ecoqube-play-icon -->
        <div class="ecoqube-video-image">
          <img src="img/ecoqube1.jpg" />
        </div><!-- .ecoqube-video-image -->
      </a>
    </div><!-- .section-container .first-section-margin -->

    <!-- How It Works -->
    <div class="section-container section-1">
      <div class="section-content">
        <div class="section-heading">
          <a id="howitworks" class="anchor"></a>How does the EcoQube work?
        </div><!-- .section-heading -->
        <div class="howitworks-left">
          <br />
          <img src="img/ecoqube/fish.png" />
          Fish excrete waste into the water.<br>
          <img src="img/ecoqube/water.png" />
          Aquaponics filter turns waste into fertilizer.<br>
          <img src="img/ecoqube/leaf.png" />
          Filter uses plants to purify the water.
          <br /><br />
          Fertilized water from the fish is fed to plant roots at 100 gallons per hour and the roots remove the fish waste before water re-enters the aquarium, making it a low maintenance plant propagator and easy to care for aquarium.
          <br /><br />
          This makes the EcoQube a natural, self-sustainable, and easy to care for aquarium.
        </div><!-- .howitworks-left -->
        <div class="howitworks-right">
          <img src="img/ecoqube/eqrender.png" />
        </div><!-- .howitworks-right -->
      </div><!-- .section-content -->
    </div><!-- .section-container -->

    <!-- Blurb 1 -->
    <div class="section-container">
      <div class="section-blurb">
        <div class="ecoqube-blurb-overlay-1">
          The heart of the EcoQube is the aquaponics filter which <br />
          uses plants, the world's best and most natural filter, <br />
          to keep your aquarium clean.
        </div><!-- ecoqube-blurb-overlay-1 -->
        <img src="img/ecoqube3.png" />
      </div><!-- .ecoqube-blurb -->
    </div><!-- .section-container -->

    <!-- Key Features -->
    <div class="section-container section-2">
      <div class="section-content">
        <div class="section-heading">
          <a id="keyfeatures" class="anchor"></a>Key Features
        </div><!-- .section-heading -->
        <div class="keyfeatures-left section-text">
          <br>
          The aquarium kit provides you with the easiest and
          most sustainable way to keep fish and grow plants!
          <br><br>
          The complete EcoQube includes the following:
          <ul>
            <li>LED Light</li>
            <li>LED UV Sterilizer</li>
            <li>Aquaponics filter</li>
            <li>Aquarium</li>
          </ul>
        </div><!-- .keyfeatures-left -->
        <div class="keyfeatures-right">
          <img src="img/ecoqube/eqfeatures.png" />
        </div><!-- .keyfeatures-right -->
      </div> <!-- .section-content -->
    </div><!-- .section-container -->

    <!-- Blurb 2 -->
    <div class="section-container">
      <div class="section-blurb">
        <div class="ecoqube-blurb-overlay-2">
          The EcoQube's patent-pending aquaponics filter allows <br />
          you to efficiently grow your house plants or <br />
          micro-greens with ease, while using the same <br />
          plants to keep your aquarium clean.
        </div><!-- ecoqube-blurb-overlay-2 -->
        <img src="img/ecoqube4.png" />
      </div><!-- .section-blurb -->
    </div><!-- .section-container -->

    <!-- Buy It Today -->
    <div class="section-container section-3">
      <div class="section-content">
        <div class="section-heading">
          <a id="buyittoday" class="anchor"></a>Buy an EcoQube Today
        </div><!-- .section-heading -->
        <br />
        The aquarium kit provides you with the easiest and most sustainable way to keep fish and grow plants!
        <br />
        The complete EcoQube includes the following:
        <br />
        LED Light
        <br />
        LED UV Sterilizer
        <br />
        Aquaponics filter
        <br />
        Aquarium
      </div><!-- section-content -->
    </div><!-- .section-container -->

    <!-- Fish and Plants -->
    <div class="section-container">
      <div class="section-content section-text">
        <div class="section-heading">
          <a id="fishandplants" class="anchor section-4"></a>Compatible Fish and Plants
        </div><!-- .section-heading -->
        <br />
        <div class="ecoqube-buyittoday section-text">
          Given both the terrestrial and aquatic environments that can persist in the EcoQube, we have some recommendations and suggestions for the livestock and plants you use to build your own aquatic ecosystem.
          <br /><br /><br />
        </div><!-- .ecoqube-buyittoday -->
        <div class="ecoqube-items-section">
          <div class="section-heading-2">Fish</div>
          <br />
          We would suggest starting off with two white cloud minnows or zebrafish and, if you’d like, slowly adding more as your  plants grow. If you’re keeping the aquarium in a warmer area (75͒ room temperature), you can easily keep smaller tropical fish, like guppies, scarlet badis, and many others.
          <br /><br />

          <div class="section-container ecoqube-product-section">

            <div class="product fish ecoqube">
              <div class="product-image-conatiner">
                <div class="product-image">
                  <img src="img/products/test-product-image.png" alt="Product image">
                </div>
              </div>

              <div class="info-icons-wrapper">
                <div class="icon-description-field">
                  <img src="img/ecoqube/leaf.png" class="icon" width="40" alt="EcoQube icon" title="EcoQube item"/>
                  <p class="icon-description">EQ item</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/fish.png" class="icon" width="40" alt="Lifetime icon" title="Lifetime of item"/>
                  <p class="icon-description">4 months</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/water.png" class="icon" width="40" alt="Water temperature icon" title="Reqired water tempreature"/>
                  <p class="icon-description">25 degrees</p>
                </div>
              </div>
              <p class="product-name">Cloud Minnow</p>
              <p class="price">$ 4.99</p>
            </div>

            <div class="product fish ecoqube">
              <div class="product-image-conatiner">
                <div class="product-image">
                  <img src="img/products/test-product-image.png" alt="Product image">
                </div>
              </div>

              <div class="info-icons-wrapper">
                <div class="icon-description-field">
                  <img src="img/ecoqube/leaf.png" class="icon" width="40" alt="EcoQube icon" title="EcoQube item"/>
                  <p class="icon-description">EQ item</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/fish.png" class="icon" width="40" alt="Lifetime icon" title="Lifetime of item"/>
                  <p class="icon-description">4 months</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/water.png" class="icon" width="40" alt="Water temperature icon" title="Reqired water tempreature"/>
                  <p class="icon-description">25 degrees</p>
                </div>
              </div>
              <p class="product-name">Zebrafish</p>
              <p class="price">$ 4.99</p>
            </div>

            <div class="product fish ecoqube">
              <div class="product-image-conatiner">
                <div class="product-image">
                  <img src="img/products/test-product-image.png" alt="Product image">
                </div>
              </div>

              <div class="info-icons-wrapper">
                <div class="icon-description-field">
                  <img src="img/ecoqube/leaf.png" class="icon" width="40" alt="EcoQube icon" title="EcoQube item"/>
                  <p class="icon-description">EQ item</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/fish.png" class="icon" width="40" alt="Lifetime icon" title="Lifetime of item"/>
                  <p class="icon-description">4 months</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/water.png" class="icon" width="40" alt="Water temperature icon" title="Reqired water tempreature"/>
                  <p class="icon-description">25 degrees</p>
                </div>
              </div>
              <p class="product-name">Guppy</p>
              <p class="price">$ 4.99</p>
            </div>

            <div id="product-image-overlay">
              <div class="product-image-conatiner">
                <div class="product-image">
                  <a href="#description"><div id="upper-overlay" class="overlay-section">
                    <h3>DESCRIPTION</h3>
                  </div></a>
                  <a href="#addtocart"><div id="lower-overlay" class="overlay-section">
                    <h3>ADD TO CART</h3>
                  </div></a>
                </div>
              </div>
            </div>

          </div> <!-- .ecoqube-products -->

          <br /><br /><br>
          <div class="section-heading-2">Plants</div>
          <br />
          For filtration, Basil and Mint have been tested for
          best results. Inside the aquarium, we recommend EcoQube
          owners to include aquatic plants, like Java Ferns,
          aquatic mosses, and Anubias. The more plants there
          are in the EcoQube, the easier it will be to maintain.

          <div class="section-container ecoqube-product-section">

            <div class="product ecoqube plants terrestrial">
              <div class="product-image-conatiner">
                <div class="product-image">
                  <img src="img/products/test-product-image.png" alt="Product image">
                </div>
              </div>

              <div class="info-icons-wrapper">
                <div class="icon-description-field">
                  <img src="img/ecoqube/leaf.png" class="icon" width="40" alt="EcoQube icon" title="EcoQube item"/>
                  <p class="icon-description">EQ item</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/fish.png" class="icon" width="40" alt="Lifetime icon" title="Lifetime of item"/>
                  <p class="icon-description">4 months</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/water.png" class="icon" width="40" alt="Water temperature icon" title="Reqired water tempreature"/>
                  <p class="icon-description">25 degrees</p>
                </div>
              </div>
              <p class="product-name">Basil</p>
              <p class="price">$ 4.99</p>
            </div>

            <div class="product ecoqube plants terrestrial">
              <div class="product-image-conatiner">
                <div class="product-image">
                  <img src="img/products/test-product-image.png" alt="Product image">
                </div>
              </div>

              <div class="info-icons-wrapper">
                <div class="icon-description-field">
                  <img src="img/ecoqube/leaf.png" class="icon" width="40" alt="EcoQube icon" title="EcoQube item"/>
                  <p class="icon-description">EQ item</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/fish.png" class="icon" width="40" alt="Lifetime icon" title="Lifetime of item"/>
                  <p class="icon-description">4 months</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/water.png" class="icon" width="40" alt="Water temperature icon" title="Reqired water tempreature"/>
                  <p class="icon-description">25 degrees</p>
                </div>
              </div>
              <p class="product-name">Mint</p>
              <p class="price">$ 4.99</p>
            </div>


            <div class="product ecoqube plants aquatic">
              <div class="product-image-conatiner">
                <div class="product-image">
                  <img src="img/products/test-product-image.png" alt="Product image">
                </div>
              </div>

              <div class="info-icons-wrapper">
                <div class="icon-description-field">
                  <img src="img/ecoqube/leaf.png" class="icon" width="40" alt="EcoQube icon" title="EcoQube item"/>
                  <p class="icon-description">EQ item</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/fish.png" class="icon" width="40" alt="Lifetime icon" title="Lifetime of item"/>
                  <p class="icon-description">4 months</p>
                </div>

                <div class="icon-description-field">
                  <img src="img/ecoqube/water.png" class="icon" width="40" alt="Water temperature icon" title="Reqired water tempreature"/>
                  <p class="icon-description">25 degrees</p>
                </div>
              </div>
              <p class="product-name">Java Fern</p>
              <p class="price">$ 4.99</p>
            </div>


          </div> <!-- .ecoqube-products -->

        </div><!-- .ecoqube-items-section -->
      </div><!-- .section-content -->
    </div><!-- .section-container -->

    <!-- Blurb 3 -->
    <div class="section-container">
      <div class="section-blurb">
        <div class="ecoqube-blurb-overlay-3">
          "We want to use the Ecoqube as a vehicle <br />
          to deliver the concept and beauty of aquaponics to as <br />
          many people's lives as possible."<br />
          -Kevin and Eric, ADI's Founders
        </div><!-- .ecoqube-blurb-overlay-3 -->
        <img src="img/ecoqube5.png" />
      </div><!-- .ecoqube-blurb -->
    </div><!-- .section-container -->

    <!-- Press Releases -->
    <div class="section-container section-5 last-section-margin">
      <div class="section-content">
        <div class="section-heading">
          <a id="press" class="anchor"></a>Press Releases
        </div><!-- .section-heading -->
        <br />
        <div id="ecoqube-press-container">
          <a href="http://www.treehugger.com/gadgets/aquaponics-ecosystem-fits-your-desk.html"><img src="img/ecoqube/press-treehugger.png" class="ecoqube-press-logos" /></a>
          <a href="http://inventorspot.com/articles/ecoqube_minifarm_aquarium_combines_sustainability_beauty"><img src="img/ecoqube/press-inventorspot.png" class="ecoqube-press-logos" /></a>
          <a href="http://nextshark.com/ecoqube-how-this-startup-can-seriously-end-world-hunger/"><img src="img/ecoqube/press-nextshark.png" class="ecoqube-press-logos" /></a>
          <a href="http://www.enn.com/sustainability/article/46713"><img src="img/ecoqube/press-enn.png" class="ecoqube-press-logos" /></a>
          <a href="http://welldonestuff.com/ecoqube-bring-nature-life/"><img src="img/ecoqube/press-welldonestuff.png" class="ecoqube-press-logos" /></a>
          <a href="http://www.crowdlifted.com/news/2013/12/ecoqube-a-desktop-aquaponic-ecosystem-to-bring-organic-life-to-your-cubicle"><img src="img/ecoqube/press-crowdlifted.png" class="ecoqube-press-logos" /></a>
          <a href="http://amedicsworld.com/2013/12/ecoqube-the-most-beautiful-way-to-grow-herbs-house-plants-or-flowers-indoor-while-using-the-same-plants-to-clean-aquarium-water-with-ease.html"><img src="img/ecoqube/press-amedicsworld.png" class="ecoqube-press-logos" /></a>
          <a href="http://www.greenphillyblog.com/green-living/ecoqube-kickstarter/"><img src="img/ecoqube/press-greenphillyblog.png" class="ecoqube-press-logos" /></a>
          <a href="http://makobiscribe.com/ecoqube-coolest-gift-ever/"><img src="img/ecoqube/press-makobiscribe.png" class="ecoqube-press-logos" /></a>
          <a href="http://stagetecture.com/2013/11/ecoqube-kickstarter/"><img src="img/ecoqube/press-stagetecture.png" class="ecoqube-press-logos" /></a>
          <a href="http://www.homemaidsimple.com/2013/12/ecoqube-kickstarter-campaign.html"><img src="img/ecoqube/press-homemaidsimple.png" class="ecoqube-press-logos" /></a>
          <a href="http://stacysrandomthoughts.com/2013/12/ecoqube-bring-nature-to-life/"><img src="img/ecoqube/press-stacyuncorked.png" class="ecoqube-press-logos" /></a>
        </div><!-- #ecoqube-press-container -->
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
              <li><a href="ecoqube.php#howitworks" id="howitworksBtn">How It Works</a></li>
              <li><a href="ecoqube.php#keyfeatures" id="keyfeaturesBtn">Key Features</a></li>
              <li><a href="ecoqube.php#buyittoday" id="buyittodayBtn">Buy It Today</a></li>
              <li><a href="ecoqube.php#fishandplants" id="fishandplantsBtn">Fish & Plants</a></li>
              <li><a href="ecoqube.php#press" id="pressBtn">Press Releases</a></li>
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

  <!-- Scripts -->
  <!-- Javascript code identifying which sections are visible on the screen -->
  <script type="text/javascript">
  var currSection = "";
  var DEBUG = false;

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

});

function hideProductGroup() {
  console.log("Hiding products");
}

$(document).ready(function() {
});
</script>

<!-- Modal window -->
<script type="text/javascript">
$(document).ready(function() {
  $('.ecoqube-modal-1').magnificPopup({
    type: 'ajax',
    alignTop: true,
    overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
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
