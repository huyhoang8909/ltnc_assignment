<div id="single-product">
    <div class="container">


        <?php echo theme_view('parts/section/single-product-gallery', array('item' => $data['item'], 'data' => $data)); ?>
        <?php echo theme_view('parts/section/single-product-detail', array('item' => $data['item'], 'data' => $data)); ?>


    </div><!-- /.container -->
</div><!-- /.single-product -->

<?php echo theme_view('parts/section/single-product-tab', array('item' => $data['item'])); ?>

<?php echo theme_view('parts/section/recently-viewed', array('more_items' => $data['more_items'])); ?>

