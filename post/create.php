<?php

require_once "db.php";
require_once "lib.php";
$file = null;

$title = $_POST["title"];
$des = $_POST["des"];
$fileName = $_FILES["file"]["name"];
$filetmp = $_FILES["file"]["tmp_name"];


move_uploaded_file($filetmp, "uploads/$fileName");

DB::exec("INSERT INTO `postinfo2`(`title`, `des`, `user`, `date`, `file`) 
          VALUES ('$title', '$des', '{$_SESSION["id"]}', '" . date('Y-m-d H:i:s') . "', '$fileName')");

move("/index.php");
