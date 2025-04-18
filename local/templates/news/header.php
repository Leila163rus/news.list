<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php $APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.604825ed.ico" />
  <!--<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/template_styles.css" />-->

  <?php $APPLICATION->ShowHead();?>
		
</head>
<body>
	<div id="panel"><?php $APPLICATION->ShowPanel();?></div>
