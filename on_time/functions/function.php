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
}
?>