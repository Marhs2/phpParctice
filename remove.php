<?php

require_once "db.php";
require_once "lib.php";

$data = $_GET['data'];
DB::exec(query: "DELETE FROM users where name = $data");
move('/',$data);
