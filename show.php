<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<div>
    <?php
	include "connect.php";
	
	$sql="SELECT * FROM signup";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="6" cellspacing="20" cellpadding="20" align="center" bordercolor="#009900" >
	<tr>
		<td><b>User ID</b></td>
		<td><b>First Name</b></td>
		<td><b>Last Name</b></td>
		<td><b>Password</b></td>
		<td><b>Confirm Password</b></td>
        <td><b>Email</b></td>
        
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{echo '<tr>' .
            '<td>' . $row['userid'] . '</td>' .
            '<td>' . $row['firstname'] . '</td>' .
            '<td>' . $row['lastname'] . '</td>' .
            '<td>' . $row['Password'] . '</td>' .
            '<td>' . $row['Confirm_password'] . '</td>' .
            '<td>' . $row['Email'] . '</td>' .
            
            '<td>' .
            '<button class="btn-btn-primary" onclick="location.href=\'update.php?Id=' . $row['userid'] . '\'">Edit</button>' .
            '</td>' .
            '<td>' .
            '<form action="deleteUser.php" method="post">' .
            '<input type="hidden" name="delete_id" value="' . $row['userid'] . '">' .
            '<button type="submit" name="delete_btn">Delete</button>' . 
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
