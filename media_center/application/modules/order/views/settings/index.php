<?php

$num_columns	= 11;
$can_delete	= $this->auth->has_permission('Order.Settings.Delete');
$can_edit		= $this->auth->has_permission('Order.Settings.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>
<div class='admin-box'>
	<h3>
		<?php echo lang('order_area_title'); ?>
	</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class='table table-striped'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					
					<th><?php echo lang('order_field_SHIPPING_TYPE_ID'); ?></th>
					<th><?php echo lang('order_field_PAYMENT_TYPE_ID'); ?></th>
					<th><?php echo lang('order_field_USER_ID'); ?></th>
					<th><?php echo lang('order_field_ADDRESS_ID'); ?></th>
					<th><?php echo lang('order_field_PAYMENT_ID'); ?></th>
					<th><?php echo lang('order_field_ORDER_STATUS'); ?></th>
					<th><?php echo lang('order_field_ORDER_DATE'); ?></th>
					<th><?php echo lang('order_field_DELIVERY_DATE'); ?></th>
					<th><?php echo lang('order_field_TOTAL'); ?></th>
					<th><?php echo lang('order_field_PAYMENT_KEY'); ?></th>
					<th><?php echo lang('order_field_PAYMENT_CODE'); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('order_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class='column-check'><input type='checkbox' name='checked[]' value='<?php echo $record->ORDER_ID; ?>' /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/settings/order/edit/' . $record->ORDER_ID, '<span class="icon-pencil"></span> ' .  $record->SHIPPING_TYPE_ID); ?></td>
				<?php else : ?>
					<td><?php e($record->SHIPPING_TYPE_ID); ?></td>
				<?php endif; ?>
					<td><?php e($record->PAYMENT_TYPE_ID); ?></td>
					<td><?php e($record->USER_ID); ?></td>
					<td><?php e($record->ADDRESS_ID); ?></td>
					<td><?php e($record->PAYMENT_ID); ?></td>
					<td><?php e($record->ORDER_STATUS); ?></td>
					<td><?php e($record->ORDER_DATE); ?></td>
					<td><?php e($record->DELIVERY_DATE); ?></td>
					<td><?php e($record->TOTAL); ?></td>
					<td><?php e($record->PAYMENT_KEY); ?></td>
					<td><?php e($record->PAYMENT_CODE); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('order_records_empty'); ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php
    echo form_close();
    
    ?>
</div>