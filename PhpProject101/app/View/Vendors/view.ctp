<?php echo $this->Html->css( 'style.css' ); ?>
<div class="vendors view">
<h2><?php echo __('ベンダー詳細'); ?></h2>
	<table class="sample_05" cellpadding="0" cellspacing="0">
	<tr><th><?php echo __('ID'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['id']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('パスワード'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['pw']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('会社名'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['company']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('担当者'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['responsible']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('住所'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['address']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('電話番号'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['tel']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('メールアドレス'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['mail']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('料率'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['rates']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['created']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['modified']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($vendor['Vendor']['status']); ?>
			&nbsp;
		</td></tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vendor'), array('action' => 'edit', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vendor'), array('action' => 'delete', $vendor['Vendor']['id']), array(), __('Are you sure you want to delete # %s?', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
