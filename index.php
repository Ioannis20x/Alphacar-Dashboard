<?php
include "config.php"

session_start();

if($_SESSION["loggedin"]){
    include "header.php"
}
else{
    include "loginform.php"
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php$SITENAME?></title>
</head>
<body>
    
</body>
</html>