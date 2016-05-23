<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('order_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($order->ORDER_ID) ? $order->ORDER_ID : '';

?>
<div class='admin-box'>
    <?php if (isset($order_items) && is_array($order_items) && count($order_items)) : ?>
    <table class='table table-striped table-bordered'>
        <thead>
            <tr>
                
                <th>SHIPPING TYPE</th>
                <th>ADDRESS</th>
                <th>PHONE</th>
                <th>ORDER DATE</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order_items as $record) : ?>
            <tr>
                <td><?php e($record->SHIPPING_TYPE_NAME); ?></td>
                <td><?php e($record->address); ?></td>
                <td><?php e($record->phone); ?></td>
                <td><?php e($record->ORDER_DATE); ?></td>
                <td><?php e($record->TOTAL); ?></td>
            </tr>
            <tr>
                <td colspan="5">
                    <?php foreach ($record->items as $item) : ?>
                        <div class="row-fluid">
                            <div class="span1">
                                <a href="#" class="qty"><?php e($item->AMOUNT) ?> x</a>
                            </div>

                            <div class="span9">
                                <div class="title"><a href="#"><?php e($item->ITEM_NAME) ?></a></div>
                                <div class="brand"><?php e($item->MANUFACTURER_NAME) ?></div>
                            </div>

                            <div class="span2">
                                <div class="price">$<?php e($item->ITEM_PRICE * $item->AMOUNT) ?></div>
                            </div>
                        </div><!-- /.order-item -->
                    <?php endforeach; ?>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>

            <div class="control-group<?php echo form_error('ORDER_STATUS') ? ' error' : ''; ?>">
                 <?php echo form_label(lang('order_field_ORDER_STATUS'), 'ORDER_STATUS', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <select id='ORDER_STATUS' name='ORDER_STATUS'>
                        <option value="PROCESSING" <?php if ($order->ORDER_STATUS == 'PROCESSING') echo 'selected' ?> >PROCESSING</option>
                        <option value="CONFRIMED" <?php if ($order->ORDER_STATUS == 'CONFIRMED') echo 'selected' ?>>CONFIRMED</option>
                        <option value="COMPLETED" <?php if ($order->ORDER_STATUS == 'COMPLETED') echo 'selected' ?> >COMPLETED</option>
                    </select>
                    <span class='help-inline'><?php echo form_error('ORDER_STATUS'); ?></span>
                </div>
            </div>

        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('order_action_edit'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/order', lang('order_cancel'), 'class="btn btn-warning"'); ?>
            
            <?php if ($this->auth->has_permission('Order.Content.Delete')) : ?>
                <?php echo lang('bf_or'); ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('order_delete_confirm'))); ?>');">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('order_delete_record'); ?>
                </button>
            <?php endif; ?>
        </fieldset>
    <?php echo form_close(); ?>
</div>