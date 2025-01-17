<!DOCTYPE html>
<html lang="zxx">
<?php session_start() ?>
<head>
	<title>VanPeaks - Prepare</title>
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
					<span class="caret"></span></span>					<ul class="dropdwn">
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
  
<!-- Content -->
	<div class="prepare-bg-image">
	<div class="container">
		<div class="prepareContent">
		<div class="page-content">
			<div class="row">
				<div>
					<h1 class="col-xs-12 center-heading">Hike Preparation</h1>
					<p class="col-xs-12">
						You are ready for your hike, but don’t know what you need to prepare for it. Well this is the page you want to be. The first thing you need to know about is your hike, what this means is the specifications of this hike, for example, the distance, length, height change, terrain difficulty, these things will define your hike, and you may need to take extra steps for preparation when considering your options. Before we get started, one of the biggest things about hiking is safety, and to protect yourself from dangers.
					</p>
					<h2 class="coloured-heading center-heading col-xs-12">
						Safety
					</h2>
					<p class="col-xs-12">
						There are many things you can do to keep yourself safe, and out of harms way.<br>
						<br>
							<strong>Tell someone where you are going.</strong> Letting someone know where you’re going, your hike location, the route you’re taking, and telling them when you should be back by is very important. The reason you do this is if something is to happen to you on the trail, and you cannot get help, then rescuers will know where to look for you.<br><br>
							<strong>Ensure you have brought the necessary supplies.</strong> This includes enough water, and food - a meal if your hike is going over a meal time, snacks to keep your energy up, etc.<br><br>
							<strong>Check the weather conditions and plan accordingly.</strong> You will always want to check the weather conditions before you go on a hike, and bring the appropriate gear, such as rain jackets, or extra layers.<br><br>
							<strong>Make noise while hiking.</strong> This will keep wild animals away such as bears, they want to avoid you as much as you want to avoid them, so the only way they can avoid you is if you make noise while hiking.<br><br>
							<strong>Avoid hiking by yourself.</strong> This is the last and final tip for safety, hiking by yourself can be extremely dangerous, if you get hurt, you can’t get help until other hikers pass you, and that’s if there are even hikers on the trail that day. It’s best to bring a buddy, or even a group, because you know what they say, the more the merrier!<br><br>
					</p>

					<div class="col-xs-1 col-md-offset-4">
						<img src="images/prepare/safetyfirst.png" alt="safety first" class="imgSize1">
					</div>

					<h2 class="coloured-heading center-heading col-xs-12">
						What You Will Need
					</h2>
					<p class="col-xs-12">
							<strong>Comfortable shoes. </strong>Don’t be THAT guy that wears sandals or flip-flops on a hike, this is a sure way of spraining your ankle and getting unnecessary injuries on your feet. Rather wear something that is sturdy, and comfortable for the day, running shoes are okay, but if you’re going on a long hike, it is recommended you get hiking shoes for the extra support.<br><br>
							<strong>A light and comfortable bag. </strong>You want a bag that you can have on your back for hours on end and have enough spaces for snacks and extra gear. I would recommend a bag that have chest and waist straps that can hold your bag in place and spray out the tension. <br><br>
							<strong>Food and water. </strong>It is always better to have extra water than no water at all. It is always better to pack an extra bottle of water and for a buddy in need on the trail, they’ll be really grateful, trust me. Snacks such as trail mix or energy bars are great things to munch on while you’re on a hike to keep that energy going, even a lunch such a sandwich would be a great idea if your hike is going over a meal period. <br><br>
							<strong>Technical gear. </strong>A map of the area, a watch and a compass are good things to bring along on a hike. Make sure you know how to shoot a compass bearing or orient a map. You can also bring a long a GPS, though sometimes you may not get signal in certain places to be weary. <br><br>
							<strong>Other gear. </strong>A hat, sunscreen, and of course a camera to take some sweet photos of the view and for memorable photos of your hike.
					</p>

					<div class="col-xs-1 col-md-offset-4">
						<img src="images/prepare/food.jpg" alt="food" class="imgSize2">
					</div>

					<h2 class="coloured-heading center-heading col-xs-12">
						Tips
					</h2>
						<p class="col-xs-12">
							<strong>Look around and stay alert. </strong> When you’re hiking don’t look down at your feet the whole entire time, enjoy the view as you hike and follow the markers and signs of your trail. <br><br>
							<strong>Stay hydrated. </strong> Every time you stop, take a sip of water, it is better for your body to stay hydrated this way than gulping down a bunch of water every few hours. <br><br>
							<strong>Start your hike in the morning. </strong> It’s usually better to hike in the mornings as it’s much cooler, the heat of the sun won’t be as intense as it would be during the afternoon. <br><br>
						</p>

						<div class="col-xs-1 col-md-offset-4">
							<img src="images/prepare/tips.jpg" alt="Tips from Felix" class="imgSize3">
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
 				<li class="socialmedia"><a href="https://www.instagram.com/felixlinn/"><img src="images/instagram.png" alt="Instagram logo" /></a></li>
 				<li class="socialmedia"><a href="http://www.youtube.com"><img src="images/youtube.png" alt="YouTube logo" /></a></li>
 			</ul>
 		</div>

 	</div>
 	<p>Copyright &copy; 2017 VanPeaks | Designed by <a href="#">TEAM</a></p>
 	</footer>



</body>
</html>
