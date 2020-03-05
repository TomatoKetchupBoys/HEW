<?php
if(!isset($_SESSION)){
session_start();
}


// ################### 前処理ファイル呼び出し ##########################
//関数ファイル呼び出し
require_once "./functions/function.php";
//configファイル呼び出し
// require_once "../config.php";


// .basicクリック時
if($_POST['page'] == 'basic'){
    // $_SESSION['currentPage']の更新
    $_SESSION['currentPage'] = $_POST['currentPage'];
}

// .simpleクリック時
if($_POST['page'] == 'simple'){
    // $_SESSION['prevPage']の更新
    $_SESSION['prevPage'] = $_SESSION['currentPage'];
}

// .backまたは.loginクリック時
if($_POST['page'] == 'back' || $_POST['page'] == 'login'){
    // $_SESSION['currentPage']の更新
    $_SESSION['currentPage'] = $_SESSION['prevPage'];

    // jsonの用意
    $array = array("page" => $_SESSION['prevPage']);
    $jsonStr = json_encode($array);
    echo $jsonStr;
}

// .loginクリック時
if($_POST['page'] == 'login'){
    // 送られてきた各値を$_SESSIONに格納
    set_session('perm');
}

// .formクリック時
if($_POST['page'] == 'form' || $_POST['page'] == 'search'){
    // 送られてきた各値を$_SESSIONに格納
    set_session('temp');
}
// .form以外クリック時、かつ$_SESSION['temp']がある時
elseif(isset($_SESSION['temp'])){
    // $_SESSION['temp']の初期化
    unset($_SESSION['temp']);
}

// .logoutクリック時
if($_POST['page'] == 'logout'){
    // $_SESSION['perm']の初期化
    unset($_SESSION['perm']);
}
?>
