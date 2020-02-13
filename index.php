<?php
session_start();
// ################### 前処理ファイル呼び出し ##########################
//関数ファイル呼び出し
require_once "./functions/function.php";
//configファイル呼び出し
require_once "../config.php";

// $header, $body, $footerの初期値設定
$header = './tpl/header/header.php';
$main = './tpl/main/toppage.php';
$footer = './tpl/footer/footer.php';


// ################### ボタンアクションの例 ##########################
if (isset($_POST['button_action'])) {
    // POST の値があるときこの分岐に入ります

    $main = function_name($_POST['button_action']);
    // POST の値を処理の関数に渡し、その戻り値を受け取ります
    // データベースアクセスなどは関数の中で行ってください

    $main = './tpl/main/button_action.php';
    // 処理後表示したいphpファイルを指定します
}


// ################### 後処理ファイル呼び出し ##########################
require_once $header;
require_once $main;
require_once $footer;