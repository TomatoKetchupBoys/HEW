<?php
session_start();
//関数ファイル呼び出し
require_once "./functions/function.php";
//configファイル呼び出し
// require_once "../config.php";

// $header, $body, $footerの初期値設定
$header = './tpl/header/login_header.php';
$body = './tpl/main/login_main.php';
$footer = './tpl/footer/login_footer.php';


// ################### ボタンアクション ##########################
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