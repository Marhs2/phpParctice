<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css?v=<?= time(); ?>">
</head>

<body>
    <form action="create.php" method="post">
        <input type="text" name="title" placeholder="제목">
        <input type="text" name="user" placeholder="작성자">
        <input type="text" name="des" placeholder="내용">
        <button>생성</button>
    </form>
</body>

</html>