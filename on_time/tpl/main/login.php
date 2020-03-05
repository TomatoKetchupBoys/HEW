<?php
if(!isset($_SESSION)){
session_start();
}
?>
<form id="forLogin">
<div class="main-container">

<h2>ログイン</h2>
    <table>
        <tr>
            <td>
            <div class="cp_iptxt">
            <input class="ef" type="email" name="email" patern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" required 
                <?php if(isset($_SESSION['temp']['email'])){ ?>
                    value="<?php echo $_SESSION['temp']['email']; ?>"
                <?php } ?>
            >
            <label>メールアドレス</label>
            <span class="focus_line"></span>
            </div>
            </td>
        </tr>
        <tr>

            <td>
            <div class="cp_iptxt">
            <input class="ef" type="password" name="password" patern="^[\w-+.]{8,}" required 
                <?php if(isset($_SESSION['temp']['email'])){ ?>
                    value="<?php echo $_SESSION['temp']['email']; ?>"
                <?php } ?>
            >
            <label>パスワード</label>
            <span class="focus_line"></span>
            </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="button" class="login toToppage">ログイン</button>
            <button type="button" class="back">前ページへ戻る</button>
            </td>
        
        </tr>
        
    </table>
    <input type="hidden" name="currentPage" value="toppage">
</form>
<ul>
    <li class="simple toRegist">新規登録</li>
    <li>サポート</li>
</ul>
<h1><img src="./images/logo.png" width="200px"></h1>