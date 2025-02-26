<?php

function views($page,$datas=[]){
    extract($datas);
    
    require_once("./views/template/header.php");
    require_once("./views/{$page}.php");
    require_once("./views/template/footer.php");
}