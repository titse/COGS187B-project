<!DOCTYPE html>
<html>
     <head>
          <!-- Add this to the <head> -->
               <!-- <link rel="stylesheet" href="../liquidslider-master/css/animate.css"> --> <!-- Optional -->
               <link rel="stylesheet" href="../liquidslider-master/css/liquid-slider.css">
          <!-- Add these to the <head> or the <footer> -->
               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
               <script src="../liquidslider-master/js/jquery.easing.1.3.js"></script>
               <script src="../liquidslider-master/js/jquery.touchSwipe.min.js"></script>
               <script src="../liquidslider-master/js/jquery.liquid-slider.min.js"></script>

          <script>
               /* If installing in the footer, you won't need $(function() {} */
               $(function($){
                    $('#slider-id').liquidSlider({   
includeTitle:false,
  slideEaseFunction:'animate.css',
  animateIn:"fadeIn",
  animateOut:"bounceOutRight"
});
               });
          </script>
     </head>
     <style>
          .modal-video{
               background-color:rgba(255,255,255,1);
               height:500px;
               font-size:1.1em;
               margin:50px auto;
               padding:2em;
               /*text-align:center;*/
               width:853px;
          }

          .smaller{
               width:50px;
          }

          .left{
               float:left;
          }

          .left img{
               border:1px solid black;
               padding:.5em;
               height:auto;
               width:75%;
          }

          .right{
               float:right;
          }

          .item-name{;
               font-family:"Helvetica Neue LT Pro Thin Extended";
               font-size:1.8em;
          }

          .liqslider{
               padding-top:2em;
               width:350px;
          }


.but{
     padding-top:2em;
}

          a.button {
   display: -moz-inline-stack;
   display: inline-block;
   width: 157px;
   height: 39px;
   background: url("http://dabuttonfactory.com/b.png?t=Add%20to%20cart&f=sans-serif&ts=24&tc=ffffff00&tshs=1&tshc=00000000&it=png&c=0&bgt=unicolored&bgc=26a02e&hp=20&vp=11") no-repeat;
   line-height: 39px;
   vertical-align: text-middle;
   text-align: center;
   color: #ffffff;
   font-size: 1.1em;
   font-weight: normal;
   font-style: normal;
   text-shadow: #000000 1px 1px 0;
   text-transform:uppercase;
}
a.button > span {
   display: -moz-inline-block;
}

.left-bot{
     padding-top:2em;
}

.left-bot img{
width:100px;
border:1px solid black;
}

.left-bot img:hover{
     opacity:.5;
}
     }
     </style>
     <body>
<div class="modal-window-content">
     
     <div class="modal-video">
          <div class="left">
               <img src="../img/products/test-product-image.png" />
               <div class="left-bot">
               <img src="../img/products/test-product-image.png" />
               <img src="../img/products/test-product-image.png" />
               <img src="../img/products/test-product-image.png" />
          </div></div>
          <div class="right">
               <div class="item-name">Cloud Minnow&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$4.99</div>
               <div class="but">
                    Qty:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php" class="button">Add to cart</a>
               </div>

               <div class="liqslider">
                    <div class="liquid-slider" id="slider-id">
                         <div>
                              <h2 class="title">Description</h2>
                              <div class="inner">This is where an item description will go.
                                   Information about the fish, the type it is, whether it is EcoQube-recommended, the environment in can live in, compatible fish and plants.</div>
                         </div>
                         <div>
                              <h2 class="title">Shipping</h2>
                              Shipping information goes here.<br />
                              Ex. where they ship from, estimated shipping, international shipping.
                         </div>
                         <div>
                              <h2 class="title">Warranty</h2>
                              Warranty information goes here.<br />
                              Ex. what to do if the fish is dead upon delivery, returns, extended warranties.
                         </div>
                    </div>
               </div>


          </div>
     </div>
</div>
</body>
</html>