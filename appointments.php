<?php

include'connect.php';



if(isset($_POST['reg']))
	{
	$fnam= isset($_POST['name']) ? $_POST['name']:"";
	$unam= isset($_POST['uname']) ? $_POST['uname']:"";
	$dt= isset($_POST['date'])? $_POST['date']:"";
	$pnum= isset($_POST['pnum']) ? $_POST['pnum']:"0";
	$bt= isset($_POST['btype'])? $_POST['btype']:"";
	$age= isset($_POST['age']) ? $_POST['age']:"";
   // $ge= isset($_POST['Gender']) ? $_POST['Gender']:"";
	
	$sql= "INSERT INTO appointment(Name,Username,date,userPhonenumber,Bloodtype,Age) VALUES ('$fnam','$unam','$dt'
	,'$pnum','$bt','$age')";
	
	$result=mysqli_query($conn,$sql);
	
	
	header("location:showApp.php");
}
?>