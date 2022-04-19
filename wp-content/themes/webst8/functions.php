<!--functions.phpとは、WordPressサイトの動作を制御したり、機能を追加することができるファイル-->

<?php
function webst8_setup() {
   //ここに関数の中身を記述します。
   add_theme_support( 'post-thumbnails' ); //post-thumbnails…アイキャッチ画像をON
    
    
register_post_type(
    'event',
    // 'supports'に'thumbnail'を追記
    array('supports' => array('title','editor','thumbnail'))
);
    
   add_theme_support( 'menus');  //メニュー機能をON
}
add_action( 'after_setup_theme', 'webst8_setup' );
//after_setup_themeアクションフック※に登録します。
//after_setup_theme(テーマ初期化のタイミング)にwebst8_setupという関数を実行


//▼LPページ用（WP版jQueryをlp.jsの前に読み込む）
function lp_scripts() {
	wp_enqueue_script( 'lp', get_template_directory_uri() . '/js/lp.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'lp_scripts' );




// WordPressでは、任意の機能をWordPress本体に引っ張り込む (hook into)ための「フック」という機能を提供しており、特定のタイミングで任意の関数を呼び出して作動させることができます。

// つまり、「〇〇の動作のタイミングに合わせて、〇〇の関数(機能)を実行させる。」ということができます。

// フックには「アクションフック」と「フィルターフック」の2つが用意されています。アクションフックの場合にはadd_action()、フィルターフックの場合にはadd_filter()を呼び出して、特定のフックに作成した関数を登録します。

// フックについて、説明しようとするとそれだけでとても長くなるのでここでは割愛します。詳しくは「プラグインAPI - WordPress Codex」や「WordPress フック」などで検索して調べてみてください。