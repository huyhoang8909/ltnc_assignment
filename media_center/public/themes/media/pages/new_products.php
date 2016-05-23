<div id="top-banner-and-menu">
	<div class="container">
		
		<div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
		</div><!-- /.sidemenu-holder -->

		<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
		</div><!-- /.homebanner-holder -->

	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
<?php echo theme_view('parts/section/new_products', array('products' => $data['products']));?>

<?php // echo theme_view('parts/section/best-sellers');?>

<?php echo theme_view('parts/section/recently-viewed', array('more_items' => $data['more_items']));?>

<?php echo theme_view('parts/section/top-brands');?>