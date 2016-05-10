<div class="top-cart-row-container">
<!--     <div class="wishlist-compare-holder">
        <div class="wishlist ">
            <a href="#"><i class="fa fa-heart"></i> wishlist <span class="value">(21)</span> </a>
        </div>
        <div class="compare">
            <a href="#"><i class="fa fa-exchange"></i> compare <span class="value">(2)</span> </a>
        </div>
    </div> -->

    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    <?php $cart = $this->session->userdata('cart') ?>
    <div class="top-cart-holder dropdown animate-dropdown">
        
        <div class="basket">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                 
                <div class="basket-item-count">
                    <span class="count"><?php !empty($cart) ? print(count($cart)) : print '0' ?></span>
                    <img src="/assets/images/icon-cart.png" alt="" />
                </div>
                <?php if(!empty($cart)): ?>
                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">$</span><span class="value"> <?php echo $this->session->userdata('total_price') ?> </span>
                    </span>
                </div>
                <?php endif; ?>
            </a>
            <?php if(!empty($cart)): ?>
            <ul class="dropdown-menu">
                <?php foreach ($cart as $record) : ?>
                <li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="assets/images/products/product-small-01.jpg" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title"><?php e($record->ITEM_NAME) ?></div>
                                <div class="price">$<?php e($record->ITEM_PRICE) ?></div>
                            </div>
                        </div>
                        <!-- <a class="close-btn" href="#"></a> -->
                    </div>
                </li>
                <?php endforeach; ?>
                <li class="checkout">
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <a href="/cart" class="le-button inverse">View cart</a>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <a href="/checkout" class="le-button">Checkout</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <?php endif; ?>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
</div><!-- /.top-cart-row-container -->
<!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->