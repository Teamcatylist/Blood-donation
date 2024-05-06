
/*function calculateAmount(bloodType, quantity) {
  const prices={
"200":200,
"300":300,
"150":150,
"250":250,
"500":500,
"600":600,
"550":550,
"700":700,
  };

  const price=prices[bloodType]*quantity;
  document.getElementById("tot-amount").value=price;
}*/
function calculateAmount(bloodType, quantity) {
    var totalPrice = bloodType * quantity;
    var amountInput = document.getElementById('tot-amount');
    amountInput.value = totalPrice;
}
