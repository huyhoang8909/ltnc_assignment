<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" >
                <li class="active"><a href="#" data-toggle="tab">Sản phẩm mới</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php foreach ($data['new_products'] as $n_product): ?>
                    <div class="tab-pane active">
                        <div class="product-grid-holder">

                            <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div> 
                                    <div class="image">
                                        <img alt="" src="items/<?php echo $n_product->IMAGE ?>" data-echo="items/<?php echo $n_product->IMAGE ?>" />
                                    </div>
                                    <div class="body">
                                        <div class="label-discount green">-50% sale</div>
                                        <div class="title">
                                            <a href="item/<?php echo $n_product->ITEM_ID ?>"><?php echo $n_product->ITEM_NAME ?></a>
                                        </div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current pull-right">$<?php echo $n_product->ITEM_PRICE ?>.00</div>
                                    </div>

                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="index.php?page=single-product" class="le-button">add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                            <a class="btn-add-to-compare" href="#">compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>