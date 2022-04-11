
const matchMedia = window.matchMedia('(max-width:1023px)');

    if(matchMedia.matches){
    //スマホ・タブレット
        //ヘッダー　ハンバーガーメニュー

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
