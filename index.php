<?php
session_start();
//関数ファイル呼び出し
require_once "./functions/function.php";
//configファイル呼び出し
require_once "../config.php";

// $header, $body, $footerの初期値設定
$header = './tpl/header/header.php';
$main = './tpl/main/toppage.php';
$footer = './tpl/footer/footer.php';


// ################### ボタンアクション ##########################
if (isset($_POST['button_action'])) {
    $main = function_name($_POST['button_action']);
}

require_once $header;
require_once $main;
require_once $footer;