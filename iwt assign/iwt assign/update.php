<html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" ;content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/newsignup.css">
        <title>Catlyst Bank</title>
        
    </head>

    <body>
<?php
	include 'config.php';

    $id=isset($_POST['id'])? $_POST['id']:"";
	$name=isset($_POST['name'])? $_POST['name']:"";
	$gender=isset($_POST['gender'])? $_POST['gender']:"";
	$tel=isset($_POST['phone'])? $_POST['phone']:"";
	$date=isset($_POST['date']) ? $_POST['date']:"";
    $time=isset($_POST['timeslot']) ? $_POST['timeslot']:"";
    $location=isset($_POST['location']) ? $_POST['location']:"";
    $btype=isset($_POST['type']) ? $_POST['type']:"";
    $donatedb=isset($_POST['donate_before']) ? $_POST['donate_before']:"";
    $diseases=isset($_POST['diseases']) ? $_POST['diseases']:"";
    $allergies=isset($_POST['allergies']) ? $_POST['allergies']:"";
    $tattoos=isset($_POST['tattoos']) ? $_POST['tattoos']:"";

    
	

	$sql="UPDATE appointments SET  name='$name' , gender='$gender',  phone='$tel', date='$date',time='$time', location='$location' ,btype='$btype',donatedb='$donatedb',diseases='$diseases',allergies='$allergies',tattoos='$tattoos'
     WHERE BRID='$id' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:crud.php");
	}
	else
	{
		echo"wrong";
	}
	
	
?>

</body>