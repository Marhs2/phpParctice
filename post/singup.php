<?php

require_once "db.php";
require_once "lib.php";


$id = $_POST['id'];
$psw = $_POST['psw'];
$name = $_POST['name'];


if (DB::fetch("select * from singupInfo where id = '$id'")) {
    alert("이미 사용중인 아이디입니다");
    move("singupPage.php");
} else {
    DB::exec("INSERT INTO singupinfo( id, psw, name) VALUES ('$id','$psw','$name')");
    move("loginPage.php");
}
