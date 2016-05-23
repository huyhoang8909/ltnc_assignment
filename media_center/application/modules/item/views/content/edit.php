<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('item_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($item->ITEM_ID) ? $item->ITEM_ID : '';

?>
<div class='admin-box'>
    <h3>Item</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('MANUFACTURER_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('item_field_MANUFACTURER_ID'), 'MANUFACTURER_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='MANUFACTURER_ID' type='text' name='MANUFACTURER_ID' maxlength='11' value="<?php echo set_value('MANUFACTURER_ID', isset($item->MANUFACTURER_ID) ? $item->MANUFACTURER_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('MANUFACTURER_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('PROMOTION_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('item_field_PROMOTION_ID'), 'PROMOTION_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='PROMOTION_ID' type='text' name='PROMOTION_ID' maxlength='11' value="<?php echo set_value('PROMOTION_ID', isset($item->PROMOTION_ID) ? $item->PROMOTION_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('PROMOTION_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('CATEGORY_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('item_field_CATEGORY_ID'), 'CATEGORY_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='CATEGORY_ID' type='text' name='CATEGORY_ID' maxlength='11' value="<?php echo set_value('CATEGORY_ID', isset($item->CATEGORY_ID) ? $item->CATEGORY_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('CATEGORY_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('ITEM_NAME') ? ' error' : ''; ?>">
                <?php echo form_label(lang('item_field_ITEM_NAME'), 'ITEM_NAME', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='ITEM_NAME' type='text' name='ITEM_NAME' maxlength='256' value="<?php echo set_value('ITEM_NAME', isset($item->ITEM_NAME) ? $item->ITEM_NAME : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('ITEM_NAME'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('ITEM_PRICE') ? ' error' : ''; ?>">
                <?php echo form_label(lang('item_field_ITEM_PRICE'), 'ITEM_PRICE', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='ITEM_PRICE' type='text' name='ITEM_PRICE' maxlength='10' value="<?php echo set_value('ITEM_PRICE', isset($item->ITEM_PRICE) ? $item->ITEM_PRICE : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('ITEM_PRICE'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('ITEM_QUANTITY') ? ' error' : ''; ?>">
                <?php echo form_label(lang('item_field_ITEM_QUANTITY'), 'ITEM_QUANTITY', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='ITEM_QUANTITY' type='text' name='ITEM_QUANTITY' maxlength='11' value="<?php echo set_value('ITEM_QUANTITY', isset($item->ITEM_QUANTITY) ? $item->ITEM_QUANTITY : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('ITEM_QUANTITY'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('IMAGE') ? ' error' : ''; ?>">
                <?php echo form_label(lang('item_field_IMAGE'), 'IMAGE', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='IMAGE' type='text' name='IMAGE' maxlength='55' value="<?php echo set_value('IMAGE', isset($item->IMAGE) ? $item->IMAGE : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('IMAGE'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('item_action_edit'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/item', lang('item_cancel'), 'class="btn btn-warning"'); ?>
            
            <?php if ($this->auth->has_permission('Item.Content.Delete')) : ?>
                <?php echo lang('bf_or'); ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('item_delete_confirm'))); ?>');">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('item_delete_record'); ?>
                </button>
            <?php endif; ?>
        </fieldset>
    <?php echo form_close(); ?>
</div>