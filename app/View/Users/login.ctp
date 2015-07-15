<div class="users index">
    <h2><?php echo __('ログイン'); ?></h2>

    <?php echo $this->Form->create('User'); ?>
    <?php echo $this->Form->label('User.email'); ?>
    <?php echo $this->Form->text('User.email'); ?>
    <?php echo $this->Form->label('User.password'); ?>
    <?php echo $this->Form->password('User.password'); ?>
    <?php echo $this->Form->end('ログイン'); ?>

<?php
echo $this->Html->link(__('New User'), array('action' => 'add'));
?>
</div>
