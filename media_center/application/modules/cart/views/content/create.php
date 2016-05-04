<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('cart_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($cart->CART_ID) ? $cart->CART_ID : '';

?>
<div class='admin-box'>
    <h3>Cart</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('USER_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('cart_field_USER_ID') . lang('bf_form_label_required'), 'USER_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='USER_ID' type='text' required='required' name='USER_ID' maxlength='11' value="<?php echo set_value('USER_ID', isset($cart->USER_ID) ? $cart->USER_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('USER_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('STATUS') ? ' error' : ''; ?>">
                <?php echo form_label(lang('cart_field_STATUS') . lang('bf_form_label_required'), 'STATUS', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='STATUS' type='text' required='required' name='STATUS' maxlength='10' value="<?php echo set_value('STATUS', isset($cart->STATUS) ? $cart->STATUS : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('STATUS'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('cart_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/cart', lang('cart_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>