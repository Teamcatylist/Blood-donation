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

	include 'connect.php';
	$id= $_GET['Id'];
	$name="";
	$uname="";
	$date="";
    $pnum="";
    $btype="";
    $age="";
	
	$sql="SELECT * FROM appointment WHERE userId ='$id'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$id=$row['userId'];
			$name=$row['Name'];
			$uname=$row['Username'];
			$date=$row['Date'];
            $pnum=$row['userPhonenumber'];
            $btype=$row['Bloodtype'];
            $age=$row['Age'];
			
		}
	}
		
?>
 <form action="approveappointment.php" method="post">
            <h2>Edit An Appointment</h2>
            <div class="content">
            <div class="input-box">
                    <label for="name">UserID</label>
                    <input type="text" placeholder="Enter the name" name="Id" required value="<?php echo $id;?> "  readonly="readonly">
                </div>
                <div class="input-box">
                    <label for="name">Full name</label>
                    <input type="text" placeholder="Enter the name" name="name" required value="<?php echo $name;?>" >
                </div>
                <div class="input-box">
                    <label for="usrename">username</label>
                    <input type="text" placeholder="Enter the username" name="uname" required value="<?php echo $uname;?>" >
                </div>
                <div class="input-box">
                    <label for="Email">Date</label>
                    <input type="Date" placeholder="" name="date" required value="<?php echo $date;?>" >
                </div>
                <div class="input-box">
                    <label for="password">phone number</label>
                    <input type="text" placeholder="Enter your phone number" name="pnum" required value="<?php echo $pnum;?>" >
                </div>
                <div class="input-box">
                    <label for="blood type">Blood type</label>
                    <input type="text" placeholder="Enter the blood type" name="btype" required value="<?php echo $btype;?>" >
                </div>
                <div class="input-box">
                    <label for="age">age</label>
                    <input type="text" placeholder="Enter the age" name="age" required value="<?php echo $age;?>" >
                </div>

            </div>
            <div class="alert">
                <p>By clicking you have to accept <a herf= "#">terms</a> and <a href="terms.html">conditions</a> </p>
            </div>
            <div class="button-container">
                <button type="submit" name="reg">Update</button>
            </div>
        </form>

</body>

</html>