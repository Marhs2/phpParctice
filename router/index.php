

<?php 
session_start();
header("Content-Type: text/html; charset=UTF-8");
require_once './lib.php';
require_once './router.php';

require_once './controller/page.php';
require_once './controller/actions.php';


Router::handleRequest();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // alert("work");
    </script>
    <div>hello</div>
</body>

</html>