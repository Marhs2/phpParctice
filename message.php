<?php

require_once "db.php";

$idx = $_GET['idx'];
$msg = $_GET['msg'];
$user = $_GET['user'];



DB::exec("INSERT INTO message(user, msg, talbeID) VALUES ('$user','$msg','$idx')");

echo "<script>location.href='postPage.php?data=$idx'</script>";