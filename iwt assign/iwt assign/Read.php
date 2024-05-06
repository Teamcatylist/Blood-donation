<!DOCTYPE html>
<html>
<head>
<title> Catalyst Bank </title>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link href='https://businessgoalhacker.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>

</head>


<body>
    <?php

        include 'config.php';

        $id = isset($_GET['Id']) ? $_GET['Id'] : '';
        $name="";
        $gender="";
        $phone="";
        $date="";
        $time="";
        $location="";
        $btype="";
        $donatedb="";
        $diseases="";
        $allergies="";
        $tattoos="";
        
        $sql="SELECT * FROM appointments WHERE BRID ='$id'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $row['name'];
                $id=$row['BRID'];
                $name=$row['name'];
                $gender=$row['gender'];
                $phone=$row['phone'];
                $date=$row['date'];
                $time=$row['time'];
                $location=$row['location'];
                $btype=$row['btype'];
                $donatedb=$row['donatedb'];
                $diseases=$row['diseases'];
                $allergies=$row['allergies'];
                $tattoos=$row['tattoos'];
            }
        }
            
    ?>
    <div class="container">
    <div class="logo">
        <img src="styles/logo.jpeg">
    </div>

    <form id="appointment-form" method="post" action="update.php" onsubmit="return formDetails('book_appointment_3.html')">
        <h1>Book Appointment</h1>

        <input type="text" placeholder="" name="Id" required value="<?php echo $id;?>"  readonly="readonly"><br></br>
        <div class="appointment">
        <label for="name ">Donor Name: </label>
        <input type="text" id="name " name="name " required value="<?php echo $name;?>" ><br>

        <label for="gender" required value="<?php echo $gender;?>" >Gender<br>
            <input type="radio" id="gender" name="gender" value="male"> Male<br>
            <input type="radio" id="gender" name="gender" value="female"> Female<br>
            <input type="radio" id="gender" name="gender" value="other"> Other <br>
        </label><br>
       

        <label for="phone" required value="<?php echo $phone;?>" >Contact No:</label>
        <input type="tel " name="phone" id="num" required><br><br>
        

        <label for="date" required value="<?php echo $date;?>" >Appointment Date:</label>
		<input type="date" id="date" name="date" required><br><br>

        <label>Time Slot</label>
        <input type="hidden" id="timeslot" name="timeslot" required value="<?php echo $time;?>" >
      
        <div id="time-slots" required value="<?php echo $time;?>" >
            <button type="button" data-time="9.00AM-10.00AM" onclick="selectTimeSlot('9.00AM-10.00AM')">9.00AM-10.00AM</button>
            <button type="button" data-time="10.00AM-11.00AM" onclick="selectTimeSlot('10.00AM-11.00AM')">10.00AM-11.00AM</button><br>
            <button type="button" data-time="11.00AM-12.00AM" onclick="selectTimeSlot('11.00AM-12.00AM')">11.00AM-12.00AM</button>
            <button type="button" data-time="12.00AM-1.00PM" onclick="selectTimeSlot('12.00AM-1.00PM')">12.00AM-1.00PM</button><br>
            <button type="button" data-time="1.00PM-2.00PM" onclick="selectTimeSlot('1.00PM-2.00PM')">1.00PM-2.00PM</button>
            <button type="button" data-time="2.00PM-3.00PM" onclick="selectTimeSlot('2.00PM-3.00PM')" >2.00PM-3.00PM</button><br>
        </div>

       </div><br><br>

       <lable for="location" required value="<?php echo $location;?>" >Blood Donation Centre
       <select id="location" name="location" required>
        <option value="">Select location</option>
        <option value="malabe">Malabe Hospital</option>
        <option value="colombo">General Hospital</option>
        <option value="battaramulla">Nawaloka Hospital</option>
       </select></lable><br><br>

       <label for="bloodtype"required value="<?php echo $btype;?>" >Blood type</label>
       <input type="text" id="type" name="type"><br><br>


       <label for="donation"required value="<?php echo $donatedb;?>" >Have you ever donate blood before<br>
       <input type="radio" id="yes-donate-before" name="donate_before" value="yes">Yes<br>
       <input type="radio" id="no-donate-before" name="donate_before" value="no"> No<br>
    </lable><br>

       <hr>
       <h3>health security check</h3>

       <label for="donation" required value="<?php echo $diseases;?>" >Do you suffer from any diseases<br>
       <input type="radio" id="yes-disease" name="diseases" value="yes">Yes<br>
       <input type="radio" id="no-disease" name="diseases" value="no"> No<br>
    </label><br>

       <label for="donation" required value="<?php echo $allergies;?>" >Do you have any allergies<br>
       <input type="radio" id="yes-allergies" name="allergies" value="yes">Yes<br>
       <input type="radio" id="no-allergies" name="allergies" value="no"> No<br>
    </label><br>

       <label for="donation"required value="<?php echo $tattoos;?>" >Do you have any tattoos <br>
       <input type="radio" id="yes-tattoos" name="tattoos" value="yes">Yes<br>
       <input type="radio" id="no-tattoos" name="tattoos" value="no"> No<br>
    </label><br>

       <h2>Terms and conditions</h2>
       <label>
        <input type="checkbox" id="terms" name="terms" required>
        I agree to all the <a href="">Terms and Conditions</a>
       </label><br><br>

       <button class="submit" type="submit" name="reg"  >Book Appointment</button>

    </div>
    </form>

</div>

</body>