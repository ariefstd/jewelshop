<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from diana.html.themeplayers.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:47:53 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Macaroon -Creative Patisserie HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Diana - Creative Shop Template</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/select2.css">

   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->


    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
</head>


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

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
    <nav class="ct-menuMobile">
        <ul class="ct-menuMobile-navbar">
            <li class="dropdown">
                <a href="#"><i class="fa fa-home fa-fw"></i> Home</a>
                <ul class="dropdown-menu">
                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Home v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-angle-right fa-fw"></i> Home v2</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Pages</a>
<ul class="dropdown-menu">
                    <li><a href="about-us.html"><i class="fa fa-angle-right fa-fw"></i> About Us</a></li>
                    <li><a href="our-mission.html"><i class="fa fa-angle-right fa-fw"></i> Our Mission</a></li>
                    <li><a href="testimonials.html"><i class="fa fa-angle-right fa-fw"></i> Testimonials</a></li>
                    <li><a href="pricing.html"><i class="fa fa-angle-right fa-fw"></i> Pricing</a></li>
                    <li><a href="our-services.html"><i class="fa fa-angle-right fa-fw"></i> Our services</a></li>
                    <li><a href="our-team.html"><i class="fa fa-angle-right fa-fw"></i> Our Designers</a></li>
                    <li><a href="faq.html"><i class="fa fa-angle-right fa-fw"></i> FAQ</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-dot-circle-o fa-fw"></i> Products</a>
                <ul class="dropdown-menu">
                    <li><a href="paypal-shop-page.html"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                    <li><a href="collections.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                                                    <li><a href="collections2.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                    <li><a href="collections-list.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                    <li><a href="single-product.html"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                    <li><a href="collections-no-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-list-ol fa-fw"></i> TOP 5 Manufacturers</a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> DaVonna</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Miadora</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Disney</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Molly and Emma</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Junior Jewels</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-image fa-fw"></i> Portfolio</a>
                <ul class="dropdown-menu">
                    <li><a href="portfolio-masonry.html"><i class="fa fa-angle-right fa-fw"></i> Masonry Default</a></li>
                    <li><a href="portfolio-masonry-column1.html"><i class="fa fa-angle-right fa-fw"></i> Masonry 1 Column</a></li>
                    <li><a href="portfolio-masonry-column2.html"><i class="fa fa-angle-right fa-fw"></i> Masonry 2 Columns</a></li>
                    <li><a href="portfolio-masonry-column3.html"><i class="fa fa-angle-right fa-fw"></i> Masonry 3 Columns</a></li>
                    <li><a href="portfolio-left-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Simple Left Sidebar</a></li>
                    <li><a href="portfolio-right-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Simple Right Sidebar</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Blog</a>
                <ul class="dropdown-menu">
                    <li><a href="blog.html"><i class="fa fa-angle-right fa-fw"></i> Blog Default</a></li>
                    <li><a href="blog-wide.html"><i class="fa fa-angle-right fa-fw"></i> Blog Wide</a></li>
                    <li><a href="blog-full-width.html"><i class="fa fa-angle-right fa-fw"></i> Blog Full Width</a></li>
                    <li><a href="blog-left-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Blog Left Sidebar</a></li>
                    <li><a href="blog-masonry.html"><i class="fa fa-angle-right fa-fw"></i> Blog 2 Columns</a></li>
                </ul>
            </li>
            <li><a href="contact.html"><i class="fa fa-phone-square fa-fw"></i> Contact</a></li>
        </ul>
    </nav>

    <div class="ct-shopMenuMobile">
        <!-- Language Dropdown -->
        <div class="btn-group">
            <button type="button" class="btn btn-white btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                EN <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">FR</a></li>
                <li><a href="#">ES</a></li>
                <li><a href="#">DE</a></li>
                <li><a href="#">PT</a></li>
            </ul>
        </div>
        <!-- Currency Dropdown -->
        <div class="btn-group">
            <button type="button" class="btn btn-white btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                $ <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">EUR €</a></li>
                <li><a href="#">GBP £</a></li>
            </ul>
        </div>
        <nav class="ct-shopMenuMobile-navbar">
            <ul class="list-unstyled">
                <li><a href="login.html"><i class="fa fa-user fa-fw"></i> Login</a></li>
                <li><a href="create-account.html"><i class="fa fa-pencil fa-fw"></i> Create an account</a></li>
                <li><a href="my-account.html"><i class="fa fa-cog fa-fw"></i> My Account</a></li>
                <li><a href="wishlist.html"><i class="fa fa-edit fa-fw"></i> Wishlist</a></li>
                <li><a href="checkout.html"><i class="fa fa-archive fa-fw"></i> Checkout</a></li>
            </ul>
        </nav>
        <div class="ct-shopMenuMobile-basket">
            <a href="my-cart.html"><i class="fa fa-shopping-cart fa-fw"></i> My Basket <span class="ct-topBar-basket-quantity">(3 items)</span></a>
            <div class="ct-shopMenuMobile-basketContainer">
                <ul class="ct-shopMenuMobile-basketProducts list-unstyled">
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="single-product.html">
                            <img class="pull-left" src="<?php echo base_url() ?>images/mobile-shop-cart-ring1.png" alt="">
                            <div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle">Round Pave' Color Diamon Ring, Sterling, 1/4 cttw</div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">$167.00</div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="single-product.html">
                            <img class="pull-left" src="<?php echo base_url() ?>images/mobile-shop-cart-ring2.png" alt="">
                            <div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle">Barbara Bixby Sterling 18K Gold Citrine or Pink</div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">$290.99</div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
                <div class="ct-shopMenuMobile-basketWrap ct-shopMenuMobile-subTotal ct-fw-600">
                    <div class="pull-left text-uppercase">Subtotal</div>
                    <div class="pull-right">$457.99</div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <!-- navbar + logo menu -->
        <div class="ct-navbarMobile">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-2.html"><img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo"> </a>
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        <!-- TOPBAR -->
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">
                    <ul class="list-unstyled">
                        <!-- <li><i class="fa fa-fw fa-phone"></i> Call us: (012) 345-6789</li> -->
                        <li><a href="<?php echo base_url() ?>administratoris/"><i class="fa fa-fw fa-user"></i> Login</a></li>
                        <li><a href="<?php echo base_url() ?>register/"><i class="fa fa-fw fa-pencil"></i> Register</a></li>
                    </ul>
                </div>
                <div class="pull-right">
                    <div class="ct-topBar-basket">
                    <?php
                        // All values of cart store in "$cart". 
                        if ($cart = $this->cart->contents()): ?>                    
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    //echo form_open('cart/update_cart');
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        //echo '<input type="text" name="cart[1][id]" value="'.$item['name'].'" />';
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                       
                            <?php
                                $this->db->where('serial', $item['id']);
                                $query = $this->db->get('property');
                                foreach ($query->result() as $row)
                                {
                            ?>
                       
                            <?php } ?>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <?php endforeach; ?>
                        <?php endif; ?>                       
                        <a href="#"><span class="ct-topBar-basket-cart"><i class="fa fa-fw fa-shopping-cart"></i> Cart: </span><span class="ct-topBar-basket-quantity"><?php echo $qty; ?> item(s)</span><span class="ct-topBar-basket-price"> - $<?php echo number_format($grand_total, 2); ?></span></a>
                                <div class="ct-topBar-basket-info">

                <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                    
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    echo form_open('cart/update_cart');
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        //echo '<input type="text" name="cart[1][id]" value="'.$item['name'].'" />';
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                       
                            <?php
                                $this->db->where('serial', $item['id']);
                                $query = $this->db->get('property');

                                foreach ($query->result() as $row)
                                {
                            ?>

                            <div class="ct-cartItem">
                                <a href="single-product.html">
                                    <div class="ct-cartItem-image pull-left">
                                        <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
                                    </div>
                                    <div class="ct-cartItem-title">
                                        <?php echo $item['name']; ?>
                                    </div>
                                    <div class="ct-cartItem-price">
                                        $<?php echo number_format($item['price'], 2); ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>

                            <?php } ?>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            
                        <?php endforeach; ?>
                        <?php echo form_close(); ?>
                        <?php endif; ?>

                            
                            <div class="ct-cartSubtotal">
                                <div class="pull-left ct-fw-600">Subtotal</div>
                                <div class="pull-right ct-fw-600">$<?php echo number_format($grand_total, 2); ?></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ct-cartGoNext text-uppercase ct-u-paddingBoth20">
                                <a class="btn btn-default ct-u-width-49pc" href="<?php echo base_url(); ?>mycart/" role="button">View Cart <i class="fa fa-angle-double-right fa-fw"></i></a>
                                <a class="btn btn-default pull-right ct-u-width-49pc" href="<?php echo base_url(); ?>cart/" role="button">Checkout <i class="fa fa-angle-double-right fa-fw"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            EN <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">FR</a></li>
                            <li><a href="#">ES</a></li>
                            <li><a href="#">DE</a></li>
                            <li><a href="#">PT</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            $ <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">EUR €</a></li>
                            <li><a href="#">GBP £</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ct-headerWrapper ct-u-paddingBottom40 ct-u-marginBottom40">
            <div class="container">

                <div class="ct-header ct-header--default ct-u-paddingTop30 ct-u-paddingBottom50">
                    <div class="ct-header-navigation">
                        <ul class="list-unstyled list-inline">
                            <li><a href="<?php echo base_url() ?>mycart/">My Account</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="<?php echo base_url() ?>cart/">Checkout</a></li>
                        </ul>
                    </div>
                    <div class="ct-header-logo">
                        <a href="index-2.html">
                            <img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo">
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar yamm">
                <div class="container">
                    <ul class="nav navbar-nav ct-navbar--fadeIn">
                        <li class="dropdown">
                            <a href="index-2.html">Home</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Home Pages</strong>
                                                    <br><small>Select your homepage</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Home - v1</a></li>
                                                    <li><a href="index2.html"><i class="fa fa-angle-right fa-fw"></i> Home - v2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Headers</strong>
                                                    <br><small>Select your header</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-paralax.html"><i class="fa fa-angle-right fa-fw"></i> Parallax</a></li>
                                                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Slider</a></li>
                                                    <li><a href="index-video.html"><i class="fa fa-angle-right fa-fw"></i> Video</a></li>
                                                    <li><a href="index-logo-left.html"><i class="fa fa-angle-right fa-fw"></i> Logo Left</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Menu/Top bars</strong>
                                                    <br><small>Select your bar</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-black-menu.html"><i class="fa fa-angle-right fa-fw"></i> Black Menu</a></li>
                                                    <li><a href="index-grey-top.html"><i class="fa fa-angle-right fa-fw"></i> Grey Top</a></li>
                                                    <li><a href="index-both-colour.html"><i class="fa fa-angle-right fa-fw"></i> Menu/Top Colour</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="<?php echo base_url() ?>collection">Collections</a>
                            <!--        We need here padding-bottom 0 to display properly the image inside this content. Please, don't change paddingBottom.        -->
                            <ul class="dropdown-menu ct-u-paddingBottom0">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Products</strong><br><small>Jewellery</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="paypal-shop-page.html"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                                                    <li><a href="collections.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                                                    <li><a href="collections2.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                                                    <li><a href="collections-list.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                                                    <li><a href="single-product.html"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                                                    <li><a href="collections-no-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Shop Pages</strong><br><small>Shopping</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart.html"><i class="fa fa-angle-right fa-fw"></i> Cart</a></li>
                                                    <li><a href="checkout.html"><i class="fa fa-angle-right fa-fw"></i> Checkout</a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-angle-right fa-fw"></i> Wishlist</a></li>
                                                    <li><a href="create-account.html"><i class="fa fa-angle-right fa-fw"></i> Register</a></li>
                                                    <li><a href="login.html"><i class="fa fa-angle-right fa-fw"></i> Login</a></li>
                                                    <li><a href="lost-password.html"><i class="fa fa-angle-right fa-fw"></i> Lost Password</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 hidden-sm">
                                                <div class="ct-collectionRightPicture">
                                                    <img src="<?php echo base_url() ?>images/main-menu-collection-right-bg.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="about-us.html">Pages</a>
 <ul class="dropdown-menu text-uppercase">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="our-mission.html">Our Mission</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="our-services.html">Our Services</a></li>
                        <li><a href="our-team.html">Our Designers</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                        </li>
                                                <li class="dropdown">
                            <a href="portfolio-masonry.html">Lookbook</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                    <a href="portfolio-masonry.html">Masonry <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-masonry.html">Default</a></li>
                                        <li><a href="portfolio-masonry-column1.html">1 Column</a></li>
                                        <li><a href="portfolio-masonry-column2.html">2 Columns</a></li>
                                        <li><a href="portfolio-masonry-column3.html">3 Columns</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="portfolio-right-sidebar.html">Right Sidebar</a></li>
                            </ul>
                        </li>
                                                <li class="dropdown">
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                     <a href="blog-full-width.html">Full Width <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-wide.html">Left Image</a></li>
                                        <li><a href="blog-full-width.html">Top Image</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog.html">Right Sidebar</a></li>
                                <li><a href="blog-masonry.html">2 Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <div id="ct-js-navSearch" class="ct-navbar-navSearch navbar-search pull-right">
                        <i class="fa fa-fw fa-search"></i>
                    </div>
                    <div class="ct-navbar-search">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Please type keywords..." required>
                            </div>
                            <button class="ct-navbar-search-button" type="submit">
                                <i class="fa fa-search fa-fw"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <div class="ct-contentWrapper">


            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Already a Member? <span class="ct-u-colorGrey">Login</span></h4>
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">It's Easy...</div>
                        
                        <form class="form-horizontal form-signin ct-u-paddingBottom20" method="post" action="<?php echo base_url(); ?>admin/login/validate_credentials/">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Email: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="email_address" placeholder="Email" class="form-control" id="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="pull-left ct-rememberPassword">
                                        <div class="checkbox">
                                            <input type="checkbox" id="rememberPassword" name="remember_me">
                                            <label for="rememberPassword">
                                                <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Remember my password</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="pull-right ct-forgotPassword">
                                        <a href="lost-password.html" class="ct-forgotPassword-text">Lost your Password?</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10"> 
                                <?php
                                    if(isset($message_error) && $message_error){
                                        echo '<div class="alert alert-error">';
                                          echo '<a class="close" data-dismiss="alert">×</a>';
                                          echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
                                        echo '</div>';             
                                    }
                                ?>                                   
                                    <input type="submit" name="submit" value="Login" class="btn btn-large btn-default" />
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-4">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Follow Us</h4>
                        <div class="ct-u-paddingBottom20 ct-u-paddingTop30">
                            <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                  <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                            </ul>
                        </div>
                        <div class="tweets_display">

                        </div>
                    </div>
                </div>
            </div>



            <!-- PreFOOTER -->
            <div class="container">
                <div class="ct-dividedSection ct-u-paddingTop60">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="ct-dividedSection-left">
                                <h3>Sign up for our newsletter</h3>
                                <div class="ct-contactForm">
                                    <div class="successMessage alert alert-success" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Thank You!
                                    </div>
                                    <div class="errorMessage alert alert-danger" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Ups! An error occured. Please try again later.
                                    </div>
                                    <form class="validateIt"  method="post" action="http://diana.html.themeplayers.net/form/send.php" role="form" data-email-subject="Contact Form" data-show-errors="true">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Your Email Address" required name="field[]">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-fw fa-long-arrow-right"></i></button>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="ct-dividedSection-right">
                                <img src="<?php echo base_url() ?>images/prefooter-diamond.png" class="text-right pull-left" alt="Diamond Ring">
                                <h3 class="text-uppercase text-right">Have a jewelry inquiry?</h3>
                                If you have any  questions regarding our jeweleries please <a href="#">contact us directly</a> or use our contact form to get in touch.
                                <div class="ct-dividedSection-right-triangle hidden-sm hidden-xs"></div>
                            </div>
                        </div>
                    </div>
                    <div class="ct-tooltips text-center ct-u-paddingTop50 ct-u-paddingBottom40">
                        <ul class="list-unstyled list-inline">
                            <li data-toggle="tooltip" title="75,000+ customers trusted us to create their rings."><i class="fa fa-heart fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Pay by cash, credit card, bank transfer or store."><i class="fa fa-dollar fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Fully protected, all payments secured."><i class="fa fa-lock fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Double guarantee for gold and diamonds."><i class="fa fa-certificate fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="24/7 support at your service."><i class="fa fa-headphones fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Latest news collections directly on your email."><i class="fa fa-envelope fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Free & easy returns in 48h."><i class="fa fa-circle-o-notch fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Free Delivery and Assurance."><i class="fa fa-truck fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Your data is fully protected."><i class="fa fa-folder fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Find your measurements for your ring."><i class="fa fa-pencil-square-o fa-fw fa-6x"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="ct-footer ct-u-paddingTop210 ct-u-paddingBottom90">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="ct-footer-image">
                            <img src="<?php echo base_url() ?>images/footer-necklace.png" alt="Golden Necklace">
                        </div>
                    </div>
                                        <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">Customer service</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="#">Free Shipping</a></li>
                                <li><a href="#">30-Day Returns</a></li>
                                <li><a href="#">Special Orders</a></li>
                                <li><a href="#">Free Gift Packaging</a></li>
                                <li><a href="#">Jewellery Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">About Diana Jewellery</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="our-mission.html">Our Mission</a></li>
                                <li><a href="blog.html">In the news</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18 ct-u-paddingBottom20">Connect With Us</h5>
                        <ul class="ct-socials ct-socials--large ct-socials--white list-inline list-unstyled">
                              <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                            <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="ct-u-bottomFooterBar ct-u-paddingTop40 ct-u-marginTop50">
                        <div class="col-sm-6">
                            <div class="ct-rights">
                                <a href="http://www.createit.pl/">createIT</a> © Copyright 2015
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ct-iconPayments pull-right">
                                <ul class="list-inline list-unsyled">
                                    <li><i class="fa fa-cc-visa fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-mastercard fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-discover fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-amex fa-fw fa-2x"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScripts files -->

    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>

    <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url() ?>js/device.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.browser.min.js"></script>
    <script src="<?php echo base_url() ?>js/snap.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.appear.js"></script>

    <script src="<?php echo base_url() ?>plugins/headroom/headroom.js"></script>
    <script src="<?php echo base_url() ?>plugins/headroom/jQuery.headroom.js"></script>
    <script src="<?php echo base_url() ?>plugins/headroom/init.js"></script>

    <script src="<?php echo base_url() ?>form/js/contact-form.js"></script>

    <script src="<?php echo base_url() ?>js/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>js/stacktable/stacktable.js"></script>

    <script src="<?php echo base_url() ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url() ?>js/elevate-zoom/init.js"></script>
    <script src="<?php echo base_url() ?>js/main.js"></script>

    <script src="<?php echo base_url() ?>twitter/js/jquery.tweet.js"></script>   

</body>

<!-- Mirrored from diana.html.themeplayers.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:47:53 GMT -->
</html>