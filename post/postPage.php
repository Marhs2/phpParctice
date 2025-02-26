<?php

require_once "db.php";

// Function to create a user securely
function createUser($name)
{
    DB::exec("insert into postInfo2 (name) values ('$name')");
}

// Sanitize and retrieve the idx safely from the URL
$idx = $_GET['data'];
$users = DB::fetchAll("select * from postInfo2 where idx = $idx");
$msgs = DB::fetchAll("select idx,user , msg from message where talbeID = $idx");

$imgEx = ["png","jpg" ,"gif"]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS and JS -->
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css'); ?>">
    <script src="script.js?v=<?= filemtime('script.js'); ?>"></script>
</head>

<body>
    <div class="main">
        <div class="postPage">
            <?php foreach ($users as $user): ?>
                <div class="title" id="<?= htmlspecialchars($user->idx) ?>">
                    <span>제목:</span> <span class="postPage-Info"><?= htmlspecialchars($user->title) ?></span>
                </div>
                <div class="user">
                    <span>작성자:</span> <span class="postPage-Info"><?= htmlspecialchars($user->user) ?></span>
                </div>
                <div class="date">
                    <span>작성일:</span> <span class="postPage-Info"><?= htmlspecialchars($user->date) ?></span>
                </div>
                <div class="des">
                    <span>내용:</span> <span class="postPage-Info"><?= nl2br(htmlspecialchars($user->des)) ?></span>
                </div>
                <div class="file">
                    <span>자료:</span> <?php if (in_array(pathinfo($user->file, PATHINFO_EXTENSION), $imgEx)) {
                                            echo '<img src="uploads/' . $user->file . '">';
                                        } else {
                                            echo '<a href="uplaods/' . $user->file . '"> ' . $user->file . '</a>';
                                        } ?></a></span>
                </div>
            <?php endforeach ?>
        </div>

        <div class="btns">
            <button onclick="edit(this)">수정하기</button>
            <button class="complete" style="display: none;" onclick="completeEdit()">완료</button>
            <button onclick="location.href='/'">돌아가기</button>
        </div>

        <div class="message">
            <div class="send-message">
                <input type="text" name="msg" placeholder="메세지" required>
                <button onclick="addMsg()">보내기</button>
            </div>

            <div class="content">
                <?php foreach ($msgs as $msg): ?>
                    <div class="mssageBox" id="<?= htmlspecialchars($msg->idx) ?>">
                        <div class="user">작성자: <?= htmlspecialchars($msg->user) ?></div>
                        <div class="msg">메세지: <?= nl2br(htmlspecialchars($msg->msg)) ?></div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</body>

</html>