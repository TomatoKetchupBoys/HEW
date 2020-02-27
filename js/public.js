$(function () {
    // .basicクリック時
    $(document).on('click', '.basic', function () {
            // nextPageの設定
            let nextPage = getPage(this);

            // ajax処理
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

            // .basicOnlyから.isHideを削除
            $('.basicOnly').removeClass('isHide');
        }
    );

    // .simpleクリック時
    $(document).on('click', '.simple', function(){
            // nextPageの設定
            let nextPage = getPage(this);
            
            // ajax処理
            $.when(
                // mainProcessの処理の実行
                $.post({
                    url: './mainProcess.php',
                    dataType: 'html',
                    data: {
                        'page': 'simple'
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

            // .basicOnlyに.isHideを付与
            $('.basicOnly').addClass('isHide');
        }
    );

    // // .backクリック時
    $(document).on('click', '.back', function(){
            // nextPageの設定
            let nextPage = '';
            
            // ajax処理
            $.when(
                // mainProcessの処理の実行
                $.post({
                    url: './mainProcess.php',
                    dataType: 'json',
                    data: {
                        'page': 'back'
                    },
                    timeout: 10000,
                    async: false
                })
                .done(function(data){
                    // nextPageの再設定
                    nextPage = data.page;
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

            // .basicOnlyから.isHideを削除
            $('.basicOnly').removeClass('isHide');
        }
    );

    // .formクリック時
    $(document).on('click', '.form', function(){
            // nextPageの設定
            let nextPage = getPage(this);

            // formの特定
            let formId = $(this).parents('form');

            // form内の各input要素のname属性とvalue値の取得（jsonオブジェクト化）
            let formVal = getForm(formId);
            formVal = JSON.stringify(formVal);
            formVal = $.parseJSON(formVal);
            
            // ajax処理
            $.when(
                // mainProcessの処理の実行
                $.post({
                    url: './mainProcess.php',
                    dataType: 'html',
                    data: {
                        'page': 'form',
                        'array': formVal
                        },
                    timeout: 10000
                }),
                // 該当するmainを読み込む
                $.ajax({
                    url: './tpl/main/' + nextPage + '.php',
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
        }
    );

    // .loginクリック時
    $(document).on('click', '.login', function(){
            // nextPageの設定
            let nextPage = '';

            // formの特定
            let formId = $(this).parents('form');

            // form内の各input要素のname属性とvalue値の取得（jsonオブジェクト化）
            let formVal = getForm(formId);
            formVal = JSON.stringify(formVal);
            formVal = $.parseJSON(formVal);
            
            // ajax処理
            $.when(
                // mainProcessの処理の実行
                $.post({
                    url: './mainProcess.php',
                    dataType: 'json',
                    data: {
                        'page': 'login',
                        'array': formVal
                        },
                    timeout: 10000
                })
                .done(function(data){
                    // nextPageの再設定
                    nextPage = data.page;
                }),
                // 該当するmainを読み込む
                $.ajax({
                    url: './tpl/main/' + nextPage + '.php',
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
            
            // .basicOnlyから.isHideを削除
            $('.basicOnly').removeClass('isHide');
        }
    );

    // .logoutクリック時
    $(document).on('click', '.logout', function(){
            // nextPageの設定
            let nextPage = getPage(this);
            
            // ajax処理
            $.when(
                // mainProcessの処理の実行
                $.post({
                    url: './mainProcess.php',
                    dataType: 'html',
                    data: {
                        'page': 'logout'
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
            
            // .basicOnlyから.isHideを削除
            $('.basicOnly').removeClass('isHide');
        }
    // );
});