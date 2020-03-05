<?php
// お知らせの配列です
$db_select_result_of_news = [
    "コロナウイルスへの対策について",
    "絶対おすすめのスポットTOP3",
    "匠が語る キャンプの極意",
    "医師もおすすめの健康方法",
    "絶対おすすめのスポットTOP3",
];

// 重要なお知らせの配列です
$db_select_result_of_important_news = [
    "コロナウイルスへの対策について",
    "駐車代金未納の件について",
    "以前に利用した駐車場での事故について",
    "大阪駐車場のサービス終了について",
    "安心して車を運転するために",
    "以前利用した駐車場で盗難事件があった件について",
];

?>

<br><br><br><br><br>
<hr><hr>
<h1>お知らせ</h1>
<hr><hr>
<p>新着ニュース</p>
<hr><hr>
<ul>
    <?php foreach($db_select_result_of_news as $news): ?>
        <li><?php echo $news ?></li>
    <?php endforeach; ?>
</ul>

<br><br>
<hr><hr>
<p>大切なお知らせ</p>
<hr><hr>
<ul>
    <?php foreach($db_select_result_of_important_news as $news): ?>
        <li><?php echo $news ?></li>
    <?php endforeach; ?>
</ul>
<hr><hr>