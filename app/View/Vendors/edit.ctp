<div class="vendors form">
<?php echo $this->Form->create('Vendor'); ?>
<center>
    <h2><?php echo __('ベンダー編集'); ?></h2>
<table class="sample_06" cellpadding="0" cellspacing="0">
                    <tr><th><?php echo $this->Paginator->sort('パスワード'); ?></th>
			<td><?php echo $this->Form->input('pw',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('会社名'); ?></th>
			<td><?php echo $this->Form->input('company',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('担当者'); ?></th>
			<td><?php echo $this->Form->input('responsible',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('住所'); ?></th>
			<td><?php echo $this->Form->input('address',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('電話'); ?></th>
			<td><?php echo $this->Form->input('tel',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('メール'); ?></th>
			<td><?php echo $this->Form->input('mail',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('料率'); ?></th>
			<td><?php echo $this->Form->input('rates',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('ステータス'); ?></th>
			<td><?php echo $this->Form->input('status',array('label'=> '')); ?></td></tr>
</table>
    <p><?php echo $this->Form->end(__('更新')); ?></p>
</center>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vendor.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vendor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?></li>
	</ul>
</div>
