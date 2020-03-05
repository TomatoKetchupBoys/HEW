<?php
session_start();

// 各種phpファイルの呼び出し
require_once './../config.php';
require_once './functions/function.php';

// 処理部
// ログイン状態確認
check_login();

// SELECT
$sql = 'SELECT * FROM refarence_time;';
$result = sql_select($sql);

// 追加ボタン押下時
if(isset($_POST['create'])){
    $msg = '';
    // SELECT
    $sql = 'SELECT id FROM refarence_time;';
    $result = sql_select($sql);
    foreach($result as $array){
        if($array['id'] == $_POST['id']){
            $msg = 'そのidは既に存在しています。<br>これ以降のidを一つずつ後ろにずらしますか？';
        }
    }
}

// 変更ボタン押下時

// 削除ボタン押下時

// viewファイル呼び出し
// $header, $side, $body, $footerの初期値設定
$header = './tpl/header/basic_header.php';
$side = './tpl/navi/sidebar.php';
$navi = './tpl/navi/navibar.php';
$main = './tpl/main/refarence_time.php';
$footer = './tpl/footer/basic_footer.php';

// ファイル呼び出し
require_once $header;
require_once $side;
require_once $main;
require_once $footer;
?>