<?php
function script($message){
    echo "<script>$message</script>";
}

function alert($message = ""){
    if($message){
        script("alert('$message')");
    }
}

function move( $path, $message ){
    alert($message);
    script("location.href='$path'");   
}