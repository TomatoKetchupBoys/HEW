// #############################################
// 機能：特定の要素のクラスから遷移先のページ名を取得する
// 引数：要素
// 戻値：次に取得すべきmainページ名
// #############################################
function getPage(val){
    let result = $(val).attr('class');
    result = result.match(/\s*to[A-Z][a-z_\d]*/g);
    result = result[0].replace(/\sto/, '');
    result = result.toLowerCase();

    return result;
}


// #############################################
// 機能：slickを呼び出す関数
// 引数：
// 戻値：
// #############################################
function slicker(formId){
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

    return 0;
}


// #############################################
// 機能：form内のinput要素のname属性とvalue属性をそれぞれkeyとvalueにして連想配列に格納する
// 引数：formタグのid名
// 戻値：form内のinput要素のname属性とvalue属性をそれぞれkeyとvalueにした連想配列
// #############################################
function getForm(formId){
    // 配列の宣言
    let formVal = {};

    // form内のinputの数だけ繰り返し
    $(formId).find('input').each(function(i, elem){
        // inputのname属性とvalue値を取得
        let key = $(elem).attr('name');
        let val = $(elem).val();

        // 連想配列に格納
        formVal[key] = val;
    })

    return formVal;
}