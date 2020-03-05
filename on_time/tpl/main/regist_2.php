<?php
if(!isset($_SESSION)){
session_start();
}
?>
<br><br>
<!--  -->
<h1><img src="./images/garage/simple_logo.jpg" alt="ロゴマーク"></h1>
<h2>新規登録</h2>
<button type="button" class="back">前ページへ戻る</button>
<p>2/2</p>
<form id="forRegist">
    <!-- ここにクレジット情報登録の項目 -->
    <table>
        <table>
            <tr>
                <th>名前</th>
                <td><input type="text" name="name" required value="<?php echo $_SESSION['temp']['name']; ?>"></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="tel" name="tel" pattern="^\d{10,11}" required value="<?php echo $_SESSION['temp']['tel']; ?>"></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="email" patern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" required value="<?php echo $_SESSION['temp']['email']; ?>"></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><input type="password" name="password" patern="^[\w-+.]{8,}" required value="<?php echo $_SESSION['temp']['password']; ?>"></td>
            </tr>
        </table>
        <tr>
            <td><button type="button" class="form toRegist_1">前へ</button></td>
            <td><button type="button" class="form toRegist_confirm">確認</button></td>
        </tr>
    </table>
</form>
<ul>
    <li class="simple toLogin">ログイン</li>
    <li>サポート</li>
