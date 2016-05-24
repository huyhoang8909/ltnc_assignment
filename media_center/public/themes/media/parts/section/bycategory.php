
<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" >
                 <?php foreach ($data['get_category'] as $getcategory): ?>
                <li class="active"><a href="#" data-toggle="tab"><?php echo $getcategory->CATEGORY_NAME  ?></a></li>
                <?php endforeach; ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php foreach ($data['byproduct'] as $byproduct): ?>
                    <div class="tab-pane active">
                        <div class="product-grid-holder">

                            <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div> 
                                    <div class="image">
                                        
                                        <img alt="" src="<?php echo base_url('items/'.$byproduct->IMAGE) ?>" data-echo="<?php echo base_url('items/'.$byproduct->IMAGE) ?>"" />
                                    </div>
                                    <div class="body">
                                        <div class="label-discount green">-50% sale</div>
                                        <div class="title">
                                            <a href="<?php echo base_url('item/'.$byproduct->ITEM_ID) ?>"><?php echo $byproduct->ITEM_NAME ?></a>
                                        </div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current pull-right">$<?php echo $byproduct->ITEM_PRICE ?>.00</div>
                                    </div>

                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="<?php echo base_url('Cart/add/'.$byproduct->ITEM_ID) ?>" class="le-button">add to cart</a>
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