<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

	<!-- CSS
  ================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,500,300,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>styles/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>styles/inner.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>styles/layout.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>styles/layerslider.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>styles/color.css" />
    

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />

    
    
</head>


<body>

<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
        	
            
            <header>
            	<div id="top">
                    <div class="container">
                    <div class="row">
                    	<div id="topmenu" class=" six columns">
                            <ul id="topnav">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Bookmark</a></li>
                            </ul>
                        </div>
                        <div id="topright" class="six columns">
                        	<div class="language"> 
                           		Language:  <a href="#"><img src="<?php echo base_url(); ?>images/eng.png" alt=""/></a> <a href="#"><img src="<?php echo base_url(); ?>images/fr.png" alt=""/></a> <a href="#"><img src="<?php echo base_url(); ?>images/gr.png" alt=""/></a>
                            </div>
                        	<div class="currency"> Currency : <a href="#">€</a> <a href="#">£</a> <a href="#">$</a></div>
                        </div>
                    </div>
                    </div>
            	</div>
                
                <div id="logo-wrapper">
                    <div class="container">
                    <div class="row">
                        <div id="logo" class="six columns">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/logo.png" alt=""/></a>

            <?php  $cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             if(empty($cart_check)) {
             //echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
       ?>
       
       <?php
             }  ?>     
              
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?> 
    <?php endif; ?>

