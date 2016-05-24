<div class="widget">
    <h1 class="border">Sản phẩm mới </h1>
    <ul class="product-list">
        <?php foreach ($data['new_item'] as $new_item): ?>
            <li>

                <div class="row">

                    <div class="col-xs-4 col-sm-4 no-margin">
                        <a href="#" class="thumb-holder">
                            <img alt="" src="<?php echo base_url('item') . '/' . $new_item->IMAGE ?>" data-echo="<?php echo base_url('items') . '/' . $new_item->IMAGE ?>" />
                        </a>
                    </div>
                    <div class="col-xs-8 col-sm-8 no-margin">
                        <a href="#"><?php echo $new_item->ITEM_NAME ?> </a>
                        <div class="price">
                            <div class="price-prev"><?php echo $new_item->ITEM_PRICE ?></div>
                            <div class="price-current"><?php echo $new_item->ITEM_QUANTITY ?></div>
                        </div>
                    </div>  

                </div>
            </li>
        <?php endforeach; ?>


    </ul>
</div><!-- /.widget -->