<?php 
//$email = $this->session->userdata('email_address'); 

?>

<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from diana.html.themeplayers.net/my-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:48:18 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Macaroon -Creative Patisserie HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">

    <title>Diana - Creative Shop Template</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/select2.css">

   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->


    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>

        <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Are you sure want to clear ?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>shopping/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
</head>


<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php //$this->load->view('header'); ?>


        <div class="ct-contentWrapper">
            <div class="container">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">My Cart</h4>
                
                    <table class="ct-wishList ct-js-wishList ct-js-cartShop ct-u-marginBoth30">
                        <thead>
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>                            
                            <tr>
                                <th class="ct-wishList-image"></th>
                                <th class="ct-wishList-description">Product name</th>
                                <th class="ct-wishList-price">Unit Price</th>
                                <th class="ct-wishList-quantity">Quantity</th>
                                <th class="ct-wishList-total">Total</th>
                                <th class="ct-wishList-button"></th>
                            </tr>
                        </thead>
                        <tbody>                
                
                 
                   
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    echo form_open('shopping/update_cart');
                    
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
                        <tr>
                            <?php
                                $this->db->where('serial', $item['id']);
                                $query = $this->db->get('property');

                                foreach ($query->result() as $row)
                                {
                            ?>
                            <td>
                       <a href="<?php echo base_url(); ?>productdetail/<?php echo $row->serial ?>">
                       <img src="<?php echo base_url() ."images/". $row->image_name ?>" width="150" height="150"/>
                       </a>

                       <?php //echo $i++; ?>
                            <?php //} ?>
                            </td>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>
                            <!--
                            <td>
                                <?php //echo $row->description; ?>
                            </td>
                            -->
                            <?php } ?>
                            <td>
                                $ <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                $ <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                            <a href="<?php echo base_url(); ?>shopping/remove/<?php echo $item['rowid']; ?>">
                            <img src="<?php echo base_url(); ?>images/cart_cross.jpg" width='25px' height='20px' />
                            </a>
                            
                            <?php 
                            // cancle image.
                            //$path = "<img src='http://localhost/php_ci_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                            //echo anchor('cart/remove/' . $item['rowid'], $path); ?>
                            </td>
                     <?php endforeach; ?>
                    </tr>
                    <tr>                      
                        
                        <?php // "clear cart" button call javascript confirmation message ?>                        
                        
                        <td colspan="6" align="right">
                            <b>Order Total: $<?php echo number_format($grand_total, 2); ?></b>                                                      
                        </td>

                    </tr>
                    <tr>
                        <?php // "clear cart" button call javascript confirmation message ?>
                        
                        <td colspan="6" align="right">
                        <input type="button" class ='btn btn-warning' value="Clear Cart" onclick="clear_cart()">
                            
                            <?php //submit button. ?>
                            <input type="submit" class ='btn btn-info' value="Update Cart">
                            
                            <?php echo form_close(); ?>                           
                            
                            <!-- "Place order button" on click send "billing" controller  -->
                            <!--<input type="button" class ='btn btn-info' value="Place Order" onclick="window.location = '<?php echo base_url() ?>index.php/cart/billing_view'"> -->
                        </td>
                        
                    </tr>

        <?php endif; ?>  
                        </tbody>
                    </table>
                    <!-- this div will appear if we will close each element in this table or there won't be any element here in the beggining. This is generating by JS in main.js-->
                    <div class="ct-wishList-noProducts ct-u-size15 ct-u-paddingBottom30">No products were added to your cart.</div>
                    <div class="ct-shopSections">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="ct-cartLeftSection">
                                    <input type="text" class="form-control ct-stickedInput" placeholder="Coupon Code"><button class="btn btn-default">Apply <i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="ct-cartRightSection">
                                    <div class="ct-u-paddingBottom40 ct-cartRightSection-buttons">
                                        <a href="<?php echo site_url() ?>cart/"><button class="btn btn-default btn-md pull-left"> Continue Shopping <i class="fa fa-long-arrow-right fa-fw"></i></button></a>
                                        <button class="btn btn-default btn-md pull-right">To Checkout <i class="fa fa-long-arrow-right fa-fw"></i></button>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ct-u-size15">
                                        <div class="ct-u-paddingBottom20">
                                            <span class="pull-left">Cart Subtotal</span>
                                            <span class="pull-right">$<?php echo number_format($grand_total, 2); ?></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="ct-u-paddingBottom30">
                                            <span class="pull-left">Shipping Service</span>
                                            <span class="pull-right">Free Shipping</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="ct-u-paddingBottom30">
                                        <div class="ct-u-paddingBottom30">
                                            <span class="pull-left">Order Total</span>
                                            <span class="pull-right ct-u-size20">$<?php echo number_format($grand_total, 2); ?>
                                            </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="ct-u-paddingBottom30">                                        
                                       
                                    </div>
                                </div>
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
                                    <form class="validateIt"  method="post" action="#" role="form" data-email-subject="Contact Form" data-show-errors="true">
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
                                <img src="<?php echo base_url(); ?>images/prefooter-diamond.png" class="text-right pull-left" alt="Diamond Ring">
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
                            <img src="<?php echo base_url(); ?>images/footer-necklace.png" alt="Golden Necklace">
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



    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.js"></script>

    <script src="<?php echo base_url(); ?>js/spinner/init.js"></script> <!-- It has to be before jquery.min.js -->

    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/device.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.browser.min.js"></script>
    <script src="<?php echo base_url(); ?>js/snap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.appear.js"></script>



    <script src="<?php echo base_url(); ?>plugins/headroom/headroom.js"></script>
    <script src="<?php echo base_url(); ?>plugins/headroom/jQuery.headroom.js"></script>
    <script src="<?php echo base_url(); ?>plugins/headroom/init.js"></script>

    <script src="<?php echo base_url(); ?>form/js/contact-form.js"></script>

    <script src="<?php echo base_url(); ?>js/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/stacktable/stacktable.js"></script>


    <script src="<?php echo base_url(); ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url(); ?>js/elevate-zoom/init.js"></script>



    <script src="<?php echo base_url(); ?>js/main.js"></script>

</body>

<!-- Mirrored from diana.html.themeplayers.net/my-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:48:20 GMT -->
</html>