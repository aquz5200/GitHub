<?php echo $this->Html->css( 'style.css' ); ?>
<div class="stores form" align="center">
<?php echo $this->Form->create('Store'); ?>
    <fieldset>
		<legend><?php echo __('店舗修正'); ?></legend>
            <?php
		echo $this->Form->input('id');
		echo $this->Form->input('store_name');
		echo $this->Form->input('center');
		echo $this->Form->input('store_add');
	?>
    </fieldset>
<?php echo $this->Form->end(__('更新')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Store.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Store.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?></li>
	</ul>
</div>
