<!DOCTYPE HTML>
<html lang="ko">
<head>
<title></title>
<meta charset="utf-8" />
<meta name="author" content="christ" />
<meta property="og:image" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
</head>
<body>
<div data-role="page">
	<div data-role="header" style="overflow:hidden;">
		<a href="http://rundreamee.org" data-ajax="false" data-icon="" class="ui-btn-left">드림이</a>
		<h1>제자반 <?=$semester?>학기</h1>
<?php
	$btn_semester = ($semester==1) ? 2 : 1;
?>
	<a href='<?=$btn_semester?>' data-ajax="false" data-icon="arrow-u-r" class="ui-btn-right"><?=$btn_semester?>학기</a>

	</div><!-- /header -->
