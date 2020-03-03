<?php
session_start();

// function.phpの呼び出し
require_once './functions/function.php';

// $header, $navi, $body, $footerの初期値設定
$header = './tpl/header/header.php';
$side = './tpl/navi/sidebar.php';
$navi = './tpl/navi/navibar.php';
$main = './tpl/main/toppage.php';
$footer = './tpl/footer/footer.php';

// viewファイル呼び出し
require_page($header, $side, $navi, $main, $footer);
?>