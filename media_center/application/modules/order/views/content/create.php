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
    <h3>Order</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('SHIPPING_TYPE_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_SHIPPING_TYPE_ID'), 'SHIPPING_TYPE_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='SHIPPING_TYPE_ID' type='text' name='SHIPPING_TYPE_ID' maxlength='11' value="<?php echo set_value('SHIPPING_TYPE_ID', isset($order->SHIPPING_TYPE_ID) ? $order->SHIPPING_TYPE_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('SHIPPING_TYPE_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('PAYMENT_TYPE') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='PAYMENT_TYPE'>
                        <input type='checkbox' id='PAYMENT_TYPE' name='PAYMENT_TYPE'  value='1' <?php echo set_checkbox('PAYMENT_TYPE', 1, isset($order->PAYMENT_TYPE) && $order->PAYMENT_TYPE == 1); ?> />
                        <?php echo lang('order_field_PAYMENT_TYPE'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('PAYMENT_TYPE'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('USER_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_USER_ID'), 'USER_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='USER_ID' type='text' name='USER_ID' maxlength='11' value="<?php echo set_value('USER_ID', isset($order->USER_ID) ? $order->USER_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('USER_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('ADDRESS_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_ADDRESS_ID'), 'ADDRESS_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='ADDRESS_ID' type='text' name='ADDRESS_ID' maxlength='11' value="<?php echo set_value('ADDRESS_ID', isset($order->ADDRESS_ID) ? $order->ADDRESS_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('ADDRESS_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('PAYMENT_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_PAYMENT_ID'), 'PAYMENT_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='PAYMENT_ID' type='text' name='PAYMENT_ID' maxlength='11' value="<?php echo set_value('PAYMENT_ID', isset($order->PAYMENT_ID) ? $order->PAYMENT_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('PAYMENT_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('ORDER_STATUS') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='ORDER_STATUS'>
                        <input type='checkbox' id='ORDER_STATUS' name='ORDER_STATUS'  value='1' <?php echo set_checkbox('ORDER_STATUS', 1, isset($order->ORDER_STATUS) && $order->ORDER_STATUS == 1); ?> />
                        <?php echo lang('order_field_ORDER_STATUS'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('ORDER_STATUS'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('ORDER_DATE') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_ORDER_DATE'), 'ORDER_DATE', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='ORDER_DATE' type='text' name='ORDER_DATE'  value="<?php echo set_value('ORDER_DATE', isset($order->ORDER_DATE) ? $order->ORDER_DATE : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('ORDER_DATE'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('DELIVERY_DATE') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_DELIVERY_DATE'), 'DELIVERY_DATE', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='DELIVERY_DATE' type='text' name='DELIVERY_DATE'  value="<?php echo set_value('DELIVERY_DATE', isset($order->DELIVERY_DATE) ? $order->DELIVERY_DATE : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('DELIVERY_DATE'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('TOTAL') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_TOTAL'), 'TOTAL', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='TOTAL' type='text' name='TOTAL' maxlength='8' value="<?php echo set_value('TOTAL', isset($order->TOTAL) ? $order->TOTAL : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('TOTAL'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('PAYMENT_KEY') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_PAYMENT_KEY'), 'PAYMENT_KEY', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='PAYMENT_KEY' type='text' name='PAYMENT_KEY' maxlength='20' value="<?php echo set_value('PAYMENT_KEY', isset($order->PAYMENT_KEY) ? $order->PAYMENT_KEY : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('PAYMENT_KEY'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('PAYMENT_CODE') ? ' error' : ''; ?>">
                <?php echo form_label(lang('order_field_PAYMENT_CODE'), 'PAYMENT_CODE', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='PAYMENT_CODE' type='text' name='PAYMENT_CODE' maxlength='20' value="<?php echo set_value('PAYMENT_CODE', isset($order->PAYMENT_CODE) ? $order->PAYMENT_CODE : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('PAYMENT_CODE'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('order_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/order', lang('order_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>