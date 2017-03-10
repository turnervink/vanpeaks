function $(id) {
    var element = document.getElementById(id);
    if (element == null)
        alert("Programmer error: " + id + " does not exist.");
    return element;
}
/* Check login */


/* Check Registration */
function checkUserRegi(id) {
    var user = $(id).value;
    var text = "";
    if(user.length != 0) {
      if(user.length < 5) {
        text = "Username must to be longer than 5 characters";
      }
    } else {
      text = "Please enter a username";
    }
    document.getElementById("userRegiWarn").innerHTML = text;
}

function checkPassRegi(id) {
    var pass = $(id).value;
    var text = "";
    if(pass.length != 0) {
      if(pass.length < 6) {
        text = "Password must to be longer than 6 characters";
      }
    } else {
      text = "Please enter a password";
    }
    document.getElementById("passRegiWarn").innerHTML = text;
}

function checkEmailRegi(id) {
    var email = $(id).value;
    var text = "";
    if(email.length != 0) {
      if(email.indexOf('@') > -1) {
      } else {
        text = "Invalid email type";
      }
    } else {
        text = "Please enter a email";
    }
    document.getElementById("emailRegiWarn").innerHTML = text;
}
