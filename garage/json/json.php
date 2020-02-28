<?php
if(!isset($_SESSION)){
session_start();
}


// $_SESSION['prevPage']から次に遷移すべきpageをjsonで用意
$array = array("page" => $_SESSION['prevPage']);
header("Content-Type: application/json; charset=utf-8");
$jsonStr = json_encode($array);
echo $jsonStr;
?>