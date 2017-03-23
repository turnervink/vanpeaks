var checkRegiFormUser = false;
var checkRegiFormEmail = false;
var checkRegiFormPass1 = false;
var checkRegiFormPass2 = false;
var checkLoginFormUser = false;
var checkLoginFormPass = false;

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
    checkLoginFormUser = true;
    if (user.length == 0) {
        text = "Enter your username";
        checkLoginFormUser = false;
    } else if (user.length < 5) {
        text = "Invalid username length";
        checkLoginFormUser = false;
    }
    document.getElementById("userLoginWarn").innerHTML = text;
}

function checkPassLogin(id) {
    var pass = $(id).value;
    var text = "";
    checkLoginFormPass = true;
    if (pass.length == 0) {
        text = "Enter your password";
        checkLoginFormPass = false;
    } else if (pass.length < 6) {
        text = "Invalid password length";
        checkLoginFormPass = false;
    }
    document.getElementById("passLoginWarn").innerHTML = text;
}

function loginValidation() {
    var text = "";
    var valid = false;
    if (checkLoginFormPass() && checkLoginFormUser()) {
        valid = true;
    } else {
        text = "Please fix all errors";
    }
    document.getElementById("loginError").innerHTML = text;
    return valid;
}

/* Check Registration */
function checkEmailRegi(id) {
    var email = $(id).value;
    var text = "";
    checkRegiFormEmail = true;
    if (email.length != 0) {
        if ((email.indexOf('@') > -1) && (email.indexOf('.') > -1)) {
            text = "";
        } else {
            text = "Invalid email type";
            checkRegiFormEmail = false;
        }
    } else {
        text = "Please enter a new email";
    }
    document.getElementById("emailRegiWarn").innerHTML = text;
}

function checkUserRegi(id) {
    var user = $(id).value;
    var text = "";
    checkRegiFormUser = true;
    if (user.length != 0) {
        if (user.length < 5) {
            text = "Username must be longer than 5 characters";
            checkRegiFormUser = false;
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
        checkRegiFormPass1 = true;
        checkRegiFormPass2 = true;
    } else {
        text = "Passwords do not match.";
    }
    document.getElementById("passRegiWarn3").innerHTML = text;
}

/* Validates all forms all filled in properly, client-side */
function regiValidation() {
    var text = "";
    var valid = false;
    if (checkRegiFormUser() && checkRegiFormEmail() && checkRegiFormPass1() && checkRegiFormPass2()) {
        valid = true;
    } else {
        text = "Please fix all errors";
        valid = false;
    }
    document.getElementById("regiError").innerHTML = text;
    return valid;
}
