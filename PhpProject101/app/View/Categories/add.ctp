<?php echo $this->Html->css( 'style.css' ); ?>
<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('カテゴリー追加'); ?></legend>
	<?php
		echo $this->Form->input('カテゴリー名');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('登録')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
