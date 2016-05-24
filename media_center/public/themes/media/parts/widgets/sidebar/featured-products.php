<!-- ========================================= FEATURED PRODUCTS ========================================= -->
<div class="widget">
    <h1 class="border">khuyến mãi</h1>
    <ul class="product-list">
        <?php foreach ($data['sale_item'] as $sale_item): ?>
            <li class="sidebar-product-list-item">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 no-margin">
                        <a href="#" class="thumb-holder">
                            <img alt="" src="<?php echo base_url('item') . '/' . $sale_item->IMAGE ?>" data-echo="<?php echo base_url('items') . '/' . $sale_item->IMAGE ?>" />

                        </a>
                    </div>
                    <div class="col-xs-8 col-sm-8 no-margin">
                        <a href="<?php echo base_url('item') . '/' . $sale_item->ITEM_ID ?>"><?php echo $sale_item->ITEM_NAME ?></a>
                        <div class="price">
                            <div class="price-prev"><?php echo $sale_item->ITEM_PRICE ?></div>
                            <div class="price-current"><?php echo $sale_item->ITEM_QUANTITY ?></div>
                        </div>
                    </div>  
                </div>
            </li><!-- /.sidebar-product-list-item -->
        <?php endforeach; ?>
    </ul><!-- /.product-list -->
</div><!-- /.widget -->
<!-- ========================================= FEATURED PRODUCTS : END ========================================= -->