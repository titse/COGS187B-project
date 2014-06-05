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
               height:550px;
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
               border: 5px solid rgba(239,239,239,1);
            box-shadow: 0px 0px 5px rgba(0,0,0,.15);
            -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.15);
            -moz-box-shadow: 0px 0px 5px rgba(0,0,0,.15);
            -o-box-shadow: 0px 0px 5px rgba(0,0,0,.15);
               /*padding:.5em;*/
               height:350px;
               width:350px;
          }

          .left-bot img{
            border: 5px solid rgba(239,239,239,1);
            height:100px;
            width:100px;
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
     margin:0 auto;
     width:350px;
     text-align:center;
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
               <img src="../img/shop/clouded-minnow.jpg" />
               <div class="left-bot">
               <img src="../img/shop/clouded-minnow.jpg" />
               <img src="../img/shop/clouded-minnow.jpg" />
               <img src="../img/shop/clouded-minnow.jpg" />
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