<?php
$user=null;
if(isset($_SESSION["id"]))
{
$id=$_SESSION["id"];
$sql="select * from user where id='$id'";
$result=$conn->query($sql);

if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $user=$row;
    
   }
}
?>