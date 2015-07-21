<?php echo $this->Html->css( 'style.css' ); ?>
<div class="users view">
<h2><?php echo __('ユーザー詳細'); ?></h2>
	<table class="sample_05" cellpadding="0" cellspacing="0">
	<tr><th><?php echo __('ID'); ?></th>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('アカウント名'); ?></th>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('メールアドレス'); ?></th>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td></tr>
	<tr><th><?php echo __('パスワード'); ?></th>
		<td>
			********
			&nbsp;
		</td></tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
