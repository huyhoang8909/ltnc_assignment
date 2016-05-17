<!-- ============================================================= HEADER ============================================================= -->
<header>
	<div class="container no-padding">
		
		<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
			<?php echo theme_view('/parts/widgets/header/logo') ?>
		</div><!-- /.logo-holder -->

		<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
			<?php echo theme_view('/parts/widgets/header/search-bar') ?>
		</div><!-- /.top-search-holder -->

		<?php if(!in_array($this->router->fetch_module(), ['cart', 'checkout'])): ?>
		<div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
			<?php echo theme_view('/parts/widgets/header/shopping-cart-dropdown') ?>
		</div><!-- /.top-cart-row -->
		<?php endif; ?>

	</div><!-- /.container -->
</header>
<!-- ============================================================= HEADER : END ============================================================= -->