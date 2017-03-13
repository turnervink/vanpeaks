function $(id) {
    var element = document.getElementById(id);
    if (element == null)
        alert("Programmer error: " + id + " does not exist.");
    return element;
}
/* Check login */
function checkUserLogin(id) {
    var user = $(id).value;
    var text = "";
    if(user.length == 0) {
      text = "Please enter your username";
    }
    document.getElementById("userLoginWarn").innerHTML = text;
}

function checkPassLogin(id) {
    var pass = $(id).value;
    var text = "";
    if(pass.length == 0) {
      text = "Please enter your password"
    }
    document.getElementById("passLoginWarn").innerHTML = text;
}

/* Check Registration */
function checkEmailRegi(id) {
    var email = $(id).value;
    var text = "";
    if(email.length != 0) {
      if((email.indexOf('@') > -1) && (email.indexOf('.') > -1)) {
          text = "";
      } else {
        text = "Invalid email type";
      }
    } else {
        text = "Please enter a new email";
    }
    document.getElementById("emailRegiWarn").innerHTML = text;
}

function checkUserRegi(id) {
    var user = $(id).value;
    var text = "";
    if(user.length != 0) {
      if(user.length < 5) {
        text = "Username must be longer than 5 characters";
      }
    } else {
      text = "Please enter a new username";
    }
    document.getElementById("userRegiWarn").innerHTML = text;
}

/* Checks to see if password is longer than 6 characters */
function checkPassRegi(id) {
    var pass = $(id).value;
    var text = "";
    if(pass.length != 0) {
      if(pass.length < 6) {
        text = "Password must to be longer than 6 characters";
      }
    } else {
      text = "Please enter a new password";
    }
    document.getElementById("passRegiWarn2").innerHTML = text;
}

/* Checks to see if both passwords match */
function checkPassRegiMatch() {
   var password1 = document.getElementById('passRegister1');
   var password2 = document.getElementById('passRegister2');
   var text = "";
   if(password1.value == password2.value) {
     text = "";
   } else {
     text = "Passwords do not match.";
   }
   document.getElementById("passRegiWarn2").innerHTML = text;
}
