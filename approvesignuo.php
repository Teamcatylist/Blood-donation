<<html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" ;content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/newsignup.css">
        <title>Catlyst Bank</title>
        
    </head>

    <body>
<?php
	include'connect.php';
	$userid=isset($_POST['id'])? $_POST['id']:"";
	$Fname=isset($_POST['Firstname'])? $_POST['Firstname']:"";
	$lname=isset($_POST['lastname'])? $_POST['lastname']:"";
	$pass=isset($_POST['password']) ? $_POST['password']:"";
    $confirm=isset($_POST['confirmpassword']) ? $_POST['confirmpassword']:"";
    $Em=isset($_POST['email']) ? $_POST['email']:"";
    
	

	$sql="UPDATE signup SET firstname='$Fname' , lastname='$lname',  password='$pass', Confirm_password='$confirm',Email='$Em',Age='$ag' WHERE userId='$userid' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:show.php");
	}
	else
	{
		echo"wrong";
	}
	
	
?>

</body>