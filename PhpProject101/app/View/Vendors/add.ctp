<div id="contentsArea" align="center"><br />
    <h2>ベンダーマスタ</h2>
<?php echo $this->Form->create('Vendor'); ?>
  <table class="sample_06" width="60%" border="0" cellspacing="3" cellpadding="3" >
  <tr>
    <td bgcolor="#CCCCCC">パスワード</td>
    <td><?php echo $this->Form->input('pw',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">会社名</td>
    <td>
      <?php echo $this->Form->input('company',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">担当者</td>
    <td>
      <?php echo $this->Form->input('responsible',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">所在地</td>
    <td>
      <?php echo $this->Form->input('address',array('label'=> '')); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">取扱カテゴリ</td>
    <td>
      <?php echo $this->Form->input('category',array('label'=> '')); ?>
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
    <td bgcolor="#CCCCCC">提案可能店舗</td>
    <td>

    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">料率</td>
    <td>
      <?php echo $this->Form->input('rates',array('label'=> '')); ?>
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

		<legend><?php echo __('Add Vendor'); ?></legend>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?></li>
	</ul></div>
