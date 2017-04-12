<!DOCTYPE html>
<html lang="zxx">
<?php
	session_start();
 ?>
<head>
	<title>VanPeaks - Home</title>
	<meta charset="utf-8">

  <!-- Link Bootstrap files -->
  <script type="text/javascript" src="jquery/js/jquery-3.1.1.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/js/bootstrap.js"></script>

  <!-- Link JavaScript files -->
  <script src="js/logindropdown.js"></script>
  <script src="js/login.js"></script>
  <script type="text/javascript" src="js/indexHeader.js"></script>

  <!-- Link base stylesheet -->
  <link rel="stylesheet" href="style/base.css">

</head>
<body>

<!-- Header image, Title, Motto -->
<div class="container-fluid header-image" id="index-header" onload="indexHeader()">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="jumboMainHeader col-xs-12">VanPeaks</h1>
			<h2 class="jumboMinHeader col-xs-12">Hike your hike</h2>
            <a href="#nav" id="glyphAnchor"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
		</div>
	</div>
</div>

<!-- Navigation bar -->
<div class="container-fluid">
<div class="row">
	<a name="nav"><nav></a>
	<nav>
		<ul>
			<li>
				<a href="index.php" class="link"><img src="images/Logo.png" id="logo" alt="Home"></a>
			</li>
			<li class="dropdown" id="trails">
				<span class="trail_hover">Trails
				<span class="caret"></span></span>
				<ul class="dropdwn">
					<li><a href="trails/cascade_falls.php">Cascade Falls</a></li>
					<li><a href="trails/garibaldi_lake.php">Garibaldi Lake</a></li>
					<li><a href="trails/jug_island.php">Jug Island</a></li>
					<li><a href="trails/lynn_peak.php">Lynn Peak</a></li>
					<li><a href="trails/mt_brunswick.php">Mount Brunswick</a></li>
					<li><a href="trails/teapot_hill.php">Teapot Hill</a></li>
				</ul>
			</li>
			<li class="listitem button_hover" id="hikeprep">
				<a href="prepare.php" class="link button_hover">Hike Prep</a>
			</li>
			<li class="listitem button_hover" id="about">
				<a href="about.php" class="link">About</a>
			</li>

			<li class="listitem button_hover" id="nojs-login">
				<a href="login.php" class="link">Login/Signup</a>
			</li>

			<?php if (isset($_SESSION['SESS_LOGIN'])):?>
					<li class="listitem">
						<a href="php/forum/logout.php" class="link">Logout</a>
					</li>
				<?php else: ?>
			<li class="navLink" id="js-login">
				<div class="dropdown button_hover">
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
															<form method="post" action="php/forum/login.php" onsubmit="return loginValidation()">
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
																									onclick="javascript:location.href='login.php'"
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

<!-- page-content would be here for a slimmer page layout -->

<!--     <div class="img_grid_container">
        <div class="container img_grid">
            <h1>Choose Your Hike</h1>
            <div class="row">
                <div class="col-xs-3 col-offsetimage_border" >
                        <a href="trails/cascade_falls.php">
                            <img src="images/cascade_falls.jpg" alt="hike">
                        </a>
                </div>
                <div>
            </div>
        </div>
    </div> -->

    <div class="img_grid_container">
  		<div class="container img_grid">

				<?php if (isset($_SESSION['SESS_LOGIN'])):?>
				<h1 class="img_grid_title"><?php echo $_SESSION['SESS_LOGIN']?>, Choose Your Hike:</h1>
				<?php else: ?>
    		<h1 class="img_grid_title">Choose Your Hike:</h1>
				<?php endif; ?>
    			<div class="row">
    				<div class="col-xs-2 col-xs-offset-2 image_border" >
    					<a href="trails/cascade_falls.php">
    						<img src="images/cascade_falls.jpg" alt="hike"> <!-- Cascade Falls -->
    					</a>
    				</div>
    				<div class="col-xs-2 col-xs-offset-1 image_border center_image">
    					<a href="trails/garibaldi_lake.php">
    						<img src="images/index_grid_images/cascade_falls_grid.png" alt="hike"> <!-- Garibaldi Lake -->
    					</a>
    				</div>
    				<div class="col-xs-2 col-xs-offset-1 image_border">
    					<a href="trails/jug_island.php">

    						<img src="images/index_grid_images/jug_island_grid.png" alt="hike"> <!-- Jug Island -->
    					</a>
    				</div>
    			</div>
    			<div class="row view_more_row info_row">
    				<div class="col-xs-2  col-xs-offset-2">
    					<a href="trails/cascade_falls.php"><p class="view_more">Cascade Falls</p></a>
    				</div>
    				<div class="col-xs-2  col-xs-offset-1">
                        <a href="trails/garibaldi_lake.php"><p class="view_more">Garibaldi Lake</p></a>
                    </div>
    				<div class="col-xs-2  col-xs-offset-1">
                        <a href="trails/jug_island.php"><p class="view_more">Jug Island</p></a>
                    </div>
    			</div>

    			<div class="row">
    				<div class="col-xs-2  col-xs-offset-2 image_border">
    					<a href="trails/lynn_peak.php">
    						<img src="images/index_grid_images/lynn_grid.png" alt="hike"> <!-- Lynn Peak -->
    					</a>
    				</div>
    				<div class="col-xs-2  col-xs-offset-1 image_border center_image">
    					<a href="trails/mt_brunswick.php">
    						<img src="images/index_grid_images/mt_brunswick_grid.png" alt="hike"> <!-- Mt. Brunswick -->    					</a>
    				</div>
    				<div class="col-xs-2  col-xs-offset-1 image_border">
    					<a href="trails/teapot_hill.php">
    						<img src="images/index_grid_images/teapot_hill_grid.png" alt="hike"> <!-- Teapot Hill -->
    					</a>
    				</div>
    			</div>
    			<div class="row view_more_row info_row">
                    <div class="col-xs-2  col-xs-offset-2">
                        <a href="trails/lynn_peak.php"><p class="view_more">Lynn Peak</p></a>
                    </div>
                    <div class="col-xs-2  col-xs-offset-1">
                        <a href="trails/mt_brunswick.php"><p class="view_more">Mount Brunswick</p></a>
                    </div>
                    <div class="col-xs-2  col-xs-offset-1">
                        <a href="trails/teapot_hill.php"><p class="view_more">Teapot Hill</p></a>
                    </div>
                </div>
			</div><!-- Lynn Peak, Mount Brunswick, Teapot Hill -->
		</div>



	<!-- Footer -->
 	<footer class="container-fluid">
 	<div class="row">
 		<div class="col-xs-offset-2 col-xs-2">
 			<ul>
 				<li><a href="index.php">Home</a></li>
 				<li><a href="about.php">About</a></li>
 				<li><a href="prepare.php">Hike Prep</a></li>
 			</ul>
 		</div>
 		<div class="col-xs-2">
 			<ul>
				<li><a href="trails/cascade_falls.php">Cascade Falls</a></li>
 				<li><a href="trails/garibaldi_lake.php">Garibaldi Lake</a></li>
				<li><a href="trails/jug_island.php">Jug Island</a></li>
 				<li><a href="trails/lynn_peak.php">Lynn Peak</a></li>
				<li><a href="trails/mt_brunswick.php">Mount Brunswick</a></li>
 				<li><a href="trails/teapot_hill.php">Teapot Hill</a></li>
 			</ul>
 		</div>
 		<div class="col-xs-4 col-xs-offset-1" id="social-icons">
 			<ul>
 				<li>Connect with VanPeaks:</li>
 				<li class="socialmedia"><a href="#"><img src="images/facebook.png" alt="Facebook logo" /></a></li>
 				<li class="socialmedia"><a href="#"><img src="images/twitter.png" alt="Twitter logo" /></a></li>
 				<li class="socialmedia"><a href="#"><img src="images/instagram.png" alt="Instagram logo" /></a></li>
 				<li class="socialmedia"><a href="#"><img src="images/youtube.png" alt="YouTube logo" /></a></li>
 			</ul>
 		</div>

 	</div>
 	<p>Copyright &copy; 2017 VanPeaks | Designed by <a href="#">TEAM</a></p>
 	</footer>



</body>
</html>
<!-- <div class="col-xs-4">
    					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cascade Falls</p>
    				</div>
    				<div class="col-xs-4" >
    					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cascade Falls</p>
    				</div>
    				<div class="col-xs-4">
    					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cascade Falls</p>
    				</div> -->
