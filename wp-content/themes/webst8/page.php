<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?><!-- ヘッダーのファイルを読み込む -->

 <section id="content">
	 <div id="content-wrap" class="container">
 		<div id="main" class="col-md-9">

      <h1>固定ページpage.phpです。</h1><!-- 固定ページを表示 -->

 		</div>
 		<div id="sidebar" class="col-md-3">
			<?php get_sidebar(); ?><!-- サイドバーを読み込み -->
 		</div>
 	</div>
 </section>

 <?php get_footer(); ?><!-- フッターのファイルを読み込む -->
