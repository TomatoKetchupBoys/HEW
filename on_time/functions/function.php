<?php
// #############################################
// 機能：viewファイルを呼び出す（一般ページの場合）
// 引数：header.phpパス、navi.phpパス、main.phpパス、footer.phpパス
// #############################################
function require_page($header, $navi, $main, $footer){
    // 表示ページの判断
    // GETで送られてきた場合
    if(isset($_GET['currentPage'])){
        $main = './tpl/main/'.$_GET['currentPage'].'.php';
    
        // ファイル呼び出し
        require_once $header;
        require_once $navi;
        require_once $main;
        require_once $footer;

        return 0;
    }

    // POSTで送られてきた場合
    if(isset($_POST['currentPage'])){
        $main = './tpl/main/'.$_POST['currentPage'].'.php';
    
        // ファイル呼び出し
        require_once $header;
        require_once $navi;
        require_once $main;
        require_once $footer;

        return 0;
    }

    // 最初にサイトに訪れた場合
    // ファイル呼び出し
    require_once $header;
    require_once $navi;
    require_once $main;
    require_once $footer;

    return 0;
}


// #############################################
// 機能：POSTされた情報をSESSIONに格納する
// 引数：情報の扱い（temp → 一時情報、perm → ログイン情報）
// #############################################
function set_session($info){
    // 送られてきた各値を$_SESSIONに格納
    foreach($_POST['array'] as $key => $value){
        $_SESSION[$info][$key] = $value;
    }

    // 余分にセットされた$_SESSION['page']の削除
    unset($_SESSION[$info]['page']);

    var_dump($_SESSION);

    return 0;


// #############################################
// 機能：mySQLに対してSELECTする
// 引数：SELECT文
// #############################################
function sql_select($sql){
    // 変数宣言
    $row = array();
    
    // データベース接続
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    // sqlの実行
    $result = mysqli_query($cn,$sql);
    while($to_array = mysqli_fetch_assoc($result)){
        $row[] = $to_array;
    }
    // データベース切断
    mysqli_close($cn);
    return $row;
}
// #############################################
// 機能：mySQLに対してINSERTする
// 引数：INSERT文
// #############################################
function sql_insert($sql){
    // データベース接続
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    // sqlの実行
    mysqli_query($cn,$sql);
    // データベース切断
    mysqli_close($cn);
    return 0;
}
// #############################################
// 機能：mySQLに対してUPDATEする
// 引数：UPDATE文
// #############################################
function sql_update($sql){
    // データベース接続
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    // sqlの実行
    mysqli_query($cn,$sql);
    // データベース切断
    mysqli_close($cn);
    return 0;
}
// #############################################
// 機能：mySQLに対してDELETEする
// 引数：DELETE文
// #############################################
function sql_delete($sql){
    // データベース接続
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    // sqlの実行
    mysqli_query($cn,$sql);
    // データベース切断
    mysqli_close($cn);
    return 0;
}
}
?>