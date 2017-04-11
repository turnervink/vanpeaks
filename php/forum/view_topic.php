<head>
	<title>VanPeaks - Forum</title>
	<meta charset="utf-8">

  <!-- Link Bootstrap files -->
  <script type="text/javascript" src="../../jquery/js/jquery-3.1.1.js"></script>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
  <script src="../../bootstrap/js/bootstrap.js"></script>

  <!-- Link JavaScript files -->
	<script src="../../js/logindropdown.js"></script>
  <script src="../../js/login.js"></script>

  <script type="text/javascript" src="../../js/headerImage.js"></script>

  <!-- Link base stylesheet -->
  <link rel="stylesheet" href="../../style/base.css">
	<link rel="stylesheet" href="css/forum.css">

</head>
<!-- Navigation bar -->
<div class="container-fluid">
	<div class="row">
		<nav>
			<ul>
				<li>
					<a href="../../index.php" class="link"><img src="../../images/Logo.png" id="logo" alt="Home"></a>
				<li class="dropdown" id="trails">
				Trails
				<span class="caret"></span>
				<ul class="dropdwn">
					<li><a href="../../itrails/cascade_falls.php">Cascade Falls</a></li>
					<li><a href="../../itrails/garibaldi_lake.php">Garibaldi Lake</a></li>
					<li><a href="../../itrails/jug_island.php">Jug Island</a></li>
					<li><a href="../../itrails/lynn_peak.php">Lynn Peak</a></li>
					<li><a href="../../itrails/mt_brunswick.php">Mount Brunswick</a></li>
					<li><a href="../../itrails/teapot_hill.php">Teapot Hill</a></li>
				</ul>
				</li>
				<li class="listitem" id="hikeprep">
					<a href="../../iprepare.php" class="link">Hike Prep</a>
				</li>
				<li class="listitem" id="about">
					<a href="../../iabout.php" class="link">About</a>
				</li>
				<li class="listitem" id="nojs-login">
					<a href="../../ilogin.php" class="link">Login/Signup</a>
				</li>

				<?php if (isset($_SESSION['SESS_LOGIN'])):?>
					<li class="listitem">
						<a href="php/forum/logout.php" class="link">Logout</a>
					</li>
				<?php else: ?>
				<li class="navLink" id="js-login">
					<div class="dropdown">
						<button
																class="btn btn-default dropdown-toggle link"
																id="dropdownButton"
								type="button"
																data-toggle="dropdown"
								aria-haspopup="true"
																aria-expanded="false" >
							Login/Signup
						</button>
						<ul class="dropdown-menu" id="dropdownForm" aria-labelledby="dropdownButton">
														<li id="loginForm">
																<form method="post" action="login.php" onsubmit="return loginValidation()">
																		<div>
																				<fieldset class="field">
																						<!-- Login Title -->
																						<legend class="h3">Login</legend>
																								<div id="loginError" class="red"></div>
																						<!-- Username Title -->
																						<label for="userLogin">Username:</label><br>
																								<input type="text" name="userLogin" id="userLogin" onblur="checkUserLogin('userLogin')" required>
																								<div id="userLoginWarn" class="red"></div>
																						<!-- Password Title -->
																						<label for="passLogin">Password:</label><br>
																								<input type="password" name="passLogin" id="passLogin" onblur="checkPassLogin('passLogin')" required="">
																								<div id="passLoginWarn" class="red"></div>
																						<br>
																						<input type="submit" value="Login" id="loginButton">
																						<br><br>
																						<input
																										type="button"
																										value="or Register Here"
																										id="registerButton"
																										onclick="javascript:location.href='../../login.php'"
																						>
																				</fieldset>
																		</div>
																</form>
														</li>
						</ul>
					</div>
				</li>
			<?php endif; ?>
			</ul>
		</nav>
	</div>
</div>

<?php

	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];

	$sql="SELECT * FROM $tbl_name WHERE id='$id'";
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	$rows=mysqli_fetch_array($result);
?>

<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1">
<tr>
<td class="topic_title" bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Posted: </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
<?php
$tbl_name2="response"; // Switch to table "response"

$sql2="SELECT * FROM $tbl_name2 join members on members.member_id = response.member_id and topic_id='$id'";
$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

while($rows=mysqli_fetch_array($result2)){
?>

<table class="post_response" width="100%" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>By:</strong> <?php echo $rows['firstname']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date:</strong> <?php echo $rows['datetime']; ?></td>
</tr>
</table>

<?php
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>

<?php if (isLoggedIn()): ?>
<div id="response_form">
<h3>Respond:</h3>
<form name="form1" method="post" action="add_response.php">
	<textarea name="response" cols="60" rows="5" id="answer"></textarea><br><br>
	<input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset">
	<input name="id" type="hidden" value="<?php echo $id; ?>">
</form>
</div>
<?php else: ?>
<div id="response_form">
	<h3>Please <a href="login.php">log in</a> to respond</h3>
</div>
<?php endif; ?>
