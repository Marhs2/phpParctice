<?php
require_once "db.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="post">
        <label for="id">아이디</label>
        <input type="text" name="id" id="id" required>
        <label for="id">비밀번호</label>
        <input type="password" name="psw" id="psw" required>
        <button>로그인</button>
    </form>
    <a href="./singupPage.php">회원가입</a>
</body>

</html>