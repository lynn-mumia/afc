function validateForm() {
  var x = document.forms["login"]["phone"].value;
  if (x == "") {
    alert("Phone number used in registration must be filled out");
    return false;
  }
  var x = document.forms["login"]["passwd"].value;
  if (x == "") {
    alert("You need your Password to login");
    return false;
  }
}