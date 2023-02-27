<?php
mb_internal_encoding("utf8");
session_start();


if(!isset($_POST['from_mypage'])){
    header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    <body>
        <header>
            <a href="login.php"><img src="4eachblog_logo.jpg"></a>
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        <main>
            <form action="mypage_update.php" method="post" class="box">
                <h2>会員情報</h2>
                <div class="hello">
                    <?php echo "こんにちは！ ".$_SESSION['name']."さん"; ?> 
                </div>
                <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture']; ?>">
                </div>
                <div class="basic_info">
                    <p>氏名：<input type="text" size="30" name="name" required></p>
                    <p>mail：<input type="text" size="30" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required></p>
                    <p>パスワード：<input type="password" size="25" name="password" pattern="^[a-zA-Z0-9]{6,}$" required></p>
                </div>
                <div class="comments"><textarea rows="3" cols="76" name="comments"></textarea></div>
                <div class="henshu">
                    <input type="hidden" value="<?php echo rand(1,10);?>" name="from_mypage">
                    <input type="submit" class="submit_button" size="35" value="編集する" />
                </div> 
            </form>
        </main>
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>