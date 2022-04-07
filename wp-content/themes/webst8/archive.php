<!--■■日付別の投稿一覧を表示するテンプレート-->
<!--ブラウザに書きを入力すると表示
http://localhost/wp01/西暦で任意の日付-->

<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?><!-- ヘッダーのファイルを読み込む -->

<div id="top-vg">
	<img src="<?php echo get_template_directory_uri();?>/images/pickup.jpg" alt="トップページ画像">
<!--    現在利用しているテーマ(親テーマ)のURLを出力してくれるワードプレス独自の関数-->
</div>


 <section id="content">
	 <div id="content-wrap" class="container">
         
 		<div id="main" class="col-md-9">
            <h1>記事一覧</h1>
            <hr>
 			 <?php 
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
              ?><!--記事の中身があるか確認-->
            
          <h2>
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              <!--get_permalink();　→　記事のパーマリンク(URL)を出力する。whileループ内で使用-->
              
          </h2>
          <section>
            <p>作成日時：<?php the_time('Y年n月j日'); ?></p>
            <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
            <!--the_time('Y年n月j日');	　日付を出力する関数。whileループ内で使用します。-->
            <!--the_excerpt()	記事本文の抜粋を出力する関数。whileループ内で使用します。-->
          </section>
          <hr>
            
              <?php 
                  endwhile;
              endif;
              ?><!--記事の中身があるか確認-->

         
 		<div id="sidebar" class="col-md-3">
			<?php get_sidebar(); ?><!-- サイドバーを読み込み -->
 		</div>
 	  </div>
         
     </div>
 </section>

 <?php get_footer(); ?><!-- フッターのファイルを読み込む -->