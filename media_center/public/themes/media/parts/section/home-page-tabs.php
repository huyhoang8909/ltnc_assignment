<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" >
                <?php foreach ($products as $product):  ?>
                <li class="<?php echo $product->active ?>"><a href="#cat_<?php echo $product->CATEGORY_ID ?>" data-toggle="tab"><?php echo $product->CATEGORY_NAME  ?></a></li>
                <?php endforeach;    ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php foreach ($products as $product):    ?>
                <div class="tab-pane active" id="cat_<?php echo $product->CATEGORY_ID ?>">
                    <div class="product-grid-holder">
                        
                        <?php if ($product->products) foreach ($product->products as $item):    ?>
                            <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div> 
                                    <div class="image">
                                        <img alt="" src="items/<?php echo $item->IMAGE    ?>" data-echo="items/<?php echo $item->IMAGE    ?>" />
                                    </div>
                                    <div class="body">
                                        <div class="label-discount green">-50% sale</div>
                                        <div class="title">
                                            <a href="item/<?php echo $item->ITEM_ID?>"><?php echo $item->ITEM_NAME    ?></a>
                                        </div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current pull-right">$<?php echo $item->ITEM_PRICE ?>.00</div>
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
                        <?php endforeach;   ?>
                        
                    </div>

                </div>
                <?php endforeach;   ?>
            </div>
        </div>
    </div>
</div>