<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>init.php</title>
    <link rel="stylesheet" href="/css/init.css">
</head>
<body>


<h1></h1>


<div class="init_php">
<?php


define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));


define("SHARED_PATH", PRIVATE_PATH . '/shared');   
define("INIT_PATH", PRIVATE_PATH . '/shared');   


//echo $_SERVER['SCRIPT_NAME'];
//echo $_SERVER['DOCUMENT_ROOT'];


//echo PRIVATE_PATH;
//echo PROJECT_PATH;
//echo SHARED_PATH;
//echo __FILE__;


$root = substr($_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 7);
define("ROOT_URL", $root);


function url_path($path) {
    if($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}


?> 
</div>


</body>
</html>