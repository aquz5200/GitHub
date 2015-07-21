<?php echo $this->Html->css( 'style.css' ); ?>
<div class="stores index">
	<h2><?php echo __('店舗一覧'); ?></h2>
	<table class="sample_05" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('店舗名'); ?></th>
			<th><?php echo $this->Paginator->sort('配送センター'); ?></th>
			<th><?php echo $this->Paginator->sort('住所'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($stores as $store): ?>
	<tr>
		<td><?php echo h($store['Store']['id']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['store_name']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['center']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['store_add']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $store['Store']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $store['Store']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?></li>
	</ul>
</div>
