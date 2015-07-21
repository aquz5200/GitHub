<?php echo $this->Html->css( 'style.css' ); ?>
<div class="stores form" align="center">
<?php echo $this->Form->create('Store'); ?>
		<legend><?php echo __('店舗追加'); ?></legend>
<table class="sample_06" cellpadding="0" cellspacing="0">
		<tr><th><?php echo __('店舗名'); ?></th>
		<td>
			<?php echo $this->Form->input('store_name', array('type'=>'text', 'label'=>false)); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('配送センター'); ?></th>
		<td>
			<?php echo $this->Form->input('center', array('type'=>'text', 'label'=>false)); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('店舗住所'); ?></th>
		<td>
			<?php echo $this->Form->input('store_add', array('type'=>'text', 'label'=>false)); ?>
			&nbsp;
		</td></tr>
	</table>
<?php echo $this->Form->end(__('登録')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?></li>
	</ul>
</div>
