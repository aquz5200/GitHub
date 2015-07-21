<?php echo $this->Html->css( 'style.css' ); ?>
<div class="posts view" align="center">
<h2><?php echo __('投稿詳細'); ?></h2>
	<table class="sample_06" cellpadding="0" cellspacing="0">
		<tr><th><?php echo __('ID'); ?></th>
		<td>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('タイトル'); ?></th>
		<td>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('本文'); ?></th>
		<td>
			<?php echo h($post['Post']['content']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('作成日'); ?></th>
		<td>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</td></tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
	</ul>
</div>
