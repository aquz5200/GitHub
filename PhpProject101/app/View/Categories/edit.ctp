<?php echo $this->Html->css( 'style.css' ); ?>
<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('カテゴリー修正'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('カテゴリー名');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('更新')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
