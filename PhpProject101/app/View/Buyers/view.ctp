<?php echo $this->Html->css( 'style.css' ); ?>
<div class="buyers view" align="center">
<h2><?php echo __('バイヤー詳細'); ?></h2>
	<table class="sample_06" cellpadding="0" cellspacing="0">
		<tr><th><?php echo __('ID'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('パスワード'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['password']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('姓'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['surname']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('名'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['given_name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('担当店舗'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['charged_store']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('電話番号'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['tel']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('メールアドレス'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['mail']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('担当カテゴリー'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['responsible_category']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['modified']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($buyer['Buyer']['status']); ?>
			&nbsp;
		</td></tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Buyer'), array('action' => 'edit', $buyer['Buyer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Buyer'), array('action' => 'delete', $buyer['Buyer']['id']), array(), __('Are you sure you want to delete # %s?', $buyer['Buyer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Buyers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Buyer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
