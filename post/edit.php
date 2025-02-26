<?php

require_once "db.php";

$idx = $_GET['idx'];
$title = $_GET['title'];
$user = $_GET['user'];
$date = $_GET['date'];
$des = $_GET['des'];
DB::exec("UPDATE `postinfo2` SET `title`='$title',`des`='$des',`user`='$user',`date`='$date' WHERE idx = $idx");
echo "<script>window.location.href='index.php'</script>";
exit;
