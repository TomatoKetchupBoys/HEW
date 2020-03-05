<?php
// #############################################
// 機能：エスケープ処理
// 引数：エスケープしたい文字列
// #############################################
function h($text){
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}


// #############################################
// 機能：トークンの生成
// 引数：無し
// #############################################
function generate_token(){
    return password_hash(session_id(), PASSWORD_DEFAULT);
}


// #############################################
// 機能：トークンの有効性のチェック
// 引数：送られてきたトークンの値
// #############################################
function check_token($token){
    return password_verify(session_id(), $token);
}


// #############################################
// 機能：パスワードが一致してるかの確認
// 引数：入力されたパスワード、DBに保存されてるパスワード
// #############################################
function check_password($password, $db_password){
    if(!isset($db_password)){
        // idがヒットしなかった時に処理が極端に早くなるのを防ぐ
        $db_password = '$2y$10$abcdefghijklmnopqrstuvxyz012345';
    }
    return password_verify($password, $db_password);
}


// #############################################
// 機能：ログイン状態の確認
// 引数：無し
// #############################################
function check_login(){
    if(!isset($_SESSION['authority'])){
        header('Location: ./login.php');
        exit;
    }
    return 0;
}


// #############################################
// 機能：mySQLに対してSELECTする
// 引数：SELECT文
// #############################################
function sql_select($sql){
    // 変数宣言
    $row = array();
    
    // データベース接続
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');

    // sqlの実行
    $result = mysqli_query($cn,$sql);
    while($to_array = mysqli_fetch_assoc($result)){
        $row[] = $to_array;
    }

    return $row;
}













    // sql文作成
    // $sql = "SELECT ";
    // $flg = TRUE;
    // foreach($columns as $value){
    //     if($flg){
    //         $sql += $value;
    //         $cnt = FALSE;
    //     }
    //     $sql += ",".$value;
    // }
    // $sql += " FROM ".$tableName;
    // if(isset($forWhere)){
    //     $sql += " WHERE ";
    //     $flg = TRUE;
    //     foreach($forWhere as $key => $value){
    //         if($flg){
    //             $sql += $key." == ".$value;
    //             $cnt = FALSE;
    //         }
    //         $sql += " AND ";
    //         $sql += $key." == ".$value;
    //     }
    // }
    // $sql += ";";


?>