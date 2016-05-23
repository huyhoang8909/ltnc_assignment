<?php
    $isListView = isset($_GET['view']) && ($_GET['view'] == 'list') ? true : false;
?>
<section id="category-grid">
    <div class="container">

        <!-- ========================================= SIDEBAR ========================================= -->
        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">


            <?php echo theme_view('parts/widgets/sidebar/special-offers');?>

            <?php echo theme_view('parts/widgets/sidebar/sidebar-banner');?>

            <?php echo theme_view('parts/widgets/sidebar/featured-products');?>

        </div>
        <!-- ========================================= SIDEBAR : END ========================================= -->

        <!-- ========================================= CONTENT ========================================= -->

        <div class="col-xs-12 col-sm-9 no-margin wide sidebar">
            <?php echo theme_view('parts/section/category-products',array('isListView' => $isListView, 's_products' => $data['s_products'], 'products' => $data['products']));?>
            
        </div><!-- /.col -->
        <!-- ========================================= CONTENT : END ========================================= -->    
    </div><!-- /.container -->
</section><!-- /#category-grid -->