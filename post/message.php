<?php

require_once "db.php";

$idx = $_GET['idx'];
$msg = $_GET['msg'];



DB::exec("INSERT INTO message(user, msg, talbeID) VALUES ('{$_SESSION['id']}','$msg','$idx')");

echo "<script>location.href='postPage.php?data=$idx'</script>";