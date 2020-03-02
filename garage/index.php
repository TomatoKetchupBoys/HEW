<?php
session_start();

// $_POST['page']と$_POST['currentPage']の初期設定
$_POST['page'] = 'basic';
$_POST['currentPage'] = 'toppage';
$_SESSION['prevPage'] = '';

// mainページで利用する主処理の呼び出し
require_once "./mainProcess.php";

// $header, $navi, $body, $footerの初期値設定
$header = './tpl/header/header.php';
$navi = './tpl/navi/navi.php';
$main = './tpl/main/toppage.php';
$footer = './tpl/footer/footer.php';

// viewファイル呼び出し
require_page($header, $navi, $main, $footer);
