<div id="top-banner-and-menu">
	<div class="container">
		
		<div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
			<?php echo theme_view('parts/navigation/sidemenu', array('pages' => $pages)) ?>
		</div><!-- /.sidemenu-holder -->

		<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
			<?php echo theme_view('parts/section/home-page-slider') ?>			
		</div><!-- /.homebanner-holder -->

	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->

<?php echo theme_view('parts/section/home-banners');?>

<?php echo theme_view('parts/section/home-page-tabs');?>

<?php echo theme_view('parts/section/best-sellers');?>

<?php echo theme_view('parts/section/recently-viewed');?>

<?php echo theme_view('parts/section/top-brands');?>