<?php
// #############################################
// 機能：viewファイルを呼び出す（一般ページの場合）
// 引数：header.phpパス、navi.phpパス、main.phpパス、footer.phpパス
// #############################################
function require_page($header, $navi, $main, $footer){
    // 表示ページの判断
    // GETで送られてきた場合
    if(isset($_GET['page'])){
        $main = './tpl/main/'.$_GET['page'].'.php';
    }

    // POSTで送られてきた場合
    if(isset($_POST['page'])){
        $main = './tpl/main/'.$_POST['page'].'.php';
    }

    // ファイル呼び出し
    require_once $header;
    require_once $navi;
    require_once $main;
    require_once $footer;

    return 0;
}


// #############################################
// 機能：mySQLに対してSELECTする
// 引数：
// #############################################
function sql_select($header, $navi, $main, $footer){
    // データベース接続
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');

    return 0;
}
?>