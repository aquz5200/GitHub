<div class="buyers view">
<h2><?php echo __('Buyer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Given Name'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['given_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charged Store'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['charged_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsible Category'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['responsible_category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($buyer['Buyer']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Buyer'), array('action' => 'edit', $buyer['Buyer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Buyer'), array('action' => 'delete', $buyer['Buyer']['id']), array(), __('Are you sure you want to delete # %s?', $buyer['Buyer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Buyers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Buyer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
