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
<div class="container">
<div class="col-xs-12 no-margin">
<h2 style="margin-bottom: 0px;" class='page-header'>
    <?php echo lang('order_area_title'); ?>
</h2>
<?php if (isset($records) && is_array($records) && count($records)) : ?>
<table class='table table-striped table-bordered'>
    <thead>
        <tr>
            
            <th>SHIPPING TYPE</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
            <th>ORDER STATUS</th>
            <th>ORDER DATE</th>
            <th>TOTAL</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $record) : ?>
        <tr>
            <td><?php e($record->SHIPPING_TYPE_NAME); ?></td>
            <td><?php e($record->address); ?></td>
            <td><?php e($record->phone); ?></td>
            <td><?php e($record->ORDER_STATUS); ?></td>
            <td><?php e($record->ORDER_DATE); ?></td>
            <td><?php e($record->TOTAL); ?></td>
            <td><?php if($record->ORDER_STATUS == 'PROCESSING'): ?><a href="/order/delete/<?php echo $record->ORDER_ID ?>">Delete</a><?php endif; ?></td>
        </tr>
        <tr>
            <td colspan="7">
            <section>
                <?php foreach ($record->items as $item) : ?>
                    <div class="row no-margin order-item">
                        <div class="col-xs-12 col-sm-1 no-margin">
                            <a href="#" class="qty"><?php e($item->AMOUNT) ?> x</a>
                        </div>

                        <div class="col-xs-12 col-sm-9 ">
                            <div class="title"><a href="#"><?php e($item->ITEM_NAME) ?></a></div>
                            <div class="brand"><?php e($item->MANUFACTURER_NAME) ?></div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">$<?php e($item->ITEM_PRICE * $item->AMOUNT) ?></div>
                        </div>
                    </div><!-- /.order-item -->
                <?php endforeach; ?>
            </section>
            </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?php

endif; ?>
</div>
</div>
<?php echo theme_view('parts/section/footer', array('page' => $page, 'pages' => $pages, 'data' => $data)) ?>