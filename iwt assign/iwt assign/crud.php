<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<div>
    <?php
	include "config.php";
	
	$sql="SELECT * FROM appointments";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="3" cellspacing="15" cellpadding="8" align="center" bordercolor="#ff0000"  >
	<tr>
		<td><b>User ID</b></td>
		<td><b> Name</b></td>
		<td><b>gender</b></td>
		<td><b>phone</b></td>
		<td><b>date</b></td>
        <td><b>time</b></td>
        <td><b>location</b></td>
        <td><b>btype</b></td>
        <td><b>donatedb</b></td>
        <td><b>diseases</b></td>
        <td><b>allergies</b></td>
        <td><b>tattoos</b></td>
        
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{echo '<tr>' .
            '<td>' . $row['BRID'] . '</td>' .
            '<td>' . $row['name'] . '</td>' .
            '<td>' . $row['gender'] . '</td>' .
            '<td>' . $row['phone'] . '</td>' .
            '<td>' . $row['date'] . '</td>' .
            '<td>' . $row['time'] . '</td>' .
            '<td>' . $row['location'] . '</td>' .
            '<td>' . $row['btype'] . '</td>' .
            '<td>' . $row['donatedb'] . '</td>' .
            '<td>' . $row['diseases'] . '</td>' .
            '<td>' . $row['allergies'] . '</td>' .
            '<td>' . $row['tattoos'] . '</td>' .
            
            '<td>' .
            '<button class="submit" style="background-color: #007bff" onclick="location.href=\'Read.php?Id=' . $row['BRID'] . '\'">Edit</button>' .
            '</td>' .
            '<td>' .
            '<form action="delete_appointment.php" method="post">' .
            '<input type="hidden" name="delete_id" value="' . $row['BRID'] . '">' .
            '<button type="submit" name="delete_btn" style =" background-color: #dc3545">Delete</button>' . 
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
