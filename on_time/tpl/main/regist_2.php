<?php
if(!isset($_SESSION)){
session_start();
}
?>
<h1><img src="./images/garage/simple_logo.jpg" alt="ロゴマーク"></h1>
<h2>新規登録</h2>
<button type="button" class="back">前ページへ戻る</button>
<p>2/2</p>
<form id="forRegist">
    <!-- ここにクレジット情報登録の項目 -->
    <table>
        <tr>
            <td><button type="button" class="form toRegist_1">前へ</button></td>
            <td><button type="button" class="form toRegist_confirm">確認</button></td>
        </tr>
    </table>
</form>
<ul>
    <li class="simple toLogin">ログイン</li>
    <li>サポート</li>
</ul>