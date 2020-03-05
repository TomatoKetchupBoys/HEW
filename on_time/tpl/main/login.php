<<<<<<< HEAD:garage/tpl/main/login.php
<?php
if(!isset($_SESSION)){
session_start();
}
?>
<h1><img src="./images/garage/simple_logo.jpg" alt="ロゴマーク"></h1>
<h2>ログイン</h2>
<button type="button" class="back">前ページへ戻る</button>
<form id="forLogin" action="index.php" method ="post">
    <table>
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
                <?php if(isset($_SESSION['temp']['email'])){ ?>
                    value="<?php echo $_SESSION['temp']['email']; ?>"
                <?php } ?>
            ></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" class="login toToppage">ログイン</button></td>
        </tr>
    </table>
    <input type="hidden" name="currentPage" value="toppage">
</form>
<ul>
    <li class="simple toRegist">新規登録</li>
    <li>サポート</li>
=======
<?php
if(!isset($_SESSION)){
session_start();
}
?>
<h1><img src="./images/garage/simple_logo.jpg" alt="ロゴマーク"></h1>
<h2>ログイン</h2>
<button type="button" class="back">前ページへ戻る</button>
<form id="forLogin">
    <table>
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
                <?php if(isset($_SESSION['temp']['email'])){ ?>
                    value="<?php echo $_SESSION['temp']['email']; ?>"
                <?php } ?>
            ></td>
        </tr>
        <tr>
            <td colspan="2"><button type="button" class="login toToppage">ログイン</button></td>
        </tr>
    </table>
    <input type="hidden" name="currentPage" value="toppage">
</form>
<ul>
    <li class="simple toRegist">新規登録</li>
    <li>サポート</li>
>>>>>>> origin:on_time/tpl/main/login.php
</ul>