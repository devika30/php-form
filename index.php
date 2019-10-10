<?php
session_start();
require "includes/conn.php";
require "includes/auth.php";
if($user!=null)
{
    header("location:/user.php");
}
if(isset($_POST["email_id"])&& isset($_POST["password"]))
{
$email=$_POST['email_id'];
$password=$_POST['password'];
$sql="select * from user where email = '$email'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    if(password_verify($password,$row["password"]))
    {   $id=$row["id"];
        $_SESSION["id"]=$id;
        header("location:/user.php");
        
    }
    else{
        echo "invalid password";
    }
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

    </head>
    <body>
      <form action="index.php"  method="post">
          email_id:<input type="email" name="email_id"><br>
          password:<input type="password" name="password"><br>
          <input type="submit">
  
        
</form>

        

    </body>
</html>