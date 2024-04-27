<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<div>
    <?php
	include"connect.php";
	
	$sql="SELECT * FROM appointment";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="6" cellspacing="20" cellpadding="20" align="center" bordercolor="#009900" >
	<tr>
		<td><b>Appointment ID</b></td>
		<td><b>First Name</b></td>
		<td><b>User Name</b></td>
		<td><b>Date</b></td>
		<td><b>userPhonenumber</b></td>
        <td><b>Blood Type</b></td>
        <td><b>Age</b></td>
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{echo '<tr>' .
            '<td>' . $row['userId'] . '</td>' .
            '<td>' . $row['Name'] . '</td>' .
            '<td>' . $row['Username'] . '</td>' .
            '<td>' . $row['Date'] . '</td>' .
            '<td>' . $row['userPhonenumber'] . '</td>' .
            '<td>' . $row['Bloodtype'] . '</td>' .
            '<td>' . $row['Age'] . '</td>' .
            '<td>' .
            '<button onclick="location.href=\'updateAppointment.php?Id=' . $row['userId'] . '\'">Edit</button>' .
            '</td>' .
            '<td>' .
            '<form action="deleteAppointment.php" method="post">' .
            '<input type="hidden" name="delete_id" value="' . $row['userId'] . '">' .
            '<button type="submit" name="delete_btn" formaction="deletappointment.php">Delete</button>' . 
            '</form>' .
            '</td>' .
            '</tr>';
        
			
			 
		}
		
		echo'</table>';
	}
?>  

</div>
</body>
</html>