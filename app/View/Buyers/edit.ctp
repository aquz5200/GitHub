<div class="buyers form">
<?php echo $this->Form->create('Buyer'); ?>
<?php echo $this->Form->input('id'); ?>
<center>
    <h2><?php echo __('バイヤー編集'); ?></h2>
<table class="sample_06" cellpadding="0" cellspacing="0">
                    <tr><th><?php echo $this->Paginator->sort('パスワード'); ?></th>
			<td><?php echo $this->Form->input('password',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('姓'); ?></th>
			<td><?php echo $this->Form->input('surname',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('名'); ?></th>
			<td><?php echo $this->Form->input('given_name',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('担当店舗'); ?></th>
			<td><?php echo $this->Form->input('charged_store',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('電話'); ?></th>
			<td><?php echo $this->Form->input('tel',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('メール'); ?></th>
			<td><?php echo $this->Form->input('mail',array('label'=> '')); ?></td></tr>
                    <tr><th><?php echo $this->Paginator->sort('担当カテゴリ'); ?></th>
			<td><?php echo $this->Form->input('responsible_category',array('label'=> '')); ?></td></tr>
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
