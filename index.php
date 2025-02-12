<?php

require_once "db.php";

function createUser($name)
{
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
	<script src="/script.js"></script>
</head>

<body>
	<form action="create.php" method="post">
		<input type="text" name="name">
		<button>submit</button>
	</form>

	<table>
		<thead>
			<tr>
				<th>idx</th>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $key => $value): ?>
				<tr>
					<td><?= $value->idx ?></td>
					<td><?= $value->name ?></td>
					<td><button onclick="getText(this)">삭제</button></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>

</html>