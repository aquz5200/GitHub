<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
echo $this->Html->css( 'style1.css' );
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>九州屋受発注システム</title>
<link href="style1.css" rel="stylesheet" type="text/css">
<!--
ファイルの先頭の HTML タグを囲む条件付きコメントの詳細については、以下を参照 :
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Modernizr (http://www.modernizr.com/) のカスタマイズされたビルドを使用している場合は、以下を実行 :
* js へのリンクをここに挿入
* html5shiv への以下のリンクを削除
* 先頭の html タグに「js 以外の」クラスを追加
* Modernizr ビルドに MQ Polyfill を含めた場合は、respond.min.js へのリンクも削除可能
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<div class="gridContainer clearfix">
  <!--<div id="LayoutDiv1">追加の可変グリッドレイアウトの Div タグの挿入パネルを使用。 メモ : すべてのレイアウト Div タグは、"gridContainer" div タグ内に直接挿入する必要があります。 ネストされたレイアウト Div タグは現在サポートされていません。</div>-->
<div id="headerArea"><a href="/cake2">九州屋受発注システム</a><br><Div Align="right">
<?php if ($auth->loggedIn()):?>
ようこそ<?php echo h($auth->user('username'));?>様&nbsp;|&nbsp;<a href="/cake2/users/logout">ログオフ</a>&nbsp;&nbsp;
<?php endif;?>
</Div>
<center>
  <ul id="menu-bar">
 <li><a href="#">商品登録</a>
  <ul>
   <li><a href="#">新規商品検索</a></li>
   <li><a href="#">商品検索</a></li>
  </ul>
 </li>
 <li><a href="#">受注状況</a>
  <ul>
   <li><a href="#">提案申請中</a></li>
   <li><a href="#">注文分</a></li>
  </ul>
 </li>
 <li><a href="#">発注状況</a>
  <ul>
   <li><a href="#">注文分</a></li>
   <li><a href="#">注文検索</a></li>
  </ul>
 </li>
 <li><a href="#">提案商品管理</a>
  <ul>
   <li><a href="#">提案商品一覧</a></li>
   <li><a href="#">受託待</a></li>
  </ul>
 </li>
 <li><a href="#">請求管理</a>
  <ul>
   <li><a href="#">納品チェック</a></li>
   <li><a href="#">修正分</a></li>
  </ul>
 </li>
 <li><a href="#">在庫管理</a>
  <ul>
   <li><a href="#">入荷登録</a></li>
   <li><a href="#">リスト</a></li>
   <li><a href="#">提案登録</a></li>
   <li><a href="#">分荷登録</a></li>
  </ul>
 </li>
 <li><a href="#">センター管理</a>
  <ul>
   <li><a href="#">センター管理</a></li>
   <li><a href="#">転送管理</a></li>
  </ul>
 </li>
 <li><a href="#">マスタ登録</a>
  <ul>
   <li><a href="/cake2/buyers">バイヤーマスタ</a></li>
   <li><a href="/cake2/vendors">ベンダーマスタ</a></li>
   <li><a href="#">店舗担当者マスタ</a></li>
   <li><a href="/cake2/stores">店舗マスタ</a></li>
   <li><a href="#">商品マスタ</a></li>
   <li><a href="/cake2/categories">カテゴリマスタ</a></li>
   <li><a href="#">配送センター担当者マスタ</a></li>
   <li><a href="#">注文日設定</a></li>
   <li><a href="/cake2/posts">新着情報登録</a></li>
  </ul>
 </li>
</ul></center>
</div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

<table class="sample_06" align="center" cellpadding="0" cellspacing="0">
<tr>
    <th>タイトル</th>
    <th>作成日</th>
</tr>
<?php foreach ($news as $post): ?>
    <tr>
        <td><?php echo $this->Html->link(h($post['title']), array('controller' => 'posts','action' => 'view', $post['id'])); ?>&nbsp;</td>       
        <td><?php echo h($post['created']); ?>&nbsp;</td>
    </tr>
<?php endforeach; ?>
</table>

</body>
</html>
