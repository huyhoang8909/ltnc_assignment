<?php

$hiddenFields = array('ITEM_ID',);
?>
<h1 class='page-header'>
    <?php echo lang('item_area_title'); ?>
</h1>
<?php if (isset($records) && is_array($records) && count($records)) : ?>
<table class='table table-striped table-bordered'>
    <thead>
        <tr>
            
            <th>MANUFACTURER</th>
            <th>PROMOTION</th>
            <th>CATEGORY</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>IMAGE</th>
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
                    e(($value > 0) ? lang('item_true') : lang('item_false'));
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

    echo $this->pagination->create_links();
endif; ?>