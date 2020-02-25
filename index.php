<?php
session_start();
//関数ファイル呼び出し
// require_once "./func/function.php";
//configファイル呼び出し
// require_once "../config.php";

// $header, $body, $footerの初期値設定
$header = './tpl/header/header.php';
$body = './tpl/main/contract.php';
$footer = './tpl/footer/footer.php';


// // ################### ボタンアクション ##########################
// if (isset($_GET['exhibits_button'])) {
//     unlink('./images/tpl/*');
//     // 商品カテゴリ一覧取得
//     $categorys = get_product_category();
//     require_once './tpl/login/product/exhibits.php';
//     exit;
//   }

require_once $header;
require_once $body;
require_once $footer;