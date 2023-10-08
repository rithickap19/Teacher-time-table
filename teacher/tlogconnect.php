<?php
$rollno=$_POST['rollno'];
$password=$_POST['password'];

//database connection
$conn=new mysqli('localhost','root','','teacher') ;
if($conn->connect_error)
{
    die('Connection failed:' .$conn->connect_error);
}
else{

    $stmt=$conn->prepare("insert into tlogin(rollno,password) values(?,?)");
    $stmt   ->bind_param("is",$rollno,$password);
    $stmt   ->execute();
    echo "Done";
    $stmt->close();
    $conn->close();
}
?>