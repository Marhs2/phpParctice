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
    <form action="singup.php" method="post">
        <label for="id">아이디</label>
        <input type="text" name="id" id="id" required>
        <label for="id">비밀번호</label>
        <input type="password" name="psw" id="psw" required>
        <label for="name">이름</label>
        <input type="text" name="name" id="name" required>
        <button>회원가입</button>
    </form>
    <a href="./loginPage.php">로그인</a>
</body>


</html>