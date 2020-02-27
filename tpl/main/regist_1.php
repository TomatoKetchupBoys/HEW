<?php
if(!isset($_SESSION)){
session_start();
}
?>
<h1><img src="./images/garage/simple_logo.jpg" alt="ロゴマーク"></h1>
<h2>新規会員登録</h2>
<button type="button" class="back">前ページへ戻る</button>
<p>1/2</p>
<form forRegist>
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