<?php
if(!isset($_SESSION)){
session_start();
}
?>
<h1><img src="./images/garage/simple_logo.jpg" alt="ロゴマーク"></h1>
<h2>登録確認</h2>
<button type="button" class="back">前ページへ戻る</button>
<form id="forRegist">
    <table>
        <tr>
            <th>名前</th>
            <td><input type="text" name="name" value="<?php echo $_SESSION['temp']['name']; ?>" readonly></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><input type="tel" name="tel" value="<?php echo $_SESSION['temp']['tel']; ?>" pattern="^\d{10,11}" readonly></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><input type="email" name="email" value="<?php echo $_SESSION['temp']['email']; ?>" patern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" readonly></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><input type="password" name="password" value="<?php echo $_SESSION['temp']['password']; ?>" patern="^[\w-+.]{8,}" readonly></td>
        </tr>
        <tr>
            <td>ここにクレジット情報登録の項目</td>
        </tr>
        <tr>
            <td><button type="button" class="form toRegist_2">修正</button></td>
            <td><button type="button" class="login toRegist_complete">登録</button></td>
        </tr>
    </table>
    <input type="hidden" name="currentPage" value="regist_complete">
</form>
<ul>
    <li class="simple toLogin">ログイン</li>
    <li>サポート</li>
</ul>