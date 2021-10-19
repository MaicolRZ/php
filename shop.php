<?php
$dia =date('d/m/y');
$precio = array("item1"=>270, "item2"=>300, "item3"=>320, "item4"=>420, "item5"=>290, "item6"=>375, "item7"=>220,"item8"=>175);
$descuento = array("desc1"=>0.10, "desc2"=>0.20, "desc3"=>0.30, "desc4"=>0.40,);
$readmore = "Leer Mas";
$addtocart = "Add to cart";
$item = array("Item 1","Item 2","Item 3","Item 4","Item 5","Item 6","Item 7","Item 8");
$tienda = "Tienda";
$eventos = "Eventos";
$team = "Team";
$contact = "Contactanos";

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Shop :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="current"><a href="shop.php"><?php echo $tienda?></a></li>
						    	<li><a href="team.php"><?php echo $team?></a></li>
						    	<li><a href="experiance.php"><?php echo $eventos?></a></li>
								<li><a href="contact.php"><?php echo $contact?></a></li>				
                                <li><a href="">Today <?php echo $dia ?> </a></li>						
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				  <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		        <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[0]"?></a></h3>
						<p><?php echo "Contiene un descuento del %",("$descuento[desc1]"*100);?></p>
						<span class="reducedfrom">$<?php echo "$precio[item1]";?></span>
						<span class="actual">$<?php echo  "$precio[item1]"-("$descuento[desc1]"*"$precio[item1]");?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?></a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic6.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[1]"?></a></h3>
						<p><?php echo "Contiene un descuento del % 0";?></p>
						<span class="actual">$<?php echo "$precio[item2]";?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?></a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic7.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[2]"?></a></h3>
						<p><?php echo "Contiene un descuento del %",("$descuento[desc2]"*100);?></p>
						<span class="reducedfrom">$<?php echo "$precio[item3]";?></span>
						<span class="actual">$<?php echo  "$precio[item3]"-("$descuento[desc2]"*"$precio[item3]");?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?></a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic8.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[3]"?></a></h3>
						<p><?php echo "Contiene un descuento del %",("$descuento[desc3]"*100);?></p>
						<span class="reducedfrom">$<?php echo "$precio[item4]";?></span>
						<span class="actual">$<?php echo  "$precio[item4]"-("$descuento[desc3]"*"$precio[item4]");?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?></a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
			</div>
			<div class="row">
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic9.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[4]"?></a></h3>
						<p><?php echo "Contiene un descuento del % 0";?></p>
						<span class="actual">$<?php echo "$precio[item5]";?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?></a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic10.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[5]"?></a></h3>
						<p><?php echo "Contiene un descuento del % 0";?></p>
						<span class="actual">$<?php echo "$precio[item6]";?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?>t</a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic11.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[6]"?></a></h3>
						<p><?php echo "Contiene un descuento del %",("$descuento[desc1]"*100);?></p>
						<span class="reducedfrom">$<?php echo "$precio[item7]";?></span>
						<span class="actual">$<?php echo  "$precio[item7]"-("$descuento[desc1]"*"$precio[item7]");?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?></a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/pic12.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo "$item[7]"?></a></h3>
						<p><?php echo "Contiene un descuento del %",("$descuento[desc3]"*100);?></p>
						<span class="reducedfrom">$<?php echo "$precio[item8]";?></span>
						<span class="actual">$<?php echo  "$precio[item8]"-("$descuento[desc3]"*"$precio[item8]");?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"><?php echo $addtocart?></a></li>
							<li class="shop_btn"><a href="#"><?php echo $readmore?></a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
			</div>
		 </div>
	   </div>
	  </div>
	  <div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Products</h4>
							<li><a href="#">Mens</a></li>
							<li><a href="#">Womens</a></li>
							<li><a href="#">Youth</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="#">Careers and internships</a></li>
							<li><a href="#">Sponserships</a></li>
							<li><a href="#">team</a></li>
							<li><a href="#">Catalog Request/Download</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Customer Support</h4>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Shipping and Order Tracking</a></li>
							<li><a href="#">Easy Returns</a></li>
							<li><a href="#">Warranty</a></li>
							<li><a href="#">Replacement Binding Parts</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
		   					
						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>
			</div>
		</div>
</body>	
</html>