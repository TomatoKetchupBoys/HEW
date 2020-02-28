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
// 機能：mainを入れ替える一連のajax処理を行う
// 引数：
// 戻値：
// #############################################
function ajaxProcess(formId){
    $.when(
        // mainProcessの処理の実行
        $.post({
            url: './mainProcess.php',
            dataType: 'html',
            data: {
                'page': 'basic',
                'currentPage': nextPage
            },
            timeout: 10000
        }),
        // 該当するmainを読み込む
        $.get({
            url: 'tpl/main/' + nextPage + '.php',
            dataType: 'html',
            timeout: 10000
        })
    )
    .done(function(data1, data2){
        // main部分を入れ替える
        $('#ajaxArea').html(data2[0]);
    })
    .fail(function(data){
    });

    return formVal;
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