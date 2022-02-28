var password = document.getElementById("password")
  , confirm_password = document.getElementById("password2");


password.addEventListener("input", function (event) {
  if(password.value!=confirm_password.value){
    password.style.borderColor = "red";
        return false
    }

});