<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title><?php print $head_title; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="/<?php echo path_to_theme();?>/favicon.ico"/>
	<link rel="bookmark" href="/<?php echo path_to_theme();?>/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/<?php echo path_to_theme();?>/css/bootstrap.css">
    <link rel="stylesheet" href="/<?php echo path_to_theme();?>/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/<?php echo path_to_theme();?>/js/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="/<?php echo path_to_theme();?>/css/common.css">
  <?php //print $styles; ?>
  <script src="/<?php echo path_to_theme();?>/js/jquery-2.1.1.min.js"></script>
</head>
<body>
  <?php //print $page_top; ?>
  <?php print $page; ?>
  <?php //print $scripts; ?>

  <!--youku video start-->
  <div class="videoPop" style="display:none;">
  	<div class="videoYouku" id="videoYouku"></div>
  	<a href="javascript:void(0);" class="popCloseBtn" onClick="closeSingleVideo();"><img src="/<?php echo path_to_theme();?>/images/btnClose.png"></a>
  </div>
  <!--youku video end-->
  <a href="javascript:void(0);" class="backToTop"><img src="/<?php echo path_to_theme();?>/images/backToTop.png"></a>
  <?php //print $page_bottom; ?>
  
  <div class="pcQcBg" style="display:none;"></div>
  <img src="/<?php echo path_to_theme();?>/images/pcQc.png" class="pcQcImg" style="display:none;">
  <a href="javascript:void(0);" class="popQcCloseBtn" onClick="closePcQc();" style="display:none;"><img src="/<?php echo path_to_theme();?>/images/btnClose.png"></a>
</body>
</html>
