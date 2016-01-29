<?php $email = $this->session->userdata('email_address'); ?>
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from diana#.themeplayers.net/create-account# by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:47:53 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Macaroon -Creative Patisserie HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Jewel of Equator</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/select2.css">
    
    <script src='https://www.google.com/recaptcha/api.js'></script>

   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->


    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script>
    function sameAsAbove(){    
      if($('#sameas').is(":checked")) {
            $("#s_fname").val($("#b_fname").val());
            $("#s_lname").val($("#b_lname").val());
            $("#s_email").val($("#b_email").val());
            $("#s_phone").val($("#b_phone").val());
            $("#s_address").val($("#b_address").val());
            $("#s_city").val($("#b_city").val());
            $("#s_zip").val($("#b_zip").val());
            $("#s_country").val($("#b_country").val());
            
          }
          else{
            $("#s_fname").val('');
            $("#s_lname").val('');
            $("#s_phone").val('');
            $("#s_address").val('');
            $("#s_city").val('');
            $("#s_zip").val('');
            $("#s_country").val('');           
          }       
    }    
    </script>

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
                    <li><a href="index-2#"><i class="fa fa-angle-right fa-fw"></i> Home v1</a></li>
                    <li><a href="index2#"><i class="fa fa-angle-right fa-fw"></i> Home v2</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Pages</a>
            <ul class="dropdown-menu">
                    <li><a href="about-us#"><i class="fa fa-angle-right fa-fw"></i> About Us</a></li>
                    <li><a href="our-mission#"><i class="fa fa-angle-right fa-fw"></i> Our Mission</a></li>
                    <li><a href="testimonials#"><i class="fa fa-angle-right fa-fw"></i> Testimonials</a></li>
                    <li><a href="pricing#"><i class="fa fa-angle-right fa-fw"></i> Pricing</a></li>
                    <li><a href="our-services#"><i class="fa fa-angle-right fa-fw"></i> Our services</a></li>
                    <li><a href="our-team#"><i class="fa fa-angle-right fa-fw"></i> Our Designers</a></li>
                    <li><a href="faq#"><i class="fa fa-angle-right fa-fw"></i> FAQ</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-dot-circle-o fa-fw"></i> Products</a>
                <ul class="dropdown-menu">
                    <li><a href="paypal-shop-page#"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                    <li><a href="collections#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                    <li><a href="collections2#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                    <li><a href="collections-list#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                    <li><a href="single-product#"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                    <li><a href="collections-no-sidebar#"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
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
                    <li><a href="portfolio-masonry#"><i class="fa fa-angle-right fa-fw"></i> Masonry Default</a></li>
                    <li><a href="portfolio-masonry-column1#"><i class="fa fa-angle-right fa-fw"></i> Masonry 1 Column</a></li>
                    <li><a href="portfolio-masonry-column2#"><i class="fa fa-angle-right fa-fw"></i> Masonry 2 Columns</a></li>
                    <li><a href="portfolio-masonry-column3#"><i class="fa fa-angle-right fa-fw"></i> Masonry 3 Columns</a></li>
                    <li><a href="portfolio-left-sidebar#"><i class="fa fa-angle-right fa-fw"></i> Simple Left Sidebar</a></li>
                    <li><a href="portfolio-right-sidebar#"><i class="fa fa-angle-right fa-fw"></i> Simple Right Sidebar</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Blog</a>
                <ul class="dropdown-menu">
                    <li><a href="blog#"><i class="fa fa-angle-right fa-fw"></i> Blog Default</a></li>
                    <li><a href="blog-wide#"><i class="fa fa-angle-right fa-fw"></i> Blog Wide</a></li>
                    <li><a href="blog-full-width#"><i class="fa fa-angle-right fa-fw"></i> Blog Full Width</a></li>
                    <li><a href="blog-left-sidebar#"><i class="fa fa-angle-right fa-fw"></i> Blog Left Sidebar</a></li>
                    <li><a href="blog-masonry#"><i class="fa fa-angle-right fa-fw"></i> Blog 2 Columns</a></li>
                </ul>
            </li>
            <li><a href="contact#"><i class="fa fa-phone-square fa-fw"></i> Contact</a></li>
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
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Login</a></li>
                <li><a href="<?php echo base_url() ?>register/"><i class="fa fa-pencil fa-fw"></i> Register</a></li>
                <li><a href="<?php echo base_url() ?>my-account/"><i class="fa fa-cog fa-fw"></i> My Account</a></li>
                <li><a href="#"><i class="fa fa-edit fa-fw"></i> Wishlist</a></li>
                <li><a href="<?php echo base_url() ?>cart/"><i class="fa fa-archive fa-fw"></i> Checkout</a></li>
            </ul>
        </nav>
        <div class="ct-shopMenuMobile-basket">
            <a href="my-cart#"><i class="fa fa-shopping-cart fa-fw"></i> My Basket <span class="ct-topBar-basket-quantity">(<?php echo $qty; ?> items)</span></a>
                <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
            <div class="ct-shopMenuMobile-basketContainer">
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

                <ul class="ct-shopMenuMobile-basketProducts list-unstyled">
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="single-product#">
                            <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
                            <div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle"><?php echo $item['name']; ?></div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">$<?php echo number_format($item['price'], 2); ?></div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
                        <?php } ?>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                    <?php endforeach; ?>
                <div class="ct-shopMenuMobile-basketWrap ct-shopMenuMobile-subTotal ct-fw-600">
                    <div class="pull-left text-uppercase">Subtotal</div>
                    <div class="pull-right">$<?php echo number_format($grand_total, 2); ?></div>
                    <div class="clearfix"></div>
                </div>
            </div>

                 <?php endif; ?>


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
            <a class="navbar-brand" href="index-2#"><img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo"> </a>
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        <!-- TOPBAR -->
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">
                    <ul class="list-unstyled">
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
                                <a href="single-product#">
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
                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>
                    <?php }else{ ?>
                            <li><a href="<?php echo base_url() ?>my-account/">My Account</a></li>
                    <?php } ?>

                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>                      
                        <li><a href="<?php echo base_url(); ?>cart/">Checkout</a></li>
                    <?php }else{ ?>
                        <li><a href="<?php echo base_url(); ?>cart/">Checkout</a></li>
                        <li><a href="<?php echo base_url(); ?>logout/">Logout</a></li>
                    <?php } ?>                            
                            
                        </ul>
                    </div>
                    <div class="ct-header-logo">
                        <a href="index-2#">
                            <img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo">
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar yamm">
                <div class="container">
                    <ul class="nav navbar-nav ct-navbar--fadeIn">
                        <li class="dropdown">
                            <a href="<?php echo base_url() ?>">Home</a>
                            <ul class="dropdown-menu">
                                <li>
                                                                        <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Home Pages</strong>
                                                    <br><small>Select your homepage</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-2#"><i class="fa fa-angle-right fa-fw"></i> Home - v1</a></li>
                                                    <li><a href="index2#"><i class="fa fa-angle-right fa-fw"></i> Home - v2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Headers</strong>
                                                    <br><small>Select your header</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-paralax#"><i class="fa fa-angle-right fa-fw"></i> Parallax</a></li>
                                                    <li><a href="index-2#"><i class="fa fa-angle-right fa-fw"></i> Slider</a></li>
                                                    <li><a href="index-video#"><i class="fa fa-angle-right fa-fw"></i> Video</a></li>
                                                    <li><a href="index-logo-left#"><i class="fa fa-angle-right fa-fw"></i> Logo Left</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Menu/Top bars</strong>
                                                    <br><small>Select your bar</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-black-menu#"><i class="fa fa-angle-right fa-fw"></i> Black Menu</a></li>
                                                    <li><a href="index-grey-top#"><i class="fa fa-angle-right fa-fw"></i> Grey Top</a></li>
                                                    <li><a href="index-both-colour#"><i class="fa fa-angle-right fa-fw"></i> Menu/Top Colour</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="<?php echo base_url() ?>collection/">Collections</a>
                            <!--        We need here padding-bottom 0 to display properly the image inside this content. Please, don't change paddingBottom.        -->
                            <ul class="dropdown-menu ct-u-paddingBottom0">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Products</strong><br><small>Jewellery</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="paypal-shop-page#"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                                                    <li><a href="collections#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                                                    <li><a href="collections2#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                                                    <li><a href="collections-list#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                                                    <li><a href="single-product#"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                                                    <li><a href="collections-no-sidebar#"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Shop Pages</strong><br><small>Shopping</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart#"><i class="fa fa-angle-right fa-fw"></i> Cart</a></li>
                                                    <li><a href="checkout#"><i class="fa fa-angle-right fa-fw"></i> Checkout</a></li>
                                                    <li><a href="wishlist#"><i class="fa fa-angle-right fa-fw"></i> Wishlist</a></li>
                                                    <li><a href="<?php echo base_url() ?>register/"><i class="fa fa-angle-right fa-fw"></i> Register</a></li>
                                                    <li><a href="login#"><i class="fa fa-angle-right fa-fw"></i> Login</a></li>
                                                    <li><a href="lost-password#"><i class="fa fa-angle-right fa-fw"></i> Lost Password</a></li>
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
                            <a href="about-us#">Pages</a>
                    <ul class="dropdown-menu text-uppercase">
                        <li><a href="about-us#">About Us</a></li>
                        <li><a href="our-mission#">Our Mission</a></li>
                        <li><a href="testimonials#">Testimonials</a></li>
                        <li><a href="pricing#">Pricing</a></li>
                        <li><a href="our-services#">Our Services</a></li>
                        <li><a href="our-team#">Our Designers</a></li>
                        <li><a href="faq#">FAQ</a></li>
                    </ul>
                        </li>
                                                <li class="dropdown">
                            <a href="portfolio-masonry#">Lookbook</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                    <a href="portfolio-masonry#">Masonry <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-masonry#">Default</a></li>
                                        <li><a href="portfolio-masonry-column1#">1 Column</a></li>
                                        <li><a href="portfolio-masonry-column2#">2 Columns</a></li>
                                        <li><a href="portfolio-masonry-column3#">3 Columns</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-left-sidebar#">Left Sidebar</a></li>
                                <li><a href="portfolio-right-sidebar#">Right Sidebar</a></li>
                            </ul>
                        </li>
                                                <li class="dropdown">
                            <a href="blog#">Blog</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                     <a href="blog-full-width#">Full Width <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-wide#">Left Image</a></li>
                                        <li><a href="blog-full-width#">Top Image</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-left-sidebar#">Left Sidebar</a></li>
                                <li><a href="blog#">Right Sidebar</a></li>
                                <li><a href="blog-masonry#">2 Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="contact#">Contact</a></li>
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
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Become a Member</h4>
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">It's Easy...</div>


                        <form class="form-horizontal" action="<?php echo base_url() ?>insert_reg/" method="post">
                            <div class="form-group">
                                <label for="b_fname" class="col-sm-2 control-label">First Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fname" id="b_fname" required>
                                </div>                                 
                            </div>
                            <div class="form-group">
                                <label for="b_lname" class="col-sm-2 control-label">Last Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lname" id="b_lname" required>
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="b_email" class="col-sm-2 control-label">Email*</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="b_email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_phone" class="col-sm-2 control-label">Phone*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_phone" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_password" class="col-sm-2 control-label">Password*</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="b_password" name="password" required>
                                </div>
                            </div>      
                            <div class="form-group">
                                <label for="company" class="col-sm-2 control-label">Company</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_address" class="col-sm-2 control-label">Address*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_address" name="address" placeholder="Street Address" required>
                                    <div class="ct-u-paddingTop10">
                                        <input type="text" class="form-control" placeholder="Apartment, Unit, Suite, etc." name="addr" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_city" class="col-sm-2 control-label">City*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_city" name="city" required>
                                </div>
                            </div> 
                           <div class="form-group">
                                <label for="b_zip" class="col-sm-2 control-label">Zip Code*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_zip" name="postcode" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_country" class="col-sm-2 control-label">Country*</label>
                                <div class="col-sm-10">
                                    <select class="ct-select ct-select--full" id="b_country" name="country">
                        <?php
                            $sqlStr  = $this->db->query("SELECT * FROM tbl_countries");
                            foreach ($sqlStr->result() as $baris){
                                $cd = $baris->code;
                                $name = $baris->name;
                        ?>
                                        <option value="<?php echo $cd ?>"><?php echo $name ?></option>
                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="country" class="col-sm-2 control-label">Category*</label>
                                <div class="col-sm-10">
                                    <select class="ct-select ct-select--full" id="category" name="category">                                        
                                        <?php                            
                                            foreach ($getmembers as $member){
                                                $cd = $member['id'];
                                                $name = $member['category'];
                                        ?>                                        
                                        <option value="<?php echo $cd ?>"><?php echo $name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
 

                            <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">Shipping Address</div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-left ct-rememberPassword">
                                    <div class="checkbox">
                                        <input type="checkbox" id="sameas" value="1" onclick="sameAsAbove()">                                       
                                        <label for="sameas">
                                            <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Same as above</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="s_fname" class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_fname" id="s_fname">
                            </div>                                 
                        </div>  
                        <div class="form-group">
                            <label for="s_lname" class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_lname" id="s_lname">
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="s_email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="s_email" id="s_email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="s_phone" class="col-sm-2 control-label">Cell Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_phone" id="s_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="s_address" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_address" id="s_address" placeholder="Street Address">                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="s_city" class="col-sm-2 control-label">City</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_city" id="s_city">
                            </div>
                        </div> 
                       <div class="form-group">
                            <label for="s_zip" class="col-sm-2 control-label">Zip Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_zip" id="s_zip" >
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="s_country" class="col-sm-2 control-label">Country*</label>
                                <div class="col-sm-10">
                                    <select class="form-control ct-select--full" id="s_country" name="s_country">
                        <?php
                            $sqlStr  = $this->db->query("SELECT * FROM tbl_countries");
                            foreach ($sqlStr->result() as $baris){
                                $cd = $baris->code;
                                $name = $baris->name;
                        ?>
                                        <option value="<?php echo $cd ?>"><?php echo $name ?></option>
                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <!--<div class="g-recaptcha" data-sitekey="6Ld7mxITAAAAAF0YBK_BuauP_bYNoGg0C1Nh9heB"></div>-->
                                    <!-- <div id="html_element"></div> -->
                                    <div class="g-recaptcha" data-sitekey="6Ld7mxITAAAAAF0YBK_BuauP_bYNoGg0C1Nh9heB"></div>
                                </div>
                            </div>  

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">
                                        Register <i class="fa fa-long-arrow-right fa-fw"></i>
                                    </button>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="ct-privacy">
                                        By creating an account, you agree to <a href="product-policies#">Jewel of Equator Terms and Conditions</a> and <a href="privacy#">Privacy Policy</a>.
                                    </div>
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
                                    <form class="validateIt"  method="post" action="http://diana#.themeplayers.net/form/send.php" role="form" data-email-subject="Contact Form" data-show-errors="true">
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
                                <li><a href="about-us#">About Us</a></li>
                                <li><a href="our-mission#">Our Mission</a></li>
                                <li><a href="blog#">In the news</a></li>
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

    <script>
        $(document).ready(function(){
            $(".ct-select").select2();
        });

    </script>



    <script src="<?php echo base_url() ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url() ?>js/elevate-zoom/init.js"></script>

    <script src="<?php echo base_url() ?>js/main.js"></script>

    <script src="<?php echo base_url() ?>twitter/js/jquery.tweet.js"></script>

    

</body>

<!-- Mirrored from diana#.themeplayers.net/create-account# by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:47:57 GMT -->
</html>