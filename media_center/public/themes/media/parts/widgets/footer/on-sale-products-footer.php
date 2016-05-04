<!-- ============================================================= FEATURED PRODUCTS ============================================================= -->
<div class="widget">
    <h2><?php echo $items->CATEGORY_NAME ?></h2>
    <div class="body">
        <ul>
            <?php foreach ($items->products as $item): ?>
            <li>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 no-margin">
                        <a href="<?php echo base_url('item').'/'.$item->ITEM_ID ?>"><?php echo $item->ITEM_NAME ?></a>
                        <div class="price">
                            <div class="price-prev">$<?php echo $item->ITEM_PRICE ?>.00</div>
                        </div>
                    </div>  

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <a href="#" class="thumb-holder">
                            <img alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                        </a>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
            
        </ul>
    </div><!-- /.body -->
</div> <!-- /.widget -->
<!-- ============================================================= FEATURED PRODUCTS : END ============================================================= -->