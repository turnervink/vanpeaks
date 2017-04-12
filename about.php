<!DOCTYPE html>
<html lang="zxx">
<?php session_start() ?>
<head>
	<title>VanPeaks - About</title>
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

	<!-- Navigation bar -->
<div class="container-fluid">
	<div class="row">
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
							<a href="php/forum/logout.php" class="link"><span class="button_hover">Logout</span></a>
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
                                                    onclick="javascript:location.href='../login.php'"
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

 <!-- Header image, Title -->
<div class="about-bg-image">
<div class="container">
	<div class="aboutContent">
	<div class="page-content">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="col-xs-12 center-heading">-Our Mission-</h1>
				<p class="col-xs-12">
					Our mission at VanPeaks is simple: help everyone who is passionate about hiking find their next trail. We have assembled our collective knowledge and experiences from the past to create a streamlined interface to discover and discuss local trails.
				</p>

				<h1 class="col-xs-12 coloured-heading center-heading">-About VanPeaks-</h1>
				<p class="col-xs-12">We are a small team of experts who love to get out and hike around the greater Vancouver area, in beautiful BC. Rain or shine, on any given weekend you will find at least one member of our team working up a sweat on a quest up an amazing hiking trail. We feel the greatest payoff, regardless of trail length or difficulty, is the spectacular views our diverse location has to offer.</p>
			<div class="col-xs-12">
				<img src="images/about_temp.jpg" alt="VanPeaks team picture" class="img-responsive center-block"/>
			</div>
	    </div>
		</div>
	</div>
	</div>
</div>
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
			<li class="socialmedia"><a href="http://www.facebook.com"><img src="images/facebook.png" alt="Facebook logo" /></a></li>
			<li class="socialmedia"><a href="http://www.twitter.com"><img src="images/twitter.png" alt="Twitter logo" /></a></li>
			<li class="socialmedia"><a href="http://www.instagram.com"><img src="images/instagram.png" alt="Instagram logo" /></a></li>
			<li class="socialmedia"><a href="http://www.youtube.com"><img src="images/youtube.png" alt="YouTube logo" /></a></li>
		</ul>
	</div>

</div>
<p>Copyright &copy; 2017 VanPeaks | Designed by <a href="#">TEAM</a></p>
</footer>
</body>
</html>
