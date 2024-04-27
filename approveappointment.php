<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/appointment.css">
    <title>Catilyst Bank</title>
</head>
<body>
<?php
	include'connect.php';
	$rid=isset($_POST['id'])? $_POST['id']:"";
	$name=isset($_POST['name'])? $_POST['name']:"";
	$uname=isset($_POST['uname'])? $_POST['uname']:"";
	$dt=isset($_POST['date']) ? $_POST['date']:"";
    $pnum=isset($_POST['pnum']) ? $_POST['pnum']:"";
    $bt=isset($_POST['btype']) ? $_POST['btype']:"";
    $ag=isset($_POST['age']) ? $_POST['age']:"";
	

	$sql="UPDATE appointment SET Name='$name' , userName='$uname',  Date='$dt', userPhone='$pnum',Bloodtype='$bt',Age='$ag' WHERE userId='$rid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:showApp.php");
	}
	else
	{
		echo"wrong";
	}
	
	
?>

</body>