<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('category_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($category->CATEGORY_ID) ? $category->CATEGORY_ID : '';

?>
<div class='admin-box'>
    <h3>Category</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('CATEGORY_CATEGORY_ID') ? ' error' : ''; ?>">
                <?php echo form_label(lang('category_field_CATEGORY_CATEGORY_ID'), 'CATEGORY_CATEGORY_ID', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='CATEGORY_CATEGORY_ID' type='text' name='CATEGORY_CATEGORY_ID' maxlength='11' value="<?php echo set_value('CATEGORY_CATEGORY_ID', isset($category->CATEGORY_CATEGORY_ID) ? $category->CATEGORY_CATEGORY_ID : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('CATEGORY_CATEGORY_ID'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('CATEGORY_NAME') ? ' error' : ''; ?>">
                <?php echo form_label(lang('category_field_CATEGORY_NAME') . lang('bf_form_label_required'), 'CATEGORY_NAME', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='CATEGORY_NAME' type='text' required='required' name='CATEGORY_NAME' maxlength='50' value="<?php echo set_value('CATEGORY_NAME', isset($category->CATEGORY_NAME) ? $category->CATEGORY_NAME : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('CATEGORY_NAME'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('CATEGORY_PRIORITY') ? ' error' : ''; ?>">
                <?php echo form_label(lang('category_field_CATEGORY_PRIORITY'), 'CATEGORY_PRIORITY', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='CATEGORY_PRIORITY' type='text' name='CATEGORY_PRIORITY' maxlength='4' value="<?php echo set_value('CATEGORY_PRIORITY', isset($category->CATEGORY_PRIORITY) ? $category->CATEGORY_PRIORITY : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('CATEGORY_PRIORITY'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('category_action_edit'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/category', lang('category_cancel'), 'class="btn btn-warning"'); ?>
            
            <?php if ($this->auth->has_permission('Category.Content.Delete')) : ?>
                <?php echo lang('bf_or'); ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('category_delete_confirm'))); ?>');">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('category_delete_record'); ?>
                </button>
            <?php endif; ?>
        </fieldset>
    <?php echo form_close(); ?>
</div>