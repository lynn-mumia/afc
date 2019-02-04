function checkUsername(){
  var checkUsername = document.getElementById('checkUsername');
  var checkU = document.getElementById('phone').value;
  var userStat = document.getElementById('userStat');

  if(checkU != ""){
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
          var myResult = this.responseText;
          if(myResult== 1){
            checkUsername.style.color="red";
            checkUsername.innerHTML = "Phone number Already used for Registration";
            userStat.value = "n";
          }
          else{
            checkUsername.style.color="green";
            checkUsername.innerHTML = "Phone Number Available for use";
            userStat.value = "y";
          }
      }
      else if(this.status == 403){
        document.write("Error 403. Forbidden!");
      }
      else if(this.status == 404){
        document.write("Error 404. Not Found!");
      }
    }
    x.open("GET","processunsecure.php?checkU="+ checkU, true);
    x.send();
  }
  else
    checkUsername.innerHTML = "";
}
