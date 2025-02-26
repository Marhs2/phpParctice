<?php 


POST("/users/profile",function(){
    extract($_GET);
    extract($_POST);
    echo $id;
});

