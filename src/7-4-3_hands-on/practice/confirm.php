<?php

$name = $_post["name"];
$email = $_post["email"];
$age = $_post["age"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録 - 確認</title>
</head>
<body>
    <h1>ユーザー登録 (2/3) 確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>


    <table border="1">
        <tr>

            <th>お名前</th>
            <td><?php echo htmlspecialchars($name, ENT_QOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
</tr>
<tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF'-8');?>歳</td>
            </tr>
            </table>


            <-- 確認画面から完了画面へデータを渡すためのフォーム -->
            <form action="complete.php" methhod"post">
            <!-- hidden属性で、データを隠して送信 -->
            <input type="hidden" name="name" value="<?php echo htmlspeccialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspeccialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">

            <P>
                <button type="button" onclick="history.back()">戻る</button>
                <button type="submit">登録する</button>
            </p>
        </form>
    </body>
    </html>
                
