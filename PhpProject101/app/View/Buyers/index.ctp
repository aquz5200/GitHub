<?php echo $this->Html->css( 'style.css' ); ?>
<div class="buyers index">
	<h2><?php echo __('バイヤー一覧'); ?></h2>
	<table class="sample_05" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('パスワード'); ?></th>
			<th><?php echo $this->Paginator->sort('姓'); ?></th>
			<th><?php echo $this->Paginator->sort('名'); ?></th>
			<th><?php echo $this->Paginator->sort('担当店舗'); ?></th>
			<th><?php echo $this->Paginator->sort('電話番号'); ?></th>
			<th><?php echo $this->Paginator->sort('メールアドレス'); ?></th>
			<th><?php echo $this->Paginator->sort('担当カテゴリ'); ?></th>
			<th class="actions"><?php echo __('アクション'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($buyers as $buyer): ?>
	<tr>
		<td><?php echo h($buyer['Buyer']['id']); ?>&nbsp;</td>
		<td>********&nbsp;</td>
		<td><?php echo h($buyer['Buyer']['surname']); ?>&nbsp;</td>
		<td><?php echo h($buyer['Buyer']['given_name']); ?>&nbsp;</td>
		<td><?php echo h($buyer['Buyer']['charged_store']); ?>&nbsp;</td>
		<td><?php echo h($buyer['Buyer']['tel']); ?>&nbsp;</td>
		<td><?php echo h($buyer['Buyer']['mail']); ?>&nbsp;</td>
		<td><?php echo h($buyer['Buyer']['responsible_category']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $buyer['Buyer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $buyer['Buyer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $buyer['Buyer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $buyer['Buyer']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Buyer'), array('action' => 'add')); ?></li>
	</ul>
</div>
