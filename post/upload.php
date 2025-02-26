<?php
require_once "db.php";
$dir = "uploads/";

if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}


if ($_FILES["file"]["size"]  >  5 * 1024 * 1024) {
    alert("파일이 너무 큼");
} else {
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
    DB::exec("INSERT INTO test(name) VALUES ('{$_FILES["file"]["name"]}')");
}


$imgEx = ["png", "jpg", "gif"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


</body>

</html>