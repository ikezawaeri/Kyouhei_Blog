<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ウェブストエイト</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<?php wp_enqueue_script('jquery'); ?> <!--wordpress標準のjqueryを使用するための記述 -->
	<!-- bootstrapに名前を付けてjQueryの後にbootstrapを読み込む -->
	<?php wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jquery')); ?>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    
	<?php wp_head(); ?><!-- header.phpの</head>直前に入れる。これを忘れるとプラグインが動かない -->


</head>

<body>
	<header>
		<nav class="navbar navbar-default" style="margin-bottom:0;">
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
		      <span class="sr-only">メニュー</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		  </div>
		  <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
		  <?php
			$args = array(
				'menu_class' => 'nav navbar-nav', //menu_classは、メニューを構成する ul要素に適用するクラス名を指定するオプション
				'container' => false, //containerは、ulをラップするか、ラップする場合は何でラップするかを指定するオプション
			);
			wp_nav_menu($args);
			?>
		  </div>
        <div class="button white">
            <a href="">トレーニングを申し込む</a>
        </div>
		</nav>
	</header>
	
	