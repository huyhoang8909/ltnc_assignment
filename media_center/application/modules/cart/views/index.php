<?php

function baseURL() {
    return sprintf(
            "%s://%s%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'], dirname($_SERVER['REQUEST_URI'])
    );
}

define('BASE_URL', baseURL());
define('MC_ROOT', dirname(__FILE__));
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page == 'home') {
    $_GET['style'] = 'alt2';
} else {
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

<?php echo theme_view('parts/section/header', array('page' => $page, 'pages' => $pages)) ?>
<?php //echo theme_view('parts/breadcrumb/breadcrumb', array('page' => $page, 'pages' => $pages, 'products' => $products))  ?>
<?php //Template::$debug = true ?>
<?php echo theme_view('parts/breadcrumb/breadcrumb-category-grid', array('page' => $page, 'pages' => $pages, 'data' => $data)) ?>

<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
<?php $total_price = 0 ?>
        <?php if (!empty($records)) : ?>
            <div class="col-xs-12 col-md-9 items-holder no-margin">
            <?php foreach ($records as $record) : ?>
                    <div class="row no-margin cart-item">
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <a href="#" class="thumb-holder">
                                <img class="lazy" alt="" src="/<?php e($record->IMAGE) ?>" />
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-5 ">
                            <div class="title">
                                <a href="#"><?php e($record->ITEM_NAME) ?></a>
                            </div>
                            <div class="brand"><?php e($record->MANUFACTURER_NAME) ?></div>
                        </div> 

                        <div class="col-xs-12 col-sm-3 no-margin">
                            <div class="quantity">
                                <div class="le-quantity">
                                    <form>
                                        <a class="minus" href="#" onclick="reduce('<?php e($record->ITEM_ID) ?>')"></a>
                                        <input name="quantity" id="<?php e($record->ITEM_ID) ?>" readonly="readonly" type="text" value="<?php e($record->AMOUNT) ?>" />
                                        <a class="plus" href="#" onclick="add('<?php e($record->ITEM_ID) ?>')"></a>
                                    </form>
                                </div>
                            </div>
                        </div> 

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price price-<?php e($record->ITEM_ID) ?>">
                                <input type="hidden" value="<?php echo $record->ITEM_PRICE ?>">
                                <span>$<?php e($record->ITEM_PRICE * $record->AMOUNT) ?></span>
        <?php $total_price += $record->ITEM_PRICE * $record->AMOUNT ?>
                            </div>
                            <a class="close-btn" href="/cart/delete/<?php echo $record->ITEM_ID ?>"></a>
                        </div>
                    </div><!-- /.cart-item -->
    <?php endforeach; ?>
            </div>
            <?php endif; ?>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">shopping cart</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>
                            <div id ="cart-price"class="value pull-right">$<?php echo $total_price ?></div>
                        </li>
                        <li>
                            <label>shipping</label>
                            <div class="value pull-right">free shipping</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>order total</label>
                            <div class="value pull-right">$<?php echo $total_price ?></div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big" href="/checkout" >checkout</a>
                        <a class="simple-link block" href="/" >continue shopping</a>
                    </div>
                </div>
            </div><!-- /.widget -->

            <!--             <div id="cupon-widget" class="widget">
                            <h1 class="border">use coupon</h1>
                            <div class="body">
                                
                                <div class="inline-input">
                                    <input style="text-transform:none;" data-placeholder="Enter coupon code" type="text" />
                                    <button class="le-button" onclick="applyCoupon()">Apply</button>
                                </div>
                                
                            </div>
                        </div><!-- /.widget -->
        </div><!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>

</section>
<?php echo theme_view('parts/section/footer', array('page' => $page, 'pages' => $pages, 'data' => $data)) ?>
