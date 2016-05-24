<!--
						<div class="ribbon red"><span>sale</span></div> 
						<div class="ribbon blue"><span>new!</span></div> 
						<div class="ribbon green"><span>bestseller</span></div> 


-->
<?php 
	$carouselID = isset($carouselID) ? $carouselID : 'owl-recently-viewed';
	$containerClass = isset($containerClass) ? $containerClass : 'container';
	$productItemSize = isset($productItemSize) ? $productItemSize : 'size-small';
?>
<!-- ========================================= RECENTLY VIEWED ========================================= -->
<section id="recently-reviewd" class="wow fadeInUp">
	<div class="<?php echo $containerClass;?>">
		<div class="carousel-holder hover">
			
			<div class="title-nav">
				<h2 class="h1">Sản phầm được xem nhiều</h2>
				<div class="nav-holder">
					<a href="#prev" data-target="#<?php echo $carouselID;?>" class="slider-prev btn-prev fa fa-angle-left"></a>
					<a href="#next" data-target="#<?php echo $carouselID;?>" class="slider-next btn-next fa fa-angle-right"></a>
				</div>
			</div><!-- /.title-nav -->

			<div id="<?php echo $carouselID;?>" class="owl-carousel product-grid-holder">
                            
                            <?php foreach ($more_items as $item): ?>
				<div class="no-margin carousel-item product-item-holder <?php echo $productItemSize;?> hover">
					<div class="product-item">
						<div class="ribbon red"><span>sale</span></div> 
						<div class="image">
							<img alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
						</div>
						<div class="body">
							<div class="title">
								<a href="<?php echo base_url('item').'/'.$item->ITEM_ID ?>">LC-70UD1U 70" class aquos 4K ultra HD</a>
							</div>
							<div class="brand">Sharp</div>
						</div>
						<div class="prices">
							<div class="price-current text-right">$<?php echo $item->ITEM_PRICE ?>.00</div>
						</div>
						<div class="hover-area">
							<div class="add-cart-button">
                                                            <!--@HOANG: TODO HERE-->
								<a href="<?php echo base_url('Cart/add/'.$item->ITEM_ID) ?>" class="le-button">Add to Cart</a>
							</div>
							<div class="wish-compare">
								<a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
								<a class="btn-add-to-compare" href="#">Compare</a>
							</div>
						</div>
					</div><!-- /.product-item -->
				</div><!-- /.product-item-holder -->
                                <?php endforeach; ?>

				
			</div><!-- /#recently-carousel -->

		</div><!-- /.carousel-holder -->
	</div><!-- /.container -->
</section><!-- /#recently-reviewd -->
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->