<?php echo $this->Html->css( 'style.css' ); ?>
<div class="categories view" align="center">
<h2><?php echo __('カテゴリー詳細'); ?></h2>
	<table class="sample_06" cellpadding="0" cellspacing="0">
		<tr><th><?php echo __('ID'); ?></th>
		<td>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('カテゴリー名'); ?></th>
		<td>
			<?php echo h($category['Category']['category']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('登録日'); ?></th>
		<td>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