<?php
                    $grand_total = 0;
                    $i = 1;
          $qty = 0;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        
                       <?php $i++; ?>
                           
              <!--
                           
                                $ <?php echo number_format($item['price'], 2); ?>
                                <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>                            
              <?php $grand_total = $grand_total + $item['subtotal']; ?>
              <?php $qty = $qty + $item['qty']; ?>
              <?php $total_qty =+ $item['qty']; ?>                          
                                $ <?php echo number_format($item['subtotal'], 2) ?> 
                -->
                     <?php endforeach; ?>  

                            <span class="desc">Best Solution for your business <?php echo $qty; ?></span>
                        </div>
                        <div class="right six columns">              

                            <form id="searchform" name="form_pencarian" method="post" action="<?=base_url();?>search/">
                                <input name="ringkasan" type="text" id="s" style="width:200px" class="field" value="<?php //echo $ringkasan;?>"/>
                                <input name="submit" type="submit" id="submit" class="searchbutton" value="" style="width:15px" />  
                            </form>      
                               
                            <div id="shopping-cart-wrapper">
                                <div id="shopping_cart"><a href="#" id="shop-bag">Cart:(empty)</a><a class="btncart" href="#"></a>
                                    <ul class="shop-box">
                                        <li>
                                            <h2>Product1</h2>
                                            <div class="price">1 x $150.00</div>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <h2>Shipping</h2>
                                            <div class="price">1 x $10.00</div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="total">
                                        	<h2>Total</h2>
                                            <div class="price"> $160.00</div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="btn-wrapper">
                                            <a href="#" class="cart">Cart</a> <a href="#" class="checkout">Checkout</a>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clear"></div>    
                            <div class="login">Welcome Visitor, you can <a href="login.html"><strong>login</strong></a> or <a href="register.html"><strong>create an account</strong></a></div>
    
                        </div>
                    </div>
                    </div>
                </div>
                
                <section id="navigation">
                    <div class="container">
                    <div class="row">

                        <?php $this->load->view('menu-top'); ?>
                    </div>
                    </div>
                </section>
                
                <div class="clear"></div>
            </header>
            
			<div class="headline">
        	<div class="container">
                <div class="row">
                	<div class="twelve columns">
               			<h1> Hey there! We are La'store and We make Awesome eCommerce Themes. <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                    </div>
                </div>
            </div>    
            </div>
            
           
        </div>
        <!-- END HEADER -->
        
        <!-- SLIDER -->
        <div id="outerslider">
        	<div id="slidercontainer">
            
            	<section id="slider">
                    <div id="layerslider" class="slideritems">
                            <div class="ls-layer" id="ls-layer-1" data-rel="slidedelay: 3000;delayout: 750;">
                           
                                <img class="ls-s2" id="ls-s2-1" src="<?php echo base_url(); ?>images/content/sample-1.png" alt="sample-1" title="New Arrival for Electronics" style="durationin: 2000; easingin: easeOutExpo; slidedirection: bottom; delayin: 1000" />
                                <h3 class="ls-s3" id="ls-s3-1" data-rel="durationin: 2000; delayin:1000; easingin: easeOutElastic; slidedirection: bottom;"><a href="#" title="New Arrival for Electronics">New Arrival for Electronics</a></h3>
                                <div class="slidedesc ls-s4" id="ls-s4-1" data-rel="durationin: 2000; delayin:500; slidedirection: top;">Now AvailableMaecenas ac lectus ut justo sollicitudin accumsan quis quis ligula. Donec eu metus et sem aliquet placerat in id lacus. Nam nec arcu vitae justo cursus venenatis id at odio.</div>
                            </div>
                            <div class="ls-layer" id="ls-layer-2" data-rel="slidedelay: 3000;delayout: 750;">
                                
                                <img class="ls-s2" id="ls-s2-2" src="<?php echo base_url(); ?>images/content/sample-2.png" alt="sample-2" title="New Arrival for Furnitures" style="durationin: 2000; easingin: easeOutExpo; slidedirection: bottom; delayin: 1000" />
                                <h3 class="ls-s3" id="ls-s3-2" data-rel="durationin: 2000; delayin:1000; easingin: easeOutElastic; slidedirection: bottom;"><a href="#" title="New Arrival for Furnitures">New Arrival for Furnitures</a></h3>
                                <div class="slidedesc ls-s4" id="ls-s4-2" data-rel="durationin: 2000; delayin:500; slidedirection: top;">Now AvailableMaecenas ac lectus ut justo sollicitudin accumsan quis quis ligula. Donec eu metus et sem aliquet placerat in id lacus. Nam nec arcu vitae justo cursus venenatis id at odio.</div>
                            </div>
                            <div class="ls-layer" id="ls-layer-3" data-rel="slidedelay: 3000;delayout: 750;">
                                
                                <img class="ls-s2" id="ls-s2-3" src="<?php echo base_url(); ?>images/content/sample-3.png" alt="sample-3" title="New Arrival for Accessories" style="durationin: 2000; easingin: easeOutExpo; slidedirection: bottom; delayin: 1000" />
                                <h3 class="ls-s3" id="ls-s3-3" data-rel="durationin: 2000; delayin:1000; easingin: easeOutElastic; slidedirection: bottom;"><a href="#" title="New Arrival for Accessories">New Arrival for Accessories</a></h3>
                                <div class="slidedesc ls-s4" id="ls-s4-3" data-rel="durationin: 2000; delayin:500; slidedirection: top;">Now AvailableMaecenas ac lectus ut justo sollicitudin accumsan quis quis ligula. Donec eu metus et sem aliquet placerat in id lacus. Nam nec arcu vitae justo cursus venenatis id at odio.</div>
                            </div>
                    </div>
                </section>

            </div>
        </div>
        <!-- END SLIDER -->


        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        		
                                <div class="featured-products">  
                                <div class="header-wrapper">
                                    <h2>Featured Products</h2><span></span>
                                    <div class="clear"></div>
                                </div>
                                <div class="row">

            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($products as $product) {
                $id = $product['serial'];
                $name = $product['name'];
                $description = $product['description'];
                $price = $product['price'];
            ?>                                    
                                    <div class="one_fifth columns">
										<div class="product-wrapper">
                                        	<a title="Men's Watch" href="<?php echo base_url(); ?>product/detail/<?php echo $id ?>"><img src="<?php echo base_url() ."upload/produk/". $product['image_name'] ?>" width="80" height="80"/></a>
                                            <h3><a title="Men's Watch" href="#"><?php echo $name; ?></a></h3>
                                            <div class="price-cart-wrapper">
                                            	<div class="price">
                                                	$<?php echo $price; ?>
                                                </div>
                        <?php                            
                            // Create form and send values in 'shopping/add' function.
                            echo form_open('shopping/add');
                            echo form_hidden('id', $id);
                            echo form_hidden('name', $name);
                            echo form_hidden('price', $price);
                            echo form_hidden('description', $description);
                        ?>                                    
                    <input type="hidden" name="qty" value="1" style="width: 75px"/>
                    <div id='add_button'>
                        <?php
                        $btn = array(
                            'class' => 'btn btn-default',
                            'value' => 'cart',
                            'name' => 'action'
                        );
                        
                        // Submit Button.
                        ?>

                        <!--<a href="<?php echo base_url(); ?>index.php/shopping/product_view/<?php //echo $id; ?>">
                        <!-- <input type="button" class ='btn btn-info' value="View cart"> -->
                        <!--</a> -->
                        <?php
                                        //$path = "<img src='http://localhost/php_ci_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                                        //echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
                        <?php                       
                        echo form_submit($btn);                
                        //echo '<a href="'.base_url().'product/detail/'.$id.'" class="more">more</a>';
                        echo form_close();
                        ?>
                     </div>
                    <!--
                    <div class="cart">
                        <a href="<?php echo base_url(); ?>product-detail/<?php echo $id ?>" class="more">more</a> | <a href="#" class="buy">buy</a>
                    </div>
                    -->
                   
                             
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
             <?php } ?>
                                    
                                </div>
                                </div>
                                
                                <div class="row">
                                	<div class="one_third columns"><img src="<?php echo base_url(); ?>images/content/EasyCustomize.jpg" alt="" class="border"/></div>
                                    <div class="one_third columns"><img src="<?php echo base_url(); ?>images/content/AwesomeAdmin.jpg" alt="" class="border"/></div>
                                    <div class="one_third columns"><img src="<?php echo base_url(); ?>images/content/sofaAwesome.jpg" alt="" class="border"/></div>
                                </div> 
                                
                                <div class="new-products">                 
                                <div class="header-wrapper">
                                    <h2>Recently Added</h2><span></span>
                                    <div class="clear"></div>
                                </div>            
                            	<div class="row">
                                    <div class="one_fifth columns">
										<div class="product-wrapper">
                                        	<a title="Woman's Dress Flower" href="product-details.html"><img src="<?php echo base_url(); ?>images/content/products/p-1.jpg" alt=""/></a>
                                            <h3><a title="Woman's Dress Flower" href="product-details.html">Woman's Dress Flower</a></h3>
                                            <div class="price-cart-wrapper">
                                            	<div class="price">
                                                	$120.00
                                                </div>
                                                <div class="cart">
                                                	<a href="product-details.html" class="more">more</a> | <a href="#" class="buy">buy</a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one_fifth columns">
										<div class="product-wrapper">
                                        	<a title="White Lamp" href="product-details.html"><img src="<?php echo base_url(); ?>images/content/products/p-17.jpg" alt=""/></a>
                                            <h3><a title="White Lamp" href="product-details.html">White Lamp</a></h3>
                                            <div class="price-cart-wrapper">
                                            	<div class="price">
                                                	$120.00
                                                </div>
                                                <div class="cart">
                                                	<a href="product-details.html" class="more">more</a> | <a href="#" class="buy">buy</a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one_fifth columns">
										<div class="product-wrapper">
                                        	<a title="iPhone 4S for Gift" href="product-details.html"><img src="<?php echo base_url(); ?>images/content/products/p-23.jpg" alt=""/></a>
                                            <h3><a title="iPhone 4S for Gift" href="product-details.html">iPhone 4S for Gift</a></h3>
                                            <div class="price-cart-wrapper">
                                            	<div class="price">
                                                	$120.00
                                                </div>
                                                <div class="cart">
                                                	<a href="product-details.html" class="more">more</a> | <a href="#" class="buy">buy</a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one_fifth columns">
										<div class="product-wrapper">
                                        	<a title="Couple Shoes" href="product-details.html"><img src="<?php echo base_url(); ?>images/content/products/p-26.jpg" alt=""/></a>
                                            <h3><a title="Couple Shoes" href="product-details.html">Couple Shoes</a></h3>
                                            <div class="price-cart-wrapper">
                                            	<div class="price">
                                                	$120.00
                                                </div>
                                                <div class="cart">
                                                	<a href="product-details.html" class="more">more</a> | <a href="#" class="buy">buy</a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one_fifth columns">
										<div class="product-wrapper">
                                        	<a title="Brown Chair" href="product-details.html"><img src="<?php echo base_url(); ?>images/content/products/p-18.jpg" alt=""/></a>
                                            <h3><a title="Brown Chair" href="product-details.html">Brown Chair</a></h3>
                                            <div class="price-cart-wrapper">
                                            	<div class="price">
                                                	$120.00
                                                </div>
                                                <div class="cart">
                                                	<a href="product-details.html" class="more">more</a> | <a href="#" class="buy">buy</a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
								<div class="row">
                                	<div class="one_half columns"><img src="<?php echo base_url(); ?>images/content/FlexibleLayout.png" alt=""/></div>
                                    <div class="one_half columns"><img src="<?php echo base_url(); ?>images/content/WellDocumented.png" alt=""/></div>
                                </div>
                            
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        
        <!-- FOOTER -->
        <footer id="footer">
            <div id="carousel"  class="es-carousel-wrapper">
                <div class="es-carousel">
                    <ul>
                        <li><a title="Audio Jungle"  href="#"><img alt="Audio Jungle" src="<?php echo base_url(); ?>images/content/audiojungle.png"></a></li>
                        <li><a title="Active Den"  href="#"><img alt="Active Den" src="<?php echo base_url(); ?>images/content/activeden.png"></a></li>
                        <li><a title="Graphic River"  href="#"><img alt="Graphic River" src="<?php echo base_url(); ?>images/content/graphicriver.png"></a></li>
                        <li><a title="Photo Dune"  href="#"><img alt="Photo Dune" src="<?php echo base_url(); ?>images/content/photodune.png"></a></li>
                        <li><a title="Theme Forest"  href="#"><img alt="Theme Forest" src="<?php echo base_url(); ?>images/content/themeforest.png"></a></li>
                        <li><a title="Video Hive"  href="#"><img alt="Video Hive" src="<?php echo base_url(); ?>images/content/videohive.png"></a></li>
                        <li><a title="Audio Jungle"  href="#"><img alt="Audio Jungle" src="<?php echo base_url(); ?>images/content/audiojungle.png"></a></li>
                        <li><a title="Active Den"  href="#"><img alt="Active Den" src="<?php echo base_url(); ?>images/content/activeden.png"></a></li>
                        <li><a title="Graphic River"  href="#"><img alt="Graphic River" src="<?php echo base_url(); ?>images/content/graphicriver.png"></a></li>
                        <li><a title="Photo Dune"  href="#"><img alt="Photo Dune" src="<?php echo base_url(); ?>images/content/photodune.png"></a></li>
                        <li><a title="Theme Forest"  href="#"><img alt="Theme Forest" src="<?php echo base_url(); ?>images/content/themeforest.png"></a></li>
                        <li><a title="Video Hive"  href="#"><img alt="Video Hive" src="<?php echo base_url(); ?>images/content/videohive.png"></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <!-- FOOTER SIDEBAR -->
            <div id="outerfootersidebar">
                <div class="container">
                    <div id="footersidebar" class="row"> 

                        <div id="footcol1"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Information</h2>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms &amp; Condition</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol2"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Customer Services</h2>
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol3"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">My Account</h2>
                                    <ul>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol4"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Extras</h2>
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                        <li><a href="#">Specials</a></li>
                                    </ul>
                              </li>
                            </ul>
                        </div>
                        <div id="footcol5"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Contact Us</h2>
									<div class="textwidget">
                                        Telp: +62 500 800 123<br>
                                        Fax: +62 500 800 112<br>
                                        <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                                    </div>
                              </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                 
                    </div>
                </div>
            </div>
            <!-- END FOOTER SIDEBAR -->
            
            <!-- COPYRIGHT -->
            <div id="outercopyright">
                <div class="container">
                    <div id="copyright">
                    	Copyright &copy;2012. All Rights Reserved. Theme design by <a href="http://templatesquare.com">TemplateSquare.com</a>
                    </div>
                    <ul class="sn">
                        <li><a href="http://twitter.com" title="Twitter"><span class="icon-img twitter"></span></a></li>
                        <li><a href="http://facebook.com" title="Facebook"><span class="icon-img facebook"></span></a></li>
                        <li><a href="https://plus.google.com" title="Google+"><span class="icon-img google"></span></a></li>
                        <li><a href="http://amazon.com" title="Amazon"><span class="icon-img amazon"></span></a></li>
                        <li><a href="http://pinterest.com" title="Pinterest"><span class="icon-img pinterest"></span></a></li>
                    </ul> 
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </footer>
        <!-- END FOOTER -->
        <div class="clear"></div><!-- clear float --> 
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>

<!-- jQuery Superfish -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/hoverIntent.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/superfish.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/supersubs.js"></script>

<!-- jQuery Carosel Slider -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.elastislide.js"></script>
<script type="text/javascript">
	jQuery('#carousel').elastislide({
		imageW 	: 135,
		margin      : 12
	});
</script>

<!-- jQuery Dropdown Mobile -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/tinynav.min.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>

<!-- jQuery Layerslider -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-easing-1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/layerslider.js"></script>
<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('#layerslider.slideritems').layerSlider({
		skinsPath : '<?php echo base_url(); ?>images/layerslider-skins/',
		skin : 'lastore',
		autoStart : true
	});
	jQuery('.ls-nav-prev').fadeOut();
	jQuery('.ls-nav-next').fadeOut();
	jQuery('#layerslider.slideritems').mouseleave(function(){
		jQuery('.ls-nav-prev').fadeOut();
		jQuery('.ls-nav-next').fadeOut();
	});
	jQuery('#layerslider.slideritems').mouseenter(function(){
		jQuery('.ls-nav-prev').fadeIn();
		jQuery('.ls-nav-next').fadeIn();
	});
});
</script>	


</body>
</html>