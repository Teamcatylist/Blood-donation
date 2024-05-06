
function formDetails(){

  var name=document.getElementById("name ").value;

  var phone=document.getElementById("num").value;

  var date=document.getElementById("date").value;

  var terms=document.getElementById("terms").checked;

  if(name==="" || phone==="" || date==="" ||!terms){

      alert("please fill the above fields");

      return false;
  }

  if(!validatePhoneNum(phone)){
  alert("Enter a valid phone number!!!");
  return false;
}


if(confirm(`Are you sure you want to book an Appointment`)){

//document.getElementById("successful").style.display="block";
//document.getElementById("appointment-form").style.display="none";
//window.location.href="book_appointment_3.html";

return true;

} 
else{
  return false;
}

}

 function selectTimeSlot(time){

  var timeSlotButtons =document.querySelectorAll("#time-slots button");

  timeSlotButtons.forEach(function(button){
          button.classList.remove("selected");
  });
  var selectedButton = document.querySelector(`#time-slots button[data-time="${time}"]`);
  if(selectedButton){
      selectedButton.classList.add("selected");
      document.getElementById("timeslot").value=time;
  }
 }
  
 function validatePhoneNum(phone){
  var numLength =  phone.length;
var num;
if(numLength ===10 || numLength=== 15){
 return true;
}else{
 return false;
}

}

