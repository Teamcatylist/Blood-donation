<?php

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$conn= mysqli_connect('localhost','root','','blood_donation');
if($conn->connect_error){
 die('connection failed:'.$conn->connect_error);
}
else {


 $stmt=$conn->prepare('insert into registration(fisrtname,lastname,email,password,confirmpassword) valuse(?,?,?,?,?)');
 $stmt->bind_param("sssss",$firstname,$lastname,$email,$password,$confirmpassword);
 $stmt->execute();
 echo "Registration succesfully...";
 $stmt->close();
 $conn->close();
}
 
?>