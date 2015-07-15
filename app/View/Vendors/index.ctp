<div class="vendors index">
	<h2><?php echo __('ベンダーリスト'); ?></h2>
	<table class="sample_05" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('パスワード'); ?></th>
			<th><?php echo $this->Paginator->sort('会社名'); ?></th>
			<th><?php echo $this->Paginator->sort('担当者'); ?></th>
			<th><?php echo $this->Paginator->sort('住所'); ?></th>
			<th><?php echo $this->Paginator->sort('電話'); ?></th>
			<th><?php echo $this->Paginator->sort('メール'); ?></th>
			<th><?php echo $this->Paginator->sort('料率'); ?></th>
			<th><?php echo $this->Paginator->sort('作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('更新日'); ?></th>
			<th><?php echo $this->Paginator->sort('ステータス'); ?></th>
			<th class="actions"><?php echo __('アクション'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vendors as $vendor): ?>
	<tr>
		<td><?php echo h($vendor['Vendor']['id']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['pw']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['company']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['responsible']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['address']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['tel']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['mail']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['rates']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['created']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['modified']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vendor['Vendor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vendor['Vendor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vendor['Vendor']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $vendor['Vendor']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Vendor'), array('action' => 'add')); ?></li>
	</ul>
</div>
