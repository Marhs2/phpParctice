<?php

require_once "db.php";
require_once "lib.php";

$title = $_POST["title"];
$des = $_POST["des"];
$user = $_POST["user"];
DB::exec("INSERT INTO `postinfo2`(`title`, `des`, `user` , `date`) VALUES ('$title', '$des', '$user' , '" . date("Y-m-d H:i:s") . "')");

move("/index.php");
