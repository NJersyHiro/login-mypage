<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];
$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

//$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
//$pdo->exec("insert into img_upload(image)values('".$original_pic_name."');");
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        <main>
            <div class="form">
                <div class="contents">
                    <h2>会員登録 確認</h2><br>
                    <p>こちらの内容で登録してもよろしいでしょうか？</p>
                    <div class="name">氏名：<?php echo $_POST['name']; ?></div>
                    <div class="mail">メール：<?php echo $_POST['mail']; ?></div>
                    <div class="password">パスワード：<?php echo $_POST['password']; ?></div>
                    <div class="picture">プロフィール写真：<?php echo $original_pic_name; ?></div>
                    <div class="comments">コメント：<?php echo $_POST['comments']; ?></div>
                    <div class="two_button">
                        <form action ="register.php" class="toroku">
                            <input type="submit" class="shusei_button" size="35" value="戻って修正する" />
                        </form>
                        <form action="register_insert.php" method="post" class="toroku">
                            <input type="submit" class="toroku_button" size="35" value="登録する" />
                            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo $path_filename ?>" name="path_filename">
                            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>
