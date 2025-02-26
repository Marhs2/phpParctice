<?php 
session_start();
require_once '../lib.php';
require_once '../router.php';

require_once '../controller/page.php';
require_once '../controller/actions.php';


Router::handleRequest();