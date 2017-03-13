var checkFormUser = false;
var checkFormEmail = false;
var checkFormPass1 = false;
var checkFormPass2 = false;

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
    if (user.length == 0) {
        text = "Please enter your username";
    }
    document.getElementById("userLoginWarn").innerHTML = text;
}

function checkPassLogin(id) {
    var pass = $(id).value;
    var text = "";
    if (pass.length == 0) {
        text = "Please enter your password"
    }
    document.getElementById("passLoginWarn").innerHTML = text;
}

/* Check Registration */
function checkEmailRegi(id) {
    var email = $(id).value;
    var text = "";
    checkFormEmail = true;
    if (email.length != 0) {
        if ((email.indexOf('@') > -1) && (email.indexOf('.') > -1)) {
            text = "";
        } else {
            text = "Invalid email type";
            checkFormEmail = false;
        }
    } else {
        text = "Please enter a new email";
    }
    document.getElementById("emailRegiWarn").innerHTML = text;
}

function checkUserRegi(id) {
    var user = $(id).value;
    var text = "";
    checkFormUser = true;
    if (user.length != 0) {
        if (user.length < 5) {
            text = "Username must be longer than 5 characters";
            checkFormUser = false;
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
    if (pass.length != 0) {
        if (pass.length < 6) {
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
    if (password1.value == password2.value) {
        text = "";
        checkFormPass1 = true;
        checkFormPass2 = true;
    } else {
        text = "Passwords do not match.";
    }
    document.getElementById("passRegiWarn3").innerHTML = text;
}

/* Validates all forms all filled in properly, client-side */
function validation() {
    var text = "";
    var valid = false;
    if (checkFormUser && checkFormEmail && checkFormPass1 && checkFormPass2) {
    } else {
    }
    document.getElementById("regiError").innerHTML = text;
    return valid;
}
