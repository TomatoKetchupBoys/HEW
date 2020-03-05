<?php
session_start();

// 各種phpファイルの呼び出し
require_once './../config.php';
require_once './functions/function.php';

// 処理部
// ログイン状態確認
check_login();

// 変数宣言
$modalParam = '';
$id = 0;

// 追加ボタン押下時
if(isset($_POST['create'])){
    $modalParam = 'create';
    // 値の受け取り
    $id = $_POST['id'];

    // SELECT
    $sql = 'SELECT id FROM refarence_time;';
    $idResult = sql_select($sql);
    // idがかぶってないか確認
    foreach($idResult as $array){
        if($array['id'] == $id){
            $modalParam = 'same id';
        }
    }
}

// 変更ボタン押下時
if(isset($_POST['update'])){
    $modalParam = 'update';
    // 値の受け取り
    $id = $_POST['id'];
    $currentId = $_POST['currentId'];

    // SELECT
    $sql = 'SELECT id FROM refarence_time;';
    $idResult = sql_select($sql);
    // idがかぶってないか確認
    foreach($idResult as $array){
        if($array['id'] == $id){
            $modalParam = 'same id';
        }
    }
}

// 削除ボタン押下時
if(isset($_POST['delete'])){
    // 値の受け取り
    $id = $_POST['id'];

    $modalParam = 'delete';
}

// confirmShiftボタン押下時
if(isset($_POST['confirmShift'])){
    // 値の受け取り
    $id = $_POST['id'];
    $minute = $_POST['minute'];

    // 一つずつずらす
    $sql = 'UPDATE refarence_time SET id = id + 1 WHERE id >= '.$id.';';
    sql_update($sql);
    // レコードの挿入
    $sql = 'INSERT INTO refarence_time (id, minute) VALUES ('.$id.', '.$minute.');';
    sql_insert($sql);
}

// confirmCreateボタン押下時
if(isset($_POST['confirmCreate'])){
    // 値の受け取り
    $id = $_POST['id'];
    $minute = $_POST['minute'];
    // レコードの挿入
    $sql = 'INSERT INTO refarence_time (id, minute) VALUES ('.$id.', '.$minute.');';
    sql_insert($sql);
}

// confirmUpdateボタン押下時
if(isset($_POST['confirmUpdate'])){
    // 値の受け取り
    $id = $_POST['id'];
    $currentId = $_POST['currentId'];
    $minute = $_POST['minute'];
    // レコードの挿入
    $sql = 'UPDATE refarence_time SET id = '.$id.', minute = '.$minute.' WHERE id = '.$currentId.';';
    sql_update($sql);
}

// confirmDeleteボタン押下時
if(isset($_POST['confirmDelete'])){
    // 値の受け取り
    $id = $_POST['id'];
    // レコードの挿入
    $sql = 'DELETE FROM refarence_time WHERE id = '.$id.';';
    var_dump($sql);
    sql_update($sql);
}

// SELECT
$sql = 'SELECT * FROM refarence_time ORDER BY id ASC;';
$result = sql_select($sql);

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