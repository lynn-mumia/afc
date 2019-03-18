function validateForm() {
  var x = document.forms["register"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

  var x = document.forms["register"]["lname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

  var x = document.forms["register"]["country"].value;
  if (x == "select") {
    alert("You must select a Country");
    return false;
  }
  var x = document.forms["register"]["city"].value;
  if (x == "select") {
    alert("You must select a City");
    return false;
  }
  var x = document.forms["register"]["farm"].value;
  if (x == "select") {
    alert("You must select a Farm Location");
    return false;
  }
  var x = document.forms["register"]["size"].value;
  if (x == "") {
    alert("You must fill in a size in acres");
    return false;
  }
  var x = document.forms["register"]["irigation"].value;
  if (x == "select") {
    alert("You must select an I rrigation method");
    return false;
  }
  var x = document.forms["register"]["venture"].value;
  if (x == "select") {
    alert("You must select a farming Venture");
    return false;
  }
  var x = document.forms["register"]["email"].value;
  if (x == "") {
    alert("You must fill in an email");
    return false;
  }
  var x = document.forms["register"]["phone"].value;
  if (x == "") {
    alert("You must fill in a phone number with your code");
    return false;
  }

} 