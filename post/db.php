<?php
require_once "lib.php";

session_start();
header("Content-Type: text/html; charest=utf-8");

$loginUrl = ["localhost/loginPage.php", "localhost/login.php", "localhost/singupPage.php", "localhost/singup.php"];

if (!in_array($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], $loginUrl)) {
	if (!isset($_SESSION["id"]) || empty($_SESSION)) {
		alert("로그인 해주세요");
		move("loginPage.php");
	}
}



class DB
{
	static $db = null;
	static function getDB()
	{
		if (!self::$db) {
			$connection = new PDO("mysql:host=localhost;dbname=post;charset=utf8mb4", "root", "");
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			self::$db = $connection;
		}
		return self::$db;
	}
	static function exec($query)
	{
		try {
			self::getDB()->exec($query);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}
	static function fetch($query)
	{
		$stmt = self::getDB()->query($query);
		return $stmt->fetch();
	}
	static function fetchAll($query)
	{
		$stmt = self::getDB()->query($query);
		return $stmt->fetchAll();
	}
}
