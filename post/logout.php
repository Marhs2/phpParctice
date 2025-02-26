<?php
require_once "lib.php";
session_start();
$_SESSION = ""; // 모든 세션 변수 초기화
session_destroy(); // 세션 완전 삭제

move("loginPage.php");
?>
