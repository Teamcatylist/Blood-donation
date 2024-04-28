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
      
      include "connect.php";
      $userid=$_GET['userId'];
      $fname="";
      $lname="";
      $password="";
      $confirm="";
      $email="";

    $sql="SELECT * FROM signup WHERE userId ='$userid'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$userid=$row['userId'];
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$password=$row['password'];
            $confirm=$row['Confirm_password'];
            $email=$row['Email'];
           
			
		}
	}
  
    
    
    
    ?>
        <div class="signup-box">
            <h1>Sign up</h1>
            <h4>Donate Your Blood And Save a Life</h4>
             
            <form method="post" action="newsignup.php">
                <label>First Name</label>
                <input type="text" placeholder="First Name" name="Firstname">

                <label>Last Name</label>
                <input type="text" placeholder="Last name" name="lastname">

                <label>Set a password</label>
                <input type="password" placeholder="Your password" name="password">

                <label>confirm password</label>
                <input type="password" placeholder="Confirm password" name="confirmpassword">

                <label>Email</label>
                <input type="email" placeholder="Email" name="email">

                <button type="submit" class="btn-btn-primary" name="submit">submit</button>
            </form>
            <p> You have to agree with the conditions
                <a href="#">privacy and policy</a> and <a href="terms.html">terms and condition</a>
            </p>
        </div>
        <p class="para-2">Already have an account?<a href="#">Login</a></p>
    </body>

    </html>

