<?php
if(!isset($_SESSION)){
session_start();
}
?>
<form id="forRegist">
<div class="main-container">
<h2>新規登録</h2>
<p>2/2</p>
    <!-- ここにクレジット情報登録の項目 -->

    <table>
        <tr>
            <td>
            <div class="cp_iptxt">
            <input type="tel" class="ef left" name="card_Number" size="16" maxlength="16">
            <label>カード番号</label>
            <span class="focus_line"></span>
                </div>
            </td>
        </tr>
        <tr>
            <td>
            <div class="cp_iptxt">       
            <input type="text" class="ef" name="year_month" placeholder="mm/yy">
            <label>有効期限</label>
            <span class="focus_line"></span>
           </div>    
            </td>
        </tr>
        <tr>
            <td>
            <div class="cp_iptxt">       
            <input type="password" class="ef" name="security_Number" size="3" maxlength="3">
            <label>Sec-No</label>
            <span class="focus_line"></span>
           </div>    
            </td>
        </tr>
        <tr>
            <td><button type="button" class="back">前ページへ戻る</button></td>
            <td><button type="button" class="form toRegist_1">前へ</button></td>
            <td><button type="button" class="form toRegist_confirm">確認</button></td>
        </tr>
    </table>
</form>
<ul>
    <li class="simple toLogin">ログイン</li>
    <li>サポート</li>
</ul>
<h1><img src="./images/logo.png"></h1>
</div>