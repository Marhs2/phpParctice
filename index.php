<?php

class DB{
	static $db = null;
	static function getDB(){
		if(!self::$db ){
			$connection = new PDO("mysql:host=localhost;dbname=sdhs-posts;charset=utf8mb4","root","");
			$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			self::$db = $connection;
		}
		return self::$db;
	}
	static function exec($query){
		try{
			self::getDB()->exec($query);
			return true;
		}catch(Exception $e){
			return false;
		}
	}
	static function fetch($query){
		$stmt = self::getDB()->query($query);
		return $stmt->fetch();
	}
	static function fetchAll($query){
		$stmt = self::getDB()->query($query);
		return $stmt->fetchAll();
	}
}
function createUser($name){
	DB::exec("insert into users (name) values ('$name')");
}

$users = DB::fetchAll('select * from users');


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>idx</th>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $key => $value): ?>
				<tr>
					<td><?= $value->idx ?></td>
					<td><?= $value->name ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>