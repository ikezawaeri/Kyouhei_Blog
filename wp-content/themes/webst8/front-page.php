<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?><!-- ヘッダーのファイルを読み込む -->


<!--■ファーストビュー-->
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<div class="top-cover  bg-image bg-attachment-fixed" style="background-image: url( https://segawakyohei.com/wp-content/uploads/2022/02/筋肉jpg.jpg );">
    <div class="top-cover-inner">
        <div class="entry-categories">
            <span class="screen-reader-text">カテゴリー</span>
            <a href="<?php echo get_template_directory_uri();?>category/supplement/" rel="category tag" class="categories">SUPPLEMENT</a>
            <p class="date-top">2022/4/1</p>


        </div><!-- .entry-categories -->

        <h1 class="entry-title"><?php the_title(); ?> front-page 初心者向けのおすすめトレーニング方法</h1>
    </div>
</div>

    
        
 <section id="content"> 
     <!--■人気記事TOP10-->
    <section id="ranking">
         <div class="tittle-section"><h2>Ranking</h2><h4>人気記事TOP10</h4></div>
        <br><br><br><br><br><br><br><br>
     </section>
     

     <div id="content-wrap">
         <!--　■最新記事　-->
         <section id="latest">
             <ul>
<!--
                <li>
                     <img class="img-latest">
                    <div class="content-latest">テスト</div>
                 </li>
-->
                 
                 <li>
                     <div class="wrapper-latest">
                         <div class="content-latest">テスト</div>
                     </div>
                 </li>
                 
                 <li>
                     <div class="wrapper-latest">
                         <div class="content-latest">テスト</div>
                     </div>
                 </li>
                 
                 <li>テスト</li>
                 <li>テスト</li>
             </ul>
             
         </section>
         
         <!--　■サイドバー　-->
        <div id="sidebar">
            <?php get_sidebar(); ?>
        </div>

    </div>
     
</section>
    
 <section id="archive">
	 <div id="content-wrap" class="container">
         
 		<div id="main" class="col-md-9">
            <h1>記事一覧</h1>
            <hr>
 			 <?php 
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
              ?><!--記事の中身があるか確認-->
            
             <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/images/noimage.png" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            <!--アイキャッチ画像を表示-->
            
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

 	  </div>
         
     </div>
 </section>

 <?php get_footer(); ?><!-- フッターのファイルを読み込む -->
