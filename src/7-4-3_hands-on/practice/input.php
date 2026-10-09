<!DOCTYPE html>
<html lang="ja">
</head>
<body>
    <h1>ユーザー登録 (1/3) 入力</h1>
    <form action="confirm.php" methhod="post">
        <p>
            <label>お名前:</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>メールアドレス : </label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>年齢 : </label>
            <input type="number" name="age" min="0" max="120" required>
        </p>
        <button> type="submit">確認画面へ</button>
    </form>
</body>
</html>
                