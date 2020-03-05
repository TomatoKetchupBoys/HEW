<?php
// dbから引っ張ってきたユーザー情報のサンプルのサンプルです
$user_info = [
    "id" => "0000001",
    "name" => "大島達郎",
    "tel" => "080-0000-0000",
    "mail" => "hoge@example.com",
    "password" => "password",
    "registration_date" => "2020-02-17 12:00:00",
];
?>
<br><br><br><br><br><br><br><br>
<h1>情報確認/変更</h1>
<br>
<ul>
    <li><img src="./images/users/<?php echo $user_info["id"] ?>/account.jpg"></li>
    <li><?php echo $user_info["name"]; ?></li>
    <li><?php echo $user_info["tel"]; ?></li>
    <li><?php echo $user_info["mail"]; ?></li>
    <li><?php echo $user_info["password"]; ?></li>
    <li><?php echo $user_info["registration_date"]; ?></li>

</ul>