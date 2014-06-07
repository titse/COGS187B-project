<div class="ajax-text-and-image white-popup-block">
  
<style>

.ajax-text-and-image {
max-width:800px;
margin: 20px auto;
background:url("../img/green-cup.png") repeat #fff;
padding: 0;
line-height: 0;
}

.ajcol{
width: 50%;
float:left;
background:url("../img/green-cup.png") repeat #fff;
height:500px;
padding:25px;
margin:25px auto;
}

.ajcol img{
width: 100%;
height: 100%;
box-shadow: 0px 0px 5px rgba(0,0,0,.15);
-webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.15);
-moz-box-shadow: 0px 0px 5px rgba(0,0,0,.15);
-o-box-shadow: 0px 0px 5px rgba(0,0,0,.15);
border: 3px solid rgba(239,239,239,1); 
}

@media all and (max-width:30em){
.ajcol { 
width: 100%;
float:none;
}
}

ul.tabs{
margin: 0;
padding: 0;
float: left;
list-style: none;
width: 100%;
}

ul.tabs li{
float: left;
margin: 0;
cursor: pointer;
border-top: 5px solid #efefef;
border-left: 5px solid #efefef;
border-bottom: 5px solid #efefef;
background-color: #efefef;
color: #000;
overflow: hidden;
position: relative;
text-transform: uppercase;
letter-spacing: 1px;
padding:10px 13px;
}

.tab_last{
border-right: 10px solid #efefef; padding:0 5px;
}

ul.tabs li:hover{
background-color: rgba(0,108,184,.5);
color: #fff;
}

ul.tabs li.active{
background-color: #fff;
color: rgba(0,108,184,1);
border-bottom: 5px solid #fff;
display: block;
font-weight: bold;
letter-spacing: 1px;
}

.tab_container{
border: 5px solid #efefef;
border-top: none;
clear: both;
float: left;
width: 100%;
background: #fff;
overflow: auto;
}

.tab_content{
padding: 25px;
display: none;
letter-spacing: 1px;
color:rgba(0,0,0,1);
line-height: 20px;
}

.tab_drawer_heading{
display: none;
}

@media screen and (max-width: 480px){
.tabs{
display: none;
}

.tab_drawer_heading{
background-color: #ccc;
color: #fff;
border-top: 1px solid #333;
margin: 0;
padding: 5px 20px;
display: block;
cursor: pointer;
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

.d_active{
background-color: 666;
color: #fff;
}
}

*{
font-family:"Helvetica Neue LT Pro Light";
font-size:14px;
}
.item-name{
font-size: 30px;
margin-bottom:25px;
color:rgba(74,74,74,1);
float: left;
font-family:"Helvetica Neue LT Pro Light Extended";
line-height:26px;
}

.item-price{
float:right;
font-size: 26px;
margin-bottom:25px;
color:rgba(74,74,74,1);
font-family:"Helvetica Neue LT Pro Light Extended";
line-height:28px;
}

.item-wt{
clear:both;
}

.item-qty{
float:left;
margin-bottom:40px;
font-size: 16px;
text-transform: uppercase;
}

.item-add{
float:right;
margin-bottom:40px;
}

#num{
border:3px solid #efefef;
width:90px;
padding:5px 10px;
margin-left:10px;
}

#submit{
background-color:rgba(38,160,47,1);
border:none;
box-shadow:2px 2px 2px rgba(0,0,0,.08);
-webkit-box-shadow:2px 2px 2px rgba(0,0,0,.08);
-moz-box-shadow:2px 2px 2px rgba(0,0,0,.08);
-o-box-shadow:2px 2px 2px rgba(0,0,0,.08);
color:rgba(255,255,255,1);
padding:7px 20px;
text-shadow:1px 1px 5px rgba(0,0,0,.75);
text-transform:uppercase;
}
</style>

<div class="ajcol">
<img src="../img/shop/clouded-minnow.jpg"/>
</div>
<div class="ajcol" style="line-height: 1.231;">
<div style="padding: 1em">
<div class="item-name">Cloud Minnow</div>
<div class="item-price">$1.49</div>
<div class="item-wt">
<div class="item-qty">Qty. <input id="num" type="number" name="quantity" min="1" max="50" value="1"></div>
<div class="item-add"><input id="submit" name="submit" type="submit" value="Add to cart" /></div>
</div>
<ul class="tabs">
<li class="active" rel="tab1">Details</li>
<li rel="tab2">Shipping</li>
<li rel="tab3">Warranty</li>
</ul>
<div class="tab_container">
<h3 class="d_active tab_drawer_heading" rel="tab1">Details</h3>
<div id="tab1" class="tab_content">
<p>The species is nearly extinct in its natural habitat of White Cloud Mountain, China. It is bred sustainably in fish farms and has become available through aquarium trade.
<br />Make sure you keep them with other fish so that they do not become reclusive and lose their vibrant colors.</p>
</div>
<h3 class="tab_drawer_heading" rel="tab2">Shipping</h3>
<div id="tab2" class="tab_content">
<p>
We ship out most of our orders on Mondays, Tuesdays, and sometimes Wednesdays. If you order was placed after 2:00PM PST, it will most likely be shipped the following Monday, unless stated otherwise by an email from us.</p>
</div>
<h3 class="tab_drawer_heading" rel="tab3">Warranty</h3>
<div id="tab3" class="tab_content">
<p>We have live arrival guarantee for all of our shipments, so if your fish arrive dead, please send us a picture of the fish as proof to our email: info@aquadesigninnovations.com. Read our shipping policy carefully as it explains what we would do if your fish were to arrive dead.</p>
</div>
</div>
<script>
$(".tab_content").hide();
$(".tab_content:first").show();
$("ul.tabs li").click(function() {
$(".tab_content").hide();
var activeTab = $(this).attr("rel"); 
$("#"+activeTab).fadeIn();    
$("ul.tabs li").removeClass("active");
$(this).addClass("active");
$(".tab_drawer_heading").removeClass("d_active");
$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
});
$(".tab_drawer_heading").click(function() {
$(".tab_content").hide();
var d_activeTab = $(this).attr("rel"); 
$("#"+d_activeTab).fadeIn();
$(".tab_drawer_heading").removeClass("d_active");
$(this).addClass("d_active");
$("ul.tabs li").removeClass("active");
$("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
});
$('ul.tabs li').last().addClass("tab_last");
</script>
</div>
</div>
<div style="clear:both; line-height: 0;"></div>
</div>