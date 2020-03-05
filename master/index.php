<?php
session_start();

// 各種phpファイルの呼び出し
require_once './../config.php';
require_once './functions/function.php';

// 処理部
// ログイン状態確認
check_login();

// ページに合わせたSELECT文作成

// viewファイル呼び出し
// $header, $side, $navi, $body, $footerの初期値設定
$header = './tpl/header/basic_header.php';
$side = './tpl/navi/sidebar.php';
$navi = './tpl/navi/navibar.php';
$main = './tpl/main/toppage.php';
$footer = './tpl/footer/basic_footer.php';

// ファイル呼び出し
require_once $header;
require_once $side;
require_once $navi;
require_once $main;
require_once $footer;
?>