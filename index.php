<?php

require_once "db.php";

function createUser($name)
{
	DB::exec("insert into postInfo2 (name) values ('$name')");
}

$users = DB::fetchAll('select * from postInfo2');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function research(): array
	{
		$search = $_POST['search'];

		if (trim($search)) {
			$reslut = DB::fetchAll(query: "SELECT * FROM postInfo2 WHERE title LIKE '%$search%' OR user LIKE '%$search%' ");
		} else {
			$reslut = DB::fetchAll('select * from postInfo2');
		}


		return $reslut;
	}

	$users = research();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="./script.js"></script>
	<link rel="stylesheet" href="/style.css?v=<?= time(); ?>">
</head>

<body>


	<div class="dasboard">

		<form method="post">
			<input type="text" name="search" placeholder="검색">
		</form>

		<div class="Info">
			<ul>
				<li>제목</li>
				<li>작성자</li>
				<li>작성일</li>
			</ul>
			<button onclick="location.href='createPage.php'">생성하기</button>
		</div>

		<?php foreach ($users as $key => $value): ?>
			<div class="post">
				<ul onclick="getText(event,'postPage.php')">
					<li id="<?= $value->idx ?>"><?= $value->title ?></li>
					<li id="<?= $value->idx ?>"><?= $value->user ?></li>
					<li id="<?= $value->idx ?>"><?= $value->date ?></li>
				</ul>
				<button onclick="getText(event , 'remove.php')">삭제</button>
			</div>

		<?php endforeach ?>
	</div>

</body>

</html>