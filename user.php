<?php
session_start();
require "includes/conn.php";
require "includes/auth.php";


?>


<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <form action="logout.php" method="post">
    <button>logout</button>
    </form>
    </body>
</html>