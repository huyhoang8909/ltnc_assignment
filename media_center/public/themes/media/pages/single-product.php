<div id="single-product">
    <div class="container">

        
        <?php echo theme_view('parts/section/single-product-gallery', array('item' => $item));?>
        <?php echo theme_view('parts/section/single-product-detail', array('item' => $item));?>


    </div><!-- /.container -->
</div><!-- /.single-product -->


<?php echo theme_view('parts/section/single-product-tab', array('item' => $item));?>

<?php echo theme_view('parts/section/recently-viewed', array('item' => $item));?>

