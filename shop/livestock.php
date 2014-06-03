<!DOCTYPE html>
<html>
<head>
  <title>Shop | Livestock</title>
     <link type="text/css" rel="stylesheet" href="../css/global.css"/>
     <link type="text/css" rel="stylesheet" href="../css/shop.css"/>
     <link type="text/css" rel="stylesheet" href="../css/ecoqube.css"/>
     <link type="image/png" rel="shortcut icon" href="../img/logos/favicon.ico" />

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Modal window -->
       <!-- Magnific Popup core CSS file -->
       <link rel="stylesheet" href="../Magnific-Popup-master/dist/magnific-popup.css">

       <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

       <!-- Magnific Popup core JS file -->
       <script src="../Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

     <!-- Custom Javascript functions used across pages -->
          <script type="text/javascript" src="../js/layerlib.js"></script>
          <script type="text/javascript" src="../js/global.js"></script>

     <!-- Fixed header + horizontal scroll -->
          <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
          <script type="text/javascript" src="../ScrollToFixed-master/jquery-scrolltofixed.js"></script>

  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/layerlib.js"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> --> <!-- E: I had to comment this out so that the modal window works. Nothing else in the page seems to have broken though. -->
</head>

<body>
  <!-- Header -->
  <div id="header-container">
    <header>
      <div id="header-logo">
        <a href="../index.php"><img src="../img/logos/header-logo.png" /></a>
      </div><!-- #header-logo -->

      <div id="header-navigation">
        <ul>
          <li><a href="../ecoqube.php" class="header-heading">EcoQube</a>
            <ul class="sub_menu">
              <li><a href="../ecoqube.php#howitworks">How It Works</a></li>
              <li><a href="../ecoqube.php#keyfeatures">Key Features</a></li>
              <li><a href="../ecoqube.php#buyittoday">Buy It Today</a></li>
              <li><a href="../ecoqube.php#fishandplants">Fish & Plants</a></li>
              <li><a href="../ecoqube.php#press">Press Releases</a></li>
            </ul>
          </li>
          <li><a href="index.php" class="header-heading" id="header-current">Shop</a>
            <ul class="sub_menu">
              <li><a href="ecoqube.php">EcoQube</a></li>
              <li><a href="livestock.php">Livestock</a></li>
              <li><a href="plants.php">Plants</a></li>
              <li><a href="accessories.php">Accessories</a></li>
            </ul>
          </li>
          <li><a href="../services.php" class="header-heading">Services</a>
            <ul  class="sub_menu">
              <li><a href="../services.php#contact">Contact</a></li>
              <li><a href="../services.php#installations">Installations</a></li>
              <li><a href="../services.php#maintenance">Maintenance</a></li>
              <li><a href="../services.php#gallery">Gallery</a></li>
            </ul>
          </li>
          <li><a href="../about.php" class="header-heading">About</a>
            <ul  class="sub_menu">
              <li><a href="../about.php#ourstory">Our Story</a></li>
              <li><a href="../about.php#values">Values</a></li>
              <li><a href="../about.php#theteam">The Team</a></li>
              <li><a href="../about.php#affiliates">Affiliates</a></li>
            </ul>
          </li>
          <li><a href="../learn/index.php" class="header-heading">Learn</a>
            <ul  class="sub_menu">
              <li><a href="../blog.php">Blog</a></li>
              <li><a href="../learn/ecosystems.php">Ecosystems</a></li>
            </ul>
          </li>
          <li><a href="../faq.php" class="header-heading">FAQ</a>
            <ul class="sub_menu">
              <li><a href="../faq.php#ecoqube">EcoQube</a></li>
              <li><a href="../faq.php#shop">Shop</a></li>
              <li><a href="../faq.php#services">Services</a></li>
              <li><a href="../faq.php#shipping">Shipping</a></li>
              <li><a href="../faq.php#warranty">Warranty</a></li>
            </ul>
          </li>
          <li><a href="../index.php" id="header-icon-cart">&#xe811;</a>
          </li>
        </ul>
      </div><!-- #header-navigation -->
    </header>
  </div><!-- #header-container -->

  <div id="content-container">
  <!-- Shop notification bar -->
  <div id="shop-notification-bar">
    <p id="shop-notification-text">30% OFF FISH STORE PRICES ON QUANTITIES OF 12 OR MORE</p>
  </div>


  <!--Shop heading section -->
  <div class="shop-heading first-section-margin left-margin">
    <h3 class="categories-heading">LIVESTOCK</h3>

    <div class="shop-filter-container">
      <srtong class="text">Filter by:</strong>
        <a href="#" class="filterOptions ecoqube-filter text">EcoQube</a>
        |
        <a href="#" class="filterOptions fish-filter text">Fish</a>
        |
        <a href="#" class="filterOptions invertebrates-filter text">Invertebrates</a>
        |
        <a href="livestock.php" class="filterOptions all-filter current text">All</a>
      </div>
    </div>

    <!-- Secondary-navigation  -->
    <div class="side-navbar">
  <div class="side-navbar-content">
    <div class="shop-header">
      <a href="index.php"><h1>SHOP</h1></a>
    </div>
    <ul>
      <li class="shop-category">
        <ul id="shop-category-ecoqube">
          <li><a href="ecoqube.php" id="category-subheading-ecoqube" class="shop-category-heading"> EcoQube </a></li>
          <li><a href="#" class="shop-category-item"> Fish </a></li>
          <li><a href="#" class="shop-category-item"> Plants </a></li>
          <li><a href="#" class="shop-category-item"> Accessories </a></li>
        </ul>
      </li>
      <li class="shop-category">
        <ul id="shop-category-livestock">
          <li><a href="livestock.php" id="category-subheading-livestock" class="shop-category-heading current"> Livestock </a></li>
          <li><a href="#" class="shop-category-item filterOptions fish-filter"> Fish </a></li>
          <li><a href="#" class="shop-category-item filterOptions invertebrates-filter"> Invertebrates </a></li>
        </ul>
      </li>
      <li class="shop-category">
        <ul id="shop-category-livestock">
          <li><a href="plants.php" id="category-subheading-livestock" class="shop-category-heading"> Plants </a></li>
          <li><a href="#" class="shop-category-item"> Terrestrial </a></li>
          <li><a href="#" class="shop-category-item"> Aquatic </a></li>
        </ul>
      </li>
      <li class="shop-category">
        <ul id="shop-category-livestock">
          <li><a href="accessories.php" id="category-subheading-livestock" class="shop-category-heading"> Accessories </a></li>
        </ul>
      </li>
    </ul>
  </div><!-- #Side-navbar-content  -->
</div><!-- #Side-navbar  -->

<!-- Content  -->
<div class="shop-content-container left-margin">

  <div class="product fish ecoqube">
    <div class="product-image-conatiner">
      <div class="product-image">
        <img src="../img/shop/clouded-minnow.jpg" class="horizontal" alt="Product image">
      </div>
    </div>

    <div class="info-icons-wrapper">
      <div class="icon-description-field-4 key-info" data-title="Recommended for the EcoQube">
        <img src="../img/shop/ecoqube-icon.png" class="icon" width="40" alt="EcoQube icon"/></a>
        <p class="icon-description">EQ item</p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Max size of the fish">
        <img src="../img/shop/size-icon.png" class="icon" width="40" alt="Fish size icon"/>
        <p class="icon-description">1.5 inches </p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Reqired water tempreature">
        <img src="../img/shop/water-temp-icon.png" class="icon" width="40" alt="Water temperature icon"/>
        <p class="icon-description">65-75° F</p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Swimming level">
        <img src="../img/shop/swim-level-icon.png" class="icon" width="40" alt="Swimming level icon"/>
        <p class="icon-description">Top</p>
      </div>
    </div>
    <p class="product-name">Cloud Minnow</p>
    <p class="price">$ 1.49</p>
  </div>

  <div class="product fish ecoqube">
    <div class="product-image-conatiner">
      <div class="product-image">
        <img src="../img/shop/zebra-danio.jpg" class="horizontal" alt="Product image">
      </div>
    </div>

    <div class="info-icons-wrapper">
      <div class="icon-description-field-4 key-info" data-title="Recommended for the EcoQube">
        <img src="../img/shop/ecoqube-icon.png" class="icon" width="40" alt="EcoQube icon" title="Recommended for the EcoQube"/>
        <p class="icon-description">EQ item</p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Max size of the fish">
        <img src="../img/shop/size-icon.png" class="icon" width="40" alt="Fish size icon" title="Max size of fish"/>
        <p class="icon-description">2 inches </p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Reqired water tempreature">
        <img src="../img/shop/water-temp-icon.png" class="icon" width="40" alt="Water temperature icon" title="Reqired water tempreature"/>
        <p class="icon-description">70-82° F</p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Swimming level">
        <img src="../img/shop/swim-level-icon.png" class="icon" width="40" alt="Swimming level icon" title="Swimming level"/>
        <p class="icon-description">Top</p>
      </div>

    </div>
    <p class="product-name">Zebrafish</p>
    <p class="price">$ 1.99</p>
  </div>

  <div class="product fish ecoqube">
    <div class="product-image-conatiner">
      <div class="product-image">
        <img src="../img/shop/guppy.jpg" class="horizontal" alt="Guppy">
      </div>
    </div>

    <div class="info-icons-wrapper">
      <div class="icon-description-field-4 key-info" data-title="Recommended for the EcoQube">
        <img src="../img/shop/ecoqube-icon.png" class="icon" width="40" alt="EcoQube icon"/></a>
        <p class="icon-description">EQ item</p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Max size of the fish">
        <img src="../img/shop/size-icon.png" class="icon" width="40" alt="Fish size icon"/>
        <p class="icon-description">1.5 inches </p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Reqired water tempreature">
        <img src="../img/shop/water-temp-icon.png" class="icon" width="40" alt="Water temperature icon"/>
        <p class="icon-description">70-82° F</p>
      </div>

      <div class="icon-description-field-4 key-info" data-title="Swimming level">
        <img src="../img/shop/swim-level-icon.png" class="icon" width="40" alt="Swimming level icon"/>
        <p class="icon-description">Top</p>
      </div>
    </div>
    <p class="product-name">Guppy</p>
    <p class="price">$ 3.19</p>
  </div>

  <!--  <div id="product-image-overlay">
  <div class="product-image-conatiner">
  <div class="product-image">
  <a href="#description"><div id="upper-overlay" class="overlay-section">
  <a href="item-modal-1.php" class="item-modal"><h3>DESCRIPTION</h3></a>
