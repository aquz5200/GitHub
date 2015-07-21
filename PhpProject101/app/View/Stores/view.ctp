<?php echo $this->Html->css( 'style.css' ); ?>
<div class="stores view" align="center">
<h2><?php echo __('店舗詳細'); ?></h2>
	<table class="sample_06" cellpadding="0" cellspacing="0">
		<tr><th><?php echo __('ID'); ?></th>
		<td>
			<?php echo h($store['Store']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('店舗名'); ?></th>
		<td>
			<?php echo h($store['Store']['store_name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('配送センター'); ?></th>
		<td>
			<?php echo h($store['Store']['center']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('住所'); ?></th>
		<td>
			<?php echo h($store['Store']['store_add']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($store['Store']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($store['Store']['modified']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($store['Store']['status']); ?>
			&nbsp;
		</td></tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store'), array('action' => 'edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store'), array('action' => 'delete', $store['Store']['id']), array(), __('Are you sure you want to delete # %s?', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?> </li>
	</ul>
</div>
