<div class="stores view">
<h2><?php echo __('Store'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($store['Store']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store Name'); ?></dt>
		<dd>
			<?php echo h($store['Store']['store_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Center'); ?></dt>
		<dd>
			<?php echo h($store['Store']['center']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store Add'); ?></dt>
		<dd>
			<?php echo h($store['Store']['store_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($store['Store']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($store['Store']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($store['Store']['status']); ?>
			&nbsp;
		</dd>
	</dl>
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
