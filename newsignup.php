<?php

include 'connect.php';


if(isset($_POST['submit'])){

    $fname=$_POST['Firstname'];
    $lname=$_POST['lastname'];
    $password=$_POST['password'];
    $confirm=$_POST['confirmpassword'];
    $email=$_POST['email'];

    $sql= "INSERT INTO signup (firstname,lastname,Password,Confirm_password,Email) VALUES ('$fname','$lname','$password'
	,'$confirm','$email')";

   $result=mysqli_query($conn,$sql);

  

}

?>


