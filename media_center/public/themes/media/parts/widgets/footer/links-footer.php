<!-- ============================================================= LINKS FOOTER ============================================================= -->
<div class="link-widget">
    <div class="widget">
        <h3>Sản phẩm mới</h3>
        <ul>
           <?php foreach ($data['new_item'] as $new_item): ?>
                <li><a  href="<?php echo base_url('item').'/'.$new_item->ITEM_ID ?>"><?php echo $new_item->ITEM_NAME ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Khuyến mãi</h3>
        <ul>
            <?php foreach ($data['sale_item'] as $sale_item): ?>
                <li><a  href="<?php echo base_url('item').'/'.$sale_item->ITEM_ID ?>"><?php echo $sale_item->ITEM_NAME ?></a></li>
            <?php endforeach; ?>


        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Nhiều người mua</h3>
        <ul>
            <?php foreach ($data['common_item'] as $common_item): ?>
                <li><a  href="<?php echo base_url('item').'/'.$common_item->ITEM_ID ?>"><?php echo $common_item->ITEM_NAME ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->
<!-- ============================================================= LINKS FOOTER : END ============================================================= -->