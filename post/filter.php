<?php
require_once "db.php";


$case = $_POST['filter'];

switch ($case) {
    case '1':
        echo '1입니다';
        break;
    case '2':
        echo '2입니다';
        break;
    default:
        echo '선택을 안했습니다';
        break;
}
