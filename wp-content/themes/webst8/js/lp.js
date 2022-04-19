//WP版jQueryでも$を使えるようにする
jQuery(function($) {

const matchMedia = window.matchMedia('(max-width:1023px)');

    if(matchMedia.matches){
    //スマホ・タブレット
        //ヘッダー　ハンバーガーメニュー
        $(function() {
            // var nav = document.getElementById("menu");
            // var hamburger = document.getElementById("menu-btn");

            $('.menu-btn').on("click", function () {
                console.log(1);
                $('.menu').toggle("open");
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