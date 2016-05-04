<?php

    // Define the root folder and base URL for the application
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
<?php //Template::$debug = true ?>

<?php echo theme_view('parts/navigation/top-menu-bar', array('page' => $page, 'pages' => $pages)) ?>

<?php  echo theme_view('parts/section/header', array('page' => $page, 'pages' => $pages)) ?>
<?php echo theme_view('parts/breadcrumb/breadcrumb', array('page' => $page, 'pages' => $pages, 'data' => $data)) ?>

<?php echo theme_view('pages/'.$page, array('page' => $page, 'pages' => $pages, 'data' => $data)) ?>
<?php echo theme_view('parts/section/footer', array('page' => $page, 'pages' => $pages, 'data' => $data)) ?>