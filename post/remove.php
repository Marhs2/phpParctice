<?php

require_once "db.php";
require_once "lib.php";

$data = $_GET['data'];
DB::exec(query: "DELETE FROM postInfo2 where idx = $data");
DB::exec(query: "DELETE FROM message where talbeID = $data");
move('/index.php');
