<?php
require_once "router.php";

GET("/", function () {
    views("test",[...$_GET]);
});

GET("/users/profile", function () {
    views("users/profile", [...$_GET]);
});
