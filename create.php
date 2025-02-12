<?php

require_once "db.php";
require_once "lib.php";

print_r($_POST);
$name = $_POST["name"];
echo $name;
DB::exec("insert into users (name) values ('$name')");
move('/','등록되었습니다.');