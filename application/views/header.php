<?php 
$email = $this->session->userdata('email_address'); 

?>

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

    <nav class="ct-menuMobile">
        <ul class="ct-menuMobile-navbar">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
			<li class="dropdown">
                <a href="#"><i class="fa fa-list-ol fa-fw"></i> Collections</a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> JAI Jewelry</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Dynamic Silver</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Adi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Learn</a>
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
                <a href="#"><i class="fa fa-dot-circle-o fa-fw"></i> About</a>
                <ul class="dropdown-menu">
                    <li><a href="paypal-shop-page.html"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                    <li><a href="collections.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                    <li><a href="collections2.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                    <li><a href="collections-list.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                    <li><a href="single-product.html"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                    <li><a href="collections-no-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
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
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo"> </a>
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        <!-- TOPBAR -->
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">
                    <ul class="list-unstyled">
                        <!--<li><i class="fa fa-fw fa-phone"></i> Call us: 012 345-6789</li>-->
                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>                      
                        <li><a href="<?php echo base_url() ?>administratoris.pl"><i class="fa fa-fw fa-user"></i> <?php echo "Login" ?></a></li>
                        <li><a href="<?php echo base_url() ?>register.pl"><i class="fa fa-fw fa-pencil"></i> Register</a></li>
                   <?php }else{ ?>
                        <?php
                            $sqlStr  = $this->db->query("SELECT * FROM membership WHERE email_address = '$email'");
                            foreach ($sqlStr->result() as $row){
                                $fname = $row->first_name;
                                $lname = $row->last_name;
                        ?>
                        <li><i class="fa fa-fw fa-user"></i> <?php echo "Hi, ".$fname ?></li>                        
                        <?php } ?>
                        <li><a href="<?php echo base_url() ?>register.pl"><i class="fa fa-fw fa-pencil009"></i> &nbsp;</a></li>
                    <?php } ?>    

                    </ul>
                </div>

                <div class="pull-right">
                    <div class="ct-topBar-basket">                        
<!---           -->
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
                                <div class="ct-cartItem-image pull-left">
                                    <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
                                </div>
                                <div class="ct-cartItem-title">
                                    <?php echo $row->name; ?>
                                </div>
                                <div class="ct-cartItem-price">
                                    $<?php echo number_format($item['price'], 2); ?> x <?php echo $item['qty']; ?>
                                    <a href="<?php echo base_url(); ?>shopping/hapus/<?php echo $item['rowid']; ?>">
                                        <img style="float:right" src="<?php echo base_url(); ?>images/delete.png" />
                                    </a>
                                </div>
                                
                                <div class="clearfix"></div>
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

        <div class="ct-headerWrapper ct-u-paddingBottom40">
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
                        <a href="index.html">
                            <img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo">
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar yamm">
                <div class="container">
                    <ul class="nav navbar-nav ct-navbar--fadeIn">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>">Home</a>                            
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url() ?>collection">Collections</a>
                            <!--        We need here padding-bottom 0 to display properly the image inside this content. Please, don't change paddingBottom.        -->
                            <ul class="dropdown-menu ct-u-paddingBottom0">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>JAI</strong><br><small>Jewelry</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart.html"><i class="fa fa-angle-right fa-fw"></i> Earings</a></li>
                                                    <li><a href="checkout.html"><i class="fa fa-angle-right fa-fw"></i> Rings</a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-angle-right fa-fw"></i> Necklaces &amp; Pendants</a></li>
                                                    <li><a href="create-account.html"><i class="fa fa-angle-right fa-fw"></i> Bracelets</a></li>
                                                    <li><a href="login.html"><i class="fa fa-angle-right fa-fw"></i> Wedding Bands</a></li>
                                                    <li><a href="lost-password.html"><i class="fa fa-angle-right fa-fw"></i> Charms</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Dynamic</strong><br><small>Silver</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart.html"><i class="fa fa-angle-right fa-fw"></i> Earings</a></li>
                                                    <li><a href="checkout.html"><i class="fa fa-angle-right fa-fw"></i> Rings</a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-angle-right fa-fw"></i> Necklaces &amp; Pendants</a></li>
                                                    <li><a href="create-account.html"><i class="fa fa-angle-right fa-fw"></i> Bracelets</a></li>
                                                    <li><a href="login.html"><i class="fa fa-angle-right fa-fw"></i> Wedding Bands</a></li>
                                                    <li><a href="lost-password.html"><i class="fa fa-angle-right fa-fw"></i> Charms</a></li>
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
                            <a href="about-us.html">Learn</a>
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
                        <li><a href="portfolio-masonry.html">About</a></li>                        
                        <li><a href="<?php echo base_url() ?>contact/">Contact</a></li>
                    </ul>
                    <div id="ct-js-navSearch" class="ct-navbar-navSearch navbar-search pull-right">
                        <i class="fa fa-fw fa-search"></i>
                    </div>
                    <div class="ct-navbar-search">

                        <form id="form_pencarian" name="form_pencarian" method="post" action="<?=base_url();?>search/">
                            <table width="100%">
                            <tr>
                                <td width="90%"><input name="ringkasan" type="text" id="ringkasan" style="width:100%" class="form-control" value="<?php //echo $ringkasan;?>"/></td>
                                <td><input name="submit" type="submit" id="submit" value="Searching..." class="ct-navbar-search-button" style="float: left"/> </td>
                            </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </nav>
        </div>