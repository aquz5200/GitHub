<div id="contentsArea" align="center"><br />
    <h2>バイヤーマスタ</h2>
<?php echo $this->Form->create('Buyer'); ?>
  <legend><?php echo __('Add Buyer'); ?></legend>
  <table class="sample_06" width="60%" border="0" cellspacing="3" cellpadding="3" >
  <tr>
    <td bgcolor="#CCCCCC">パスワード</td>
    <td><?php echo $this->Form->input('pw',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
      <td bgcolor="#CCCCCC">姓</td>
    <td>
      <?php echo $this->Form->input('surname',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">名</td>
    <td>
      <?php echo $this->Form->input('given_name',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">担当店舗</td>
    <td>
      <?php echo $this->Form->input('charged_store',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">連絡先</td>
    <td>
      <?php echo $this->Form->input('tel',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">メールアドレス</td>
    <td>
      <?php echo $this->Form->input('mail',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
      <td bgcolor="#CCCCCC">担当カテゴリ</td>
    <td>
      <?php echo $this->Form->input('responsible_category',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">ステータス</td>
    <td>
      <?php echo $this->Form->input('status',array('label'=> '')); ?>
    </td>
  </tr>
</table>
<br />
<?php echo $this->Form->end(__('登録')); ?>
<br />
</div>


	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?></li>
	</ul></div>
