<?php
    function baseURL(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            dirname($_SERVER['REQUEST_URI'])
        );
    }

    define('BASE_URL', baseURL());
    define('MC_ROOT', dirname(__FILE__));
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    if($page == 'home'){
        $_GET['style'] = 'alt2';
    }else{
        $_GET['style'] = 'alt';
    }

    $headerStyle = ($_GET['style'] == 'alt') ? 2 : 1;
    $pages = array(
        'home' => 'Home',
        'home-2' => 'Home Alt',
        'category-grid' => 'Category - Grid/List',
        'category-grid-2' => 'Category 2 - Grid/List',
        'single-product' => 'Single Product',
        'single-product-sidebar' => 'Single Product with Sidebar',
        'cart' => 'Shopping Cart',
        'checkout' => 'Checkout',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'blog' => 'Blog',
        'blog-fullwidth' => 'Blog Full Width',
        'blog-post' => 'Blog Post',
        'faq' => 'FAQ',
        'terms' => 'Terms & Conditions',
        'authentication' => 'Login/Register'
    );
?>

<?php echo theme_view('parts/navigation/top-menu-bar', array('page' => $page, 'pages' => $pages)) ?>

<?php  echo theme_view('parts/section/header', array('page' => $page, 'pages' => $pages)) ?>
<?php //echo theme_view('parts/breadcrumb/breadcrumb', array('page' => $page, 'pages' => $pages, 'products' => $products)) ?>
<?php //Template::$debug = true ?>
<?php echo theme_view('parts/navigation/horizontal-menu', array('page' => $page, 'pages' => $pages)) ?>

<!-- ========================================= CONTENT ========================================= -->

<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">
            
            <div class="billing-address">
                <h2 class="border h1">billing address</h2>
                <form>
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>full name*</label>
                            <input class="le-input" >
                        </div>
<!--                         <div class="col-xs-12 col-sm-6">
                            <label>last name*</label>
                            <input class="le-input" >
                        </div> -->
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12">
                            <label>company name</label>
                            <input class="le-input" >
                        </div>
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>address*</label>
                            <input class="le-input" data-placeholder="street address" >
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>&nbsp;</label>
                            <input class="le-input" data-placeholder="town" >
                        </div>
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-4">
                            <label>postcode / Zip*</label>
                            <input class="le-input"  >
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>email address*</label>
                            <input class="le-input" >
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <label>phone number*</label>
                            <input class="le-input" >
                        </div>
                    </div><!-- /.field-row -->

<!--                     <div class="row field-row">
                        <div id="create-account" class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">Create Account?</a> - you will receive email with temporary generated password after login you need to change it.
                        </div>
                    </div><!-- /.field-row -->

                </form>
            </div><!-- /.billing-address -->


            <section id="shipping-address">
                <!-- <h2 class="border h1">shipping address</h2> -->
                <form>
<!--                     <div class="row field-row">
                        <div class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">ship to different address?</a>
                        </div>
                    </div> -->
                    <!-- /.field-row -->
                </form>
            </section><!-- /#shipping-address -->


            <section id="your-order">
                <h2 class="border h1">your order</h2>
                <form>
                <?php $total_price = 0 ?>
                <?php foreach ($records as $record) : ?>
                    <div class="row no-margin order-item">
                        <div class="col-xs-12 col-sm-1 no-margin">
                            <a href="#" class="qty">1 x</a>
                        </div>

                        <div class="col-xs-12 col-sm-9 ">
                            <div class="title"><a href="#"><?php e($record->ITEM_NAME) ?></a></div>
                            <div class="brand"><?php e($record->MANUFACTURER_NAME) ?></div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">$<?php e($record->ITEM_PRICE) ?></div>
                            <?php $total_price += $record->ITEM_PRICE ?>
                        </div>
                    </div><!-- /.order-item -->
                <?php endforeach; ?>
                </form>
            </section><!-- /#your-order -->

            <div id="total-area" class="row no-margin">
                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                    <div id="subtotal-holder">
                        <ul class="tabled-data inverse-bold no-border">
                            <li>
                                <label>cart subtotal</label>
                                <div class="value ">$<?php echo $total_price ?></div>
                            </li>
<!--                             <li>
                                <label>shipping</label>
                                <div class="value">
                                    <div class="radio-group">
                                        <input class="le-radio" type="radio" name="group1" value="free" checked> <div class="radio-label bold">free shipping</div><br>
                                        <input class="le-radio" type="radio" name="group1" value="local">  <div class="radio-label">local delivery<br><span class="bold">$15</span></div>
                                    </div>
                                </div>
                            </li> -->
                        </ul><!-- /.tabled-data -->

                        <ul id="total-field" class="tabled-data inverse-bold ">
                            <li>
                                <label>order total</label>
                                <div class="value">$<?php echo $total_price ?></div>
                            </li>
                        </ul><!-- /.tabled-data -->

                    </div><!-- /#subtotal-holder -->
                </div><!-- /.col -->
            </div><!-- /#total-area -->

            <div id="payment-method-options">
                <form>
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="Direct">
                        <div class="radio-label bold ">Direct Bank Transfer<br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempus elit, vestibulum vestibulum erat ornare id.</p>
                        </div>
                    </div><!-- /.payment-method-option -->
                    
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="cheque">
                        <div class="radio-label bold ">cheque payment</div>
                    </div><!-- /.payment-method-option -->
                    
                    <div class="payment-method-option">
                        <input class="le-radio" type="radio" name="group2" value="paypal">
                        <div class="radio-label bold ">paypal system</div>
                    </div><!-- /.payment-method-option -->
                </form>
            </div><!-- /#payment-method-options -->
            
            <div class="place-order-button">
                <button class="le-button big">place order</button>
            </div><!-- /.place-order-button -->

        </div><!-- /.col -->
    </div><!-- /.container -->    
</section><!-- /#checkout-page -->
<!-- ========================================= CONTENT : END ========================================= -->
<?php echo theme_view('parts/section/footer', array('page' => $page, 'pages' => $pages)) ?>