<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css?v=<?= time(); ?>">
</head>

<body>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <textarea name="title" placeholder="제목" required></textarea>
        <textarea name="des" placeholder="내용" required></textarea>
        <input type="file" name="file">
        <button type="submit">생성</button>
    </form>
</body>

</html>