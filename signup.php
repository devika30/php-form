<?php
session_start();
require "includes/conn.php";
require "includes/auth.php";
if($user!=null)
{
    header("location:/user.php");
}
if(isset($_POST["name"]))
{
    $name=$_POST["name"];
    $email_id=$_POST["email_id"];
    $password=$_POST["password"];
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="insert into user (name,email,password) values('$name','$email_id','$hash')";
    if ($conn->query($sql) === TRUE) {
        die("sign up successfull");
    } else {
       die ("Error: " . $sql . "<br>" . $conn->error);
    }
}

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
  <form action="" method="post"> 
 name:<input type="text" name="name" ><br>
 email_id:<input type="email" name="email_id"><br>
 password:<input type="password" name="password"><br>
 <input type="submit" value="sign-up">

</form>
        
        <script src="" async defer></script>
    </body>
</html>