<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Register Form</title>
<link href="css/loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>

<form id="registerForm" name="registerForm" method="post" action="register.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>Email </th>
      <td><input name="lname" type="emailRegister" class="textfield" id="lname" /></td>
    </tr>
    <tr>
      <th width="124">Login</th>
      <td width="168"><input name="userRegister" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="passRegister1" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="passRegister2" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>
</body>
</html>
