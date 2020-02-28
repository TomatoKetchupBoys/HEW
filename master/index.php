<?php
session_start();

// $header, $navi, $body, $footerの初期値設定
$header = './tpl/header/header.php';
$navi = './tpl/navi/navi.php';
$main = './tpl/main/toppage.php';
$footer = './tpl/footer/footer.php';

// viewファイル呼び出し
require_page($header, $navi, $main, $footer);
?>