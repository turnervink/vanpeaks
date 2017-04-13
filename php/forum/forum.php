<?php session_start() ?>
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
	<a name="nav"><nav></a>
	<nav>
		<ul>
			<li>
				<a href="../../index.php" class="link"><img src="../../images/Logo.png" id="logo" alt="Home"></a>
			</li>
			<li class="dropdown" id="trails">
				<span class="trail_hover">Trails
				<span class="caret"></span></span>
				<ul class="dropdwn">
					<li><a href="../../trails/cascade_falls.php">Cascade Falls</a></li>
					<li><a href="../../trails/garibaldi_lake.php">Garibaldi Lake</a></li>
					<li><a href="../../trails/jug_island.php">Jug Island</a></li>
					<li><a href="../../trails/lynn_peak.php">Lynn Peak</a></li>
					<li><a href="../../trails/mt_brunswick.php">Mount Brunswick</a></li>
					<li><a href="../../trails/teapot_hill.php">Teapot Hill</a></li>
				</ul>
			</li>
			<li class="listitem button_hover" id="hikeprep">
				<a href="../../prepare.php" class="link button_hover">Hike Prep</a>
			</li>
			<li class="listitem button_hover" id="about">
				<a href="../../about.php" class="link">About</a>
			</li>

			<li class="listitem button_hover" id="nojs-login">
				<a href="../../login.php" class="link">Login/Signup</a>
			</li>

			<?php if (isset($_SESSION['SESS_LOGIN'])):?>
					<li class="listitem">
						<a href="logout.php" class="link"><span class="button_hover">Logout</span></a>
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
						<span class = "button_hover">Login/Signup</span>
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
	require_once('config.php');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name


	$sql="SELECT * FROM $tbl_name, members where members.member_id = topic.member_id ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>

<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td bgcolor="#E6E6E6"><strong>By</strong></td>
<td bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysqli_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><?php echo $rows['firstname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>
</table>

<!-- Footer -->
<footer class="container-fluid">
<div class="row">
	<div class="col-xs-offset-2 col-xs-2">
		<ul>
			<li><a href="../../index.php">Home</a></li>
			<li><a href="../../about.php">About</a></li>
			<li><a href="../../prepare.php">Hike Prep</a></li>
		</ul>
	</div>
	<div class="col-xs-2">
		<ul>
			<li><a href="../../trails/cascade_falls.php">Cascade Falls</a></li>
			<li><a href="../../trails/garibaldi_lake.php">Garibaldi Lake</a></li>
			<li><a href="../../trails/jug_island.php">Jug Island</a></li>
			<li><a href="../../trails/lynn_peak.php">Lynn Peak</a></li>
			<li><a href="../../trails/mt_brunswick.php">Mount Brunswick</a></li>
			<li><a href="../../trails/teapot_hill.php">Teapot Hill</a></li>
		</ul>
	</div>
	<div class="col-xs-4 col-xs-offset-1" id="social-icons">
		<ul>
			<li>Connect with VanPeaks:</li>
			<li class="socialmedia"><a href="#"><img src="../../images/facebook.png" alt="Facebook logo" /></a></li>
			<li class="socialmedia"><a href="#"><img src="../../images/twitter.png" alt="Twitter logo" /></a></li>
			<li class="socialmedia"><a href="#"><img src="../../images/instagram.png" alt="Instagram logo" /></a></li>
			<li class="socialmedia"><a href="#"><img src="../../images/youtube.png" alt="YouTube logo" /></a></li>
		</ul>
	</div>

</div>
<p>Copyright &copy; 2017 VanPeaks | Designed by <a href="#">TEAM</a></p>
</footer>
