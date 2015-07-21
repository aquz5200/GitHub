<?php echo $this->Html->css( 'style.css' ); ?>
<div class="users index">
  <div id="contentsArea" Align="center" >
  <h2><?php echo __('ログイン'); ?></h2>
    <?php echo $this->Form->create('User'); ?>
    <table class="sample_06" cellpadding="0" cellspacing="0">
    <tr><th><?php echo $this->Form->label('メールアドレス'); ?></th>
    <td><?php echo $this->Form->text('User.email'); ?></td></tr>
    <tr><th><?php echo $this->Form->label('パスワード'); ?></th>
    <td><?php echo $this->Form->password('User.password'); ?></td></tr>
    </table>
  <p><?php echo $this->Form->end('ログイン'); ?></p>
<?php
echo $this->Html->link(__('New User'), array('action' => 'add'));
?>
  </div>
</div>
