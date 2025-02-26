<?php

require_once "db.php";
require_once "lib.php";
header("Content-Type: text/html; charest=utf-8");


$id = $_POST['id'];
$psw = $_POST['psw'];
$ss = session_id();

if (DB::fetch("select * from singupInfo where id = '$id' and psw = '$psw'")) {
    $_SESSION["id"] = $id;
    $_SESSION["psw"] = $psw;
    move("index.php");
} else {
    alert("로그인 실패");
    move("loginPage.php");
}