</div></a>
<a href="#addtocart"><div id="lower-overlay" class="overlay-section">
<h3>ADD TO CART</h3>
</div></a>
</div>
</div>
</div>-->

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
                      <a href="../index.php"><img src="../img/logos/footer-logo.png" /></a>
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
                          <li><a href="../ecoqube.php">EcoQube</a></li>
                          <li><a href="../ecoqube.php#howitworks">How It Works</a></li>
                          <li><a href="../ecoqube.php#keyfeatures">Key Features</a></li>
                          <li><a href="../ecoqube.php#buyittoday">Buy It Today</a></li>
                          <li><a href="../ecoqube.php#fishandplants">Fish & Plants</a></li>
                          <li><a href="../ecoqube.php#press">Press Releases</a></li>
                        </ul>
                        <ul>
                          <li><a href="index.php">Shop</a></li>
                          <li><a href="ecoqube.php">EcoQube</a></li>
                          <li><a href="livestock.php">Livestock</a></li>
                          <li><a href="plants.php">Plants</a></li>
                          <li><a href="accessories.php">Accessories</a></li>
                        </ul>
                        <ul>
                          <li><a href="../services.php">Services</a></li>
                          <li><a href="../services.php#contact">Contact</a></li>
                          <li><a href="../services.php#installations">Installations</a></li>
                          <li><a href="../services.php#maintenance">Maintenance</a></li>
                          <li><a href="../services.php#gallery">Gallery</a></li>
                        </ul>
                        <ul>
                          <li><a href="../about.php">About</a></li>
                          <li><a href="../about.php#ourstory">Our Story</a></li>
                          <li><a href="../about.php/#values">Values</a></li>
                          <li><a href="../about.php/#theteam">The Team</a></li>
                          <li><a href="../about.php/#affiliates">Affiliates</a></li>
                        </ul>
                        <ul>
                          <li><a href="../learn/index.php">Learn</a></li>
                          <li><a href="../blog.php">Blog</a></li>
                          <li><a href="../learn/ecosystems.php">Ecosystems</a></li>
                        </ul>
                        <ul>
                          <li><a href="../faq.php">FAQ</a></li>
                          <li><a href="../faq.php#ecoqube">EcoQube</a></li>
                          <li><a href="../faq.php#shop">Shop</a></li>
                          <li><a href="../faq.php#services">Services</a></li>
                          <li><a href="../faq.php#shipping">Shipping</a></li>
                          <li><a href="../faq.php#warranty">Warranty</a></li>
                        </ul>
                      </div><!-- #footer-sitemap -->
                    </div><!-- #footer-sitemap-container -->
                  </div><!-- #footer-right-col -->

                  <div id="footer-copyright">
                    Aqua Design Innovations 2014 - All Rights Reserved
                  </div><!-- #footer-copyright -->
                </footer>
              </div><!-- #footer-container -->

       <!-- JavaScript code  -->
    <script>

    var DEBUG = false;

    var productOverlay = $("#product-image-overlay");


    //Registers hover over product and calls showOverlay
    $("div.product").mouseover(function() {
      var o = $(this);
      var x = o.offset().left;
      var y = o.offset().top;

      if (DEBUG) {
        console.log("Mouse over product with ID: " + this.id);
        console.log("X: " + x + ", Y: " + y);
      };
      showOverlay(x, y);
    });

    //WHY ISN'T THIS WORKING?????
    /*$("div.product").mouseout(function() {
    console.log("Mouseout");
    //productOverlay.css("display", "none");
    });*/


    //Shows product overlay
    function showOverlay(x, y) {
      if (DEBUG) { console.log("Showing overlay at X: " + x + ", Y: " + y); };

      setX("product-image-overlay", x);
      setY("product-image-overlay", y);
      productOverlay.css("display", "inline-block");
    }


      //Showing products matching selected filtering option and highlighting the selected filter option
      $(".filterOptions").click(function() {
        if (DEBUG) { console.log("Filtering products by " + this.text); };

        var keyword = this.text.toLowerCase();

        if(keyword == "all") {return;}

        highlightFiltered(keyword);

        var products = $(".product").map(function(index) {
          var o = $(this);
          if(o.hasClass(keyword)) {
            o.show();
          } else {
            o.hide();
          }
        });
      });

    </script>

          <!-- Modal window -->
               <script type="text/javascript">
               $(document).ready(function($modalfn) {

               $modalfn('.item-modal').magnificPopup({
               type: 'ajax',
               alignTop: true,
               overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
               });

               });
               </script>

                         <!-- Enable horizontal scroll with fixed header -->
          <script type="text/javascript">
               $(document).ready(function() {
                    $('#header-container').scrollToFixed();
               });
               $(window).scroll();
               $(window).resize();

               $('.side-navbar').scrollToFixed( { limit: 200 } );
          </script>
</body>
</html>
