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
<<<<<<< HEAD
            <td>
            <div class="cp_iptxt">       
            <input type="text" class="ef" name="year_month" placeholder="mm/yy">
            <label>有効期限</label>
            <span class="focus_line"></span>
           </div>    
=======
            <td class="flexer">
            <div class="cp_ipselect cp_sl01">
                    <select name="card cardMonth">
            <option value="1" selected="selected">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
            <option value="6">06</option>
            <option value="7">07</option>
            <option value="8">08</option>
            <option value="9">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        </div>
        <div class="cp_ipselect cp_sl01">
            <select name="card cardYear">
    <option value="2015" selected="selected">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    </select>
</div>
>>>>>>> 39efe087b0c51d06c138df2faa91206420149e41
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