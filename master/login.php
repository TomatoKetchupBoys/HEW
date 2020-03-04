<?php
session_start();

// 各種phpファイルの呼び出し
require_once './../config.php';
require_once './functions/function.php';

// 処理部
// ログイン状態確認
if(isset($_SESSION['authority'])){
    header('Location: ./index.php');
    exit;
}

// 値の受け取り
$id = filter_input(INPUT_POST, 'id');
$password = filter_input(INPUT_POST, 'password');
$token = filter_input(INPUT_POST, 'token');

// POSTメソッドのときだけ処理
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // 入力されたIDからパスワードと権限をSELECT
    $sql = "SELECT password, authority_id FROM admin WHERE id = ".$id.";";
    $result = sql_select($sql);
    // tokenの有効性と、passwordの一致の確認
    if(check_token($token) && check_password($password, $result[0]['password'])){
        // 認証成功
        // セションIDの再生成
        session_regenerate_id(true);
        // 権限をセット
        $_SESSION['authority'] = $result[0]['authority_id'];
        // トップページに遷移
        header('Location: ./index.php');
        exit;
    }
    // 認証失敗
    http_response_code(403);
}

// viewファイル呼び出し
// $header, $body, $footerの初期値設定
$header = './tpl/header/simple_header.php';
$main = './tpl/main/login.php';
$footer = './tpl/footer/simple_footer.php';

// ファイル呼び出し
require_once $header;
require_once $main;
require_once $footer;
?>