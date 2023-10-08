<?php
$sid=$_POST['sid'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$password=$_POST['password'];


//database connection
$conn=new mysqli('localhost','root','','teacher') ;
if($conn->connect_error)
{
    die('Connection failed:' .$conn->connect_error);
}
else{

    $stmt=$conn->prepare("insert into sreg(fname,lname,dept,phone,sid,password) values(?,?,?,?,?,?)");
    $stmt   ->bind_param("sssiis",$fname,$lname,$dept,$phone,$sid,$password);
    $stmt   ->execute();
    echo "Done";
    $stmt->close();
    $conn->close();
}
?>