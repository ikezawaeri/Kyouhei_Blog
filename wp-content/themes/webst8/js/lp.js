//WP版jQueryでも$を使えるようにする
jQuery(function($) {

const matchMedia = window.matchMedia('(max-width:1023px)');

    if(matchMedia.matches){
    //スマホ・タブレット
        //ヘッダー　ハンバーガーメニュー
        $(function() {
            $(".menu-btn").on("click", function () {
                //ボタンの変化
                $(this).toggleClass('active');
                //メニューの変化
                $(".menu").toggleClass("open");
            });
        });

    }else{
    //PC
        //ヘッダー　ドロップダウン
        $(function() {
            $(".pull").mouseover(function() {
                $(this).children(".sub").stop().slideDown();
            });
            $(".pull").mouseout(function() {
                $(".sub").stop().slideUp();
            });
        });
    }

});