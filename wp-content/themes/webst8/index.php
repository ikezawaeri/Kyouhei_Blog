<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?><!-- ヘッダーのファイルを読み込む -->


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

        <h1 class="entry-title"><?php the_title(); ?>初心者向けのおすすめトレーニング方法</h1>
    </div>
</div>

    
        
 <section id="content">   
    <section id="ranking">
         <div class="tittle-section"><h2>Ranking</h2><h4>人気記事TOP10</h4></div>
        <br><br><br><br><br><br><br><br>
     </section>
     
     
 <div id="content-wrap" class="container">

    <div id="latest" class="col-md-9">
        <h1 class="text-center">個人事業主向けWebスクール ウェブストエイト</h1>
        <p>
            ウェブストエイトは自分でホームページ制作・Web集客したい方向けの
            少人数制個別指導のスクール・塾です。
            <br><br>
            継続6ヶ月コースとお試し1ヶ月コースから選択して受講できます。
        </p>
        <div class="row">
            <div class="col-md-6">
                <p><img src="<?php echo get_template_directory_uri();?>/images/6.jpg" alt="6ヶ月コース画像"></p>
                <h2 class="text-center">しっかり6ヶ月コース</h2>
                <p>ホームページ作成からWeb集客まで一通り習得して売上拡大したい方向けのコース</p>

            </div>
            <div class="col-md-6">
                <p><img src="<?php echo get_template_directory_uri();?>/images/1.jpg" alt="1ヶ月コース画像"></p>
                <h2 class="text-center">お試し1ヶ月コース</h2>
                <p>特定範囲のみ習いたい・まずは試しに受講してみたい方向けのコース</p>
            </div>
        </div>
        <p class="text-center">
            <br>
            お申し込みは<a href="https://webst8.com">こちらから</a>
            <br><br>
        </p>
        <div id="posts">
            <h1>記事一覧</h1>
            <hr>
              <?php 
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
              ?>
                  <h2>
                    <?php the_time('Y年n月j日'); ?>&nbsp;&nbsp;
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <hr>
              <?php 
                  endwhile;
              endif;
              ?>		
        </div>
    </div>

    <div id="sidebar" class="col-md-3">
        <?php get_sidebar(); ?><!-- サイドバーを読み込み -->
    </div>

</div>
 </section>

 <?php get_footer(); ?><!-- フッターのファイルを読み込む -->
