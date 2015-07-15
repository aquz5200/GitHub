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
<title>マスタ管理</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
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
<script src="respond.min.js"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onLoad="MM_preloadImages('/ks/button/syouhintouroku-g.png','/ks/button/jyutyuujyoukyou-g.png','/ks/button/hattyuujyoukyou-g.png','/ks/button/teiansyouhinkanri-g.png','/ks/button/seikyuukanri-g.png','/ks/button/masterkanri-g.png','/ks/button/loginjyouhoukanri-g.png')">
<div class="gridContainer clearfix">
  <!--<div id="LayoutDiv1">追加の可変グリッドレイアウトの Div タグの挿入パネルを使用。 メモ : すべてのレイアウト Div タグは、"gridContainer" div タグ内に直接挿入する必要があります。 ネストされたレイアウト Div タグは現在サポートされていません。</div>-->
<div id="headerArea"><a href="http://210.140.164.145/ks/">九州屋受発注システム</a><br><Div Align="right">
＜ログイン名＞がログイン中
</Div>
<center>
  <table width="70%" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="14%"><a href="http://210.140.164.145/ks/regist.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','/ks/button/syouhintouroku-g.png',1)"><img id="Image1" src="/ks/button/syouhintouroku-b.png"></a></td>
    <td width="14%"><a href="http://210.140.164.145/ks/list.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','/ks/button/jyutyuujyoukyou-g.png',1)"><img id="Image2" src="/ks/button/jyutyuujyoukyou-b.png"></a></td>
    <td width="14%"><a href="http://210.140.164.145/ks/hattyu.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','/ks/button/hattyuujyoukyou-g.png',1)"><img id="Image3" src="/ks/button/hattyuujyoukyou-b.png"></a></td>
    <td width="14%"><a href="http://210.140.164.145/ks/teian-itiran.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','button/teiansyouhinkanri-g.png',1)"><img id="Image4" src="/ks/button/teiansyouhinkanri-b.png"></a></td>
    <td width="14%"><a href="http://210.140.164.145/ks/ng.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','/ks/button/seikyuukanri-g.png',1)"><img id="Image5" src="/ks/button/seikyuukanri-b.png"></a></td>
    <td width="14%"><a href="master" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','/ks/button/masterkanri-g.png',1)"><img id="Image6" src="/ks/button/masterkanri-g.png"></a></td>
    <td width="14%"><a href="http://210.140.164.145/ks/mypage.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','/ks/button/loginjyouhoukanri-g.png',1)"><img id="Image7" src="/ks/button/loginjyouhoukanri-b.png"></a></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">登録</td>
    <td bgcolor="#CCCCCC"><a href="http://210.140.164.145/ks/master-syouhin-list.html">リスト</a></td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table></center>
</div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
