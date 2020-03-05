// プラグイン集
$(function() {
    
    $('.modal').modaal({
        type: 'ajax',	// コンテンツのタイプを指定
        animation_speed: '500', 	// アニメーションのスピードをミリ秒単位で指定
        background: '#fff',	// 背景の色を白に変更
        overlay_opacity: '0.9',	// 背景のオーバーレイの透明度を変更
        fullscreen: 'true',	// フルスクリーンモードにする
        background_scroll: 'true',	// 背景をスクロールさせるか否か
        loading_content: 'Now Loading, Please Wait.',	// 読み込み時のテキスト表示
    });

    $('.drawer').drawer();
    $('.slider').slick({
        dots:true,
    });
    $('.front').on('touchend',function(){
        $('.front').removeClass('turn-4');
        $('.reverse').removeClass('turn-3');
        $('.front').addClass('turn-1');
        $('.reverse').addClass('turn-2');
        console.log(0);
    })
    $('.reverse').on('touchend',function(){
        $('.front').removeClass('turn-1');
        $('.reverse').removeClass('turn-2');
        $('.front').addClass('turn-4');
        $('.reverse').addClass('turn-3');
        console.log(0);
    })
    
});
