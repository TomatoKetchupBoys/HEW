<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>GARAGE（仮）</title>
    <meta name="viewport" content="viewport-fit=cover,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="テストサイト">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/howl.jpg">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>

    <link href="css/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="css/slick.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/drawer.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>
<body class="drawer drawer--right">
        <header class="basicOnly">
            <h1><img src="./images/logo.png" alt="" class="basic toToppage"></h1>
        </header>

<?php
if(!isset($_SESSION)){
session_start();
}
?>


<form FOR_REGIST>
<h1><img src="./images/garage/simple_logo.jpg" alt="ロゴマーク"></h1>
<h2>新規会員登録</h2>
<button type="button" class="back">前ページへ戻る</button>
<p>1/2</p>
<!-- sessionの'temp'配列内に name, tel, email, password を入力しregist_2に引き渡します -->
    <table>
        <tr>
            <th>名前</th>
            <td><input type="text" name="name" required
                <?php if(isset($_SESSION['temp']['name'])){ ?>
                    value="<?php echo $_SESSION['temp']['name']; ?>"
                <?php } ?>
            ></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><input type="tel" name="tel" pattern="^\d{10,11}" required
                <?php if(isset($_SESSION['temp']['tel'])){ ?>
                    value="<?php echo $_SESSION['temp']['tel']; ?>"
                <?php } ?>
            ></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><input type="email" name="email" patern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" required
                <?php if(isset($_SESSION['temp']['email'])){ ?>
                    value="<?php echo $_SESSION['temp']['email']; ?>"
                <?php } ?>
            ></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><input type="password" name="password" patern="^[\w-+.]{8,}" required
                <?php if(isset($_SESSION['temp']['password'])){ ?>
                    value="<?php echo $_SESSION['temp']['password']; ?>"
                <?php } ?>
            ></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="button" class="form toRegist_2">次へ</button></td>
        </tr>
    </table>
</form>
<ul>
    <li class="simple toLogin">ログイン</li>
    <li>サポート</li>
</ul>

</section><!-- #innerAjaxArea -->
        <footer class="basicOnly">
            <ul>
                <li><img src="./images/garage/payment.png" alt="予約一覧画面アイコン" class="basic toReserv_list"></li>
                <li><img src="./images/garage/schedule.png" alt="トップページアイコン" class="basic toToppage"></li>
                <li><img src="./images/garage/reserv.png" alt="予約画面アイコン" class="basic toReserv"></li>
            </ul>
        </footer>
    </div><!-- #outerAjaxArea -->

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/function.js" type="text/javascript"></script>
    <script src="./js/public.js" type="text/javascript"></script>
    <script src="js/drawer.js"></script>
    <script src="js/iscroll.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
</body>
</html>