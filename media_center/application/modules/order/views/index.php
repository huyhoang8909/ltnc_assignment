<?php

$hiddenFields = array('ORDER_ID',);
?>
<h1 class='page-header'>
    <?php echo lang('order_area_title'); ?>
</h1>
<?php if (isset($records) && is_array($records) && count($records)) : ?>
<table class='table table-striped table-bordered'>
    <thead>
        <tr>
            
            <th>SHIPPING TYPE ID</th>
            <th>PAYMENT TYPE</th>
            <th>USER ID</th>
            <th>ADDRESS ID</th>
            <th>PAYMENT ID</th>
            <th>ORDER STATUS</th>
            <th>ORDER DATE</th>
            <th>DELIVERY DATE</th>
            <th>TOTAL</th>
            <th>PAYMENT KEY</th>
            <th>PAYMENT CODE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($records as $record) :
        ?>
        <tr>
            <?php
            foreach($record as $field => $value) :
                if ( ! in_array($field, $hiddenFields)) :
            ?>
            <td>
                <?php
                if ($field == 'deleted') {
                    e(($value > 0) ? lang('order_true') : lang('order_false'));
                } else {
                    e($value);
                }
                ?>
            </td>
            <?php
                endif;
            endforeach;
            ?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php

endif; ?>