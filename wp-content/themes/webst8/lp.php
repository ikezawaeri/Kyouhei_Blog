<!DOCTYPE html>

<?php
/*
Template Name: lpページ
*/
?>

<html lang="ja">


<head>
    <title>Kyouhei Blog</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lp.css" media="(min-width:1024px)">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lpTablet.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lpMobile.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/lp.js"></script>
    <?php wp_head(); ?>
    <?php wp_footer(); ?>
</head>


<body>


    <header>
        <div class="wrapper">
            <div class="menu-bar-bg">
                <div class="menu-bar">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/lp/logo.png" alt="Kyouhei Blog">
                    <div class="menu-btn">
                        <span class="border"></span>
                        <span class="border"></span>
                        <span class="border"></span>
                    </div>
                </div>
            </div>
            <div class="menu">
                <nav>
                    <ul class="header-nav white">
                        <li><a href="" class="nav">ABOUT</a></li>
                        <li class="pull">
                            <a href="" class="nav">SERVICE</a>
                            <ul class="sub">
                                <li><a href="">トレーニングの特徴</a></li>
                                <li><a href="">トレーニング事例</a></li>
                                <li><a href="">料金プラン</a></li>
                            </ul>
                        </li>
                        <li><a href="" class="nav">ACCESS</a></li>
                        <li><a href="" class="nav">BLOG</a></li>
                    </ul>
                </nav>
                <div class="button white">
                    <a href="">トレーニングを申し込む</a>
                </div>
            </div>
        </div>
    </header>


    <section id="first-view" class="white">
        <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/lp/firstView.png" alt="">
        </div>
        <div class="background-mb"></div>
        <div class="content">
            <div class="wrapper">
                <div class="copy-en">
                    <p class="font">Best<br>Evidence<br>Training</p>
                </div>
                <div class="copy-jp">
                    <h1>エビデンスに基づく<br class="hidden-pc">ベストなトレーニング</h1>
                    <p class="text">瀬川恭平のトレーニング理論には、全て理由があります。<br>科学的根拠を基に、ひとりひとりに合ったベストな<br class="hidden-mb">トレーニング方法をご提案します。</p>
                </div>
            </div>
        </div>
        <div class="background"></div>
    </section>


    <section id="about">
        <div class="wrapper">
            <h2 class="title white">TRAINER</h2>
            <div class="name white">
                <h3>瀬川 恭平</h3>
                <p>Kyouhei Segawa</p>
            </div>
            <div class="profile">
                <div class="img-mb">
                    <img src="http://localhost/wp01/wp-content/uploads/2022/04/profile.jpg" alt="">
                </div>
                <div class="inner">
                    <div class="career">
                        <div class="inner">
                            <p class="red">経歴</p>
                        </div>
                        <div class="text">
                            <ul>
                                <li>2015 ー 2018</li>
                                <li>2018</li>
                                <li>2018 ー 2019</li>
                                <li>2020 ー</li>
                            </ul>
                            <ul>
                                <li>病院併設ジム勤務</li>
                                <li>東海大学 体育学部 体育学科卒業</li>
                                <li>パーソナルジム勤務</li>
                                <li>フリーのトレーナーとして活動</li>
                            </ul>
                        </div>
                    </div>
                    <div class="qualification">
                        <div class="inner">
                            <p class="red">保有資格</p>
                        </div>
                        <ul>
                            <li>NSCA認定 パーソナルトレーナー(CPT)</li>
                            <li>中学・高等学校教諭一種免許状(保健体育)</li>
                        </ul>
                    </div>
                    <div class="blog">
                        <div class="inner">
                        <h2>BLOG</h2>
                        <p>おすすめのトレーニング方法や、トレーニンググッズなどについてブログを書いています。</p>
                        </div>
                    </div>
                </div>
                <div class="img">
                    <img src="http://localhost/wp01/wp-content/uploads/2022/04/profile.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="blog-mb white">
        <div class="inner">
            <h2>BLOG</h2>
            <p>おすすめのトレーニング方法や、トレーニンググッズなどについてブログを書いています。</p>
        </div>
    </div>


    <section id="service1">
        <div class="background"></div>
        <div class="pt">
            <p>PERSONAL<br>TRAINING</p>
        </div>
        <div class="wrapper">
            <h2>SERVICE</h2>
            <h3>トレーニングの特徴</h3>
            <ul class="ul1">
                <li>
                    <span class=triangle></span>
                    <div class="point">
                        <p class="number">01</p>
                        <p class="title">オーダーメイドの<br>トレーニング</p>
                        <p class="text">体質やライフスタイルの違い、目的などに合わせ、一人一人に合ったオーダーメイドのメニューをご提供します。</p>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lp/point1.png" alt="オーダーメイドのトレーニング">
                    </div>
                </li>
                <li>
                    <span class=triangle></span>
                    <div class="point">
                        <p class="number">02</p>
                        <p class="title">科学的根拠に基づく<br>トレーニング</p>
                        <p class="text">筋トレの効果を出すには正しい理論が重要です。論文や書籍で得た知識を用い、根拠のあるトレーニングを提供します。</p>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lp/point1.png" alt="科学的根拠に基づくトレーニング">
                    </divclass=>
                </li>
            </ul>
            <ul class="ul2">
                <li>
                    <span class=triangle></span>
                    <div class="point">
                        <div class="inner">
                            <p class="number">03</p>
                            <p class="title">完璧を目指さない<br>指導内容</p>
                        </div>
                        <p class="text">完璧主義はモチベーションの低下を招くこともあります。完璧を目指さない指導でモチベーションの低下を防ぎます。</p>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lp/point1.png" alt="完璧を目指さない指導内容">
                    </div>
                </li>
                <li>
                    <span class=triangle></span>
                    <div class="point">
                        <div class="inner">
                            <p class="number">04</p>
                            <p class="title">美しいボディメイクを<br>実現する</p>
                        </div>
                        <p class="text">無闇にトレーニングしていても美しい体は作れません。必要な筋肉をピンポイントで刺激し、理想のボディメイクを実現します。</p>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lp/point1.png" alt="美しいボディメイクを実現する">
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section id="service2">
        <div class="wrapper">
            <h3>トレーニング事例</h3>
            <ul>
                <li>ここにブログ記事</li>
                <li>ここにブログ記事</li>
                <li>ここにブログ記事</li>
            </ul>
            <button>
                <a>事例をもっと見る</a>
            </button>
        </div>
    </section>


    <section id="service3">
        <div class="img">
            <img src="./images/lp/price-bg.png" alt="">
        </div>
        <div class="wrapper">
            <h3>料金プラン</h3>
            <div class="plan">
                <ul>
                    <li><?php the_field('Price1_title'); ?></li>
                    <li><?php the_field('Price1_text'); ?></li>
                    <li>
                        <span><?php the_field('Price1_plan1'); ?></span>
                        <span><?php the_field('Price1_price1'); ?></span>
                    </li>
                    <li>
                        <span><?php the_field('Price1_plan2'); ?></span>
                        <span><?php the_field('Price1_price2'); ?></span>
                    </li>
                    <li>
                        <span><?php the_field('Price1_plan3'); ?></span>
                        <span><?php the_field('Price1_price3'); ?></span>
                    </li>
                </ul>
                <ul>
                    <li><?php the_field('Price2_title'); ?></li>
                    <li><?php the_field('Price2_text'); ?></li>
                    <li>
                        <span><?php the_field('Price2_plan1'); ?></span>
                        <span><?php the_field('Price2_price1'); ?></span>
                    </li>
                    <li>
                        <span><?php the_field('Price2_plan2'); ?></span>
                        <span><?php the_field('Price2_price2'); ?></span>
                    </li>
                </ul>
            </div>
            <button>
                <span>トレーニングお申込み</span>
            </button>
        </div>
    </section>

    <section id="access">
        <div class="wrapper">
            <div>
                <h2>ACCESS</h2>
                <div>
                    <p>エニタイムフィットネスコトニアガーデン新川崎店</p>
                    <a href=""></a>
                </div>
                <div>
                    <p>エニタイムフィットネス武蔵中原</p>
                    <a href=""></a>
                </div>
            </div>
            <div>
                map
            </div>
        </div>
    </section>

    <footer>
        <p>©︎コピーライト</p>
    </footer>

</body>


</html>