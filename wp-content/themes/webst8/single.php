<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?><!-- ヘッダーのファイルを読み込む -->

<div id="top-vg">
	<img src="<?php echo get_template_directory_uri();?>/images/pickup.jpg" alt="トップページ画像">
<!--    現在利用しているテーマ(親テーマ)のURLを出力してくれるワードプレス独自の関数-->
</div>


 <section id="content">
	 <div id="content-wrap" class="container">
         
         <!--固定ページの中身-->
 		<div id="main" class="col-md-9">
 			 <?php 
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
              ?><!--記事の中身があるか確認-->
            
                  <h1><?php the_title(); ?></h1><!--記事のタイトルを出力-->
                  <section>
                    <?php the_content(); ?><!--記事の本文を出力-->
                  </section>
            
              <?php 
                  endwhile;
              endif;
              ?><!--記事の中身があるか確認-->
 		</div>
         <!--固定ページの中身-->
         
 		<div id="sidebar" class="col-md-3">
			<?php get_sidebar(); ?><!-- サイドバーを読み込み -->
 		</div>
 	</div>
 </section>

 <?php get_footer(); ?><!-- フッターのファイルを読み込む -->