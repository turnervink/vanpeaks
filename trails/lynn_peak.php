<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>VanPeaks - Lynn Peak</title>
	<meta charset="utf-8">

	<!-- Link Bootstrap files -->
	<script type="text/javascript" src="../jquery/js/jquery-3.1.1.js"></script>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/bootstrap.js"></script>

	<!-- Link JavaScript files -->
	<script src="../js/logindropdown.js"></script>
  <script type="text/javascript" src="../js/headerImage.js"></script>

  <!-- Link base stylesheet -->
  <link rel="stylesheet" href="../style/base.css">
	<link rel="stylesheet" href="../style/review_form.css">

  <script src="../jquery/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="../js/trails.js"></script>

</head>
<body>

	<!-- Navigation bar -->
	<div class="container-fluid">
		<div class="row">
			<nav>
				<ul>
					<li>
						<a href="../index.php" class="link"><img src="../images/Logo.png" id="logo" alt="Home"></a>
					</li>
					<li class="dropdown" id="trails">
					Trails
					<span class="caret"></span>
					<ul class="dropdwn">
						<li><a href="cascade_falls.php">Cascade Falls</a></li>
						<li><a href="garibaldi_lake.php">Garibaldi Lake</a></li>
						<li><a href="jug_island.php">Jug Island</a></li>
						<li><a href="lynn_peak.php">Lynn Peak</a></li>
						<li><a href="mt_brunswick.php">Mount Brunswick</a></li>
						<li><a href="teapot_hill.php">Teapot Hill</a></li>
					</ul>
					</li>
					<li class="listitem" id="hikeprep">
						<a href="../prepare.php" class="link">Hike Prep</a>
					</li>
					<li class="listitem" id="about">
						<a href="../about.php" class="link">About</a>
					</li>
					<li class="listitem" id="nojs-login">
						<a href="../login.php" class="link">Login/Signup</a>
					</li>

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
									<form method="post" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return loginValidation()">
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
				</ul>
			</nav>
		</div>
	</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 header-image" id="lynn-peak-header">
					<h1 class="jumboMainHeader col-xs-12">Lynn Peak</h1>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
        <table class="col-xs-12">
          <tr>
						<td></td>
            <td><img src="../images/stats_icons/easy.png" alt="Difficulty"></td>
            <td><img src="../images/stats_icons/short.png" alt="Time"></td>
            <td><img src="../images/stats_icons/elevation.png" alt="Elevation"></td>
            <td><img src="../images/stats_icons/length.png" alt="Distance"></td>
            <td><img src="../images/stats_icons/cloudy.png" alt="Current Weather Conditions"></td>
						<td></td>
          </tr>
          <tr>
						<td></td>
            <td>Difficult</td>
            <td>4 hours</td>
            <td>760m</td>
            <td>9km loop</td>
            <td>12&deg;</td>
						<td></td>
          </tr>
        </table>
			</div>
		</div>

		<div class="container">
			<div class="page-content">
				<div class="row">
					<h4 class="center-heading col-xs-12">A quick hike for all ages with great views</h4>
				</div>

				<div class="row">
					<p class="col-xs-12">
						The set of trails available at Lynn valley offer a diverse range of hikes for all skill levels.
						Take Lynn Loop for a gorgeous, easy going hike for all ages. For a more intense workout,
						hike up to Lynn Peak for a view that is as rewarding as its hike is difficult. Don’t miss
						the centerpiece, a picturesque suspension bridge that crosses over Lynn Creek.

					</p>


					<p class="col-xs-12">
						<img src="../images/lynn_peak/lynn_inline.jpg" alt="An inline image" class="inline-image-right">
						Looking for something as challenging as the Grouse Grind but looking to avoid the crowds? Look no further then Lynn Peak. From the parking area, cross Lynn creek and keep walking until you find a signboard with a map of the area. Turn right and follow Lynn’s loop until you reach another junction pointing you right, in the direction of Lynn Peak. Clocking in at about 4 hours, with an elevation gain of 720 meters at a total distance of 9km, Lynn peak will get your blood pumping. Hiking enthusiasts should definitely not miss the three viewpoints which offer great views of Seymore and Grouse and the Georgia Strait. The final lookout point, known as Lynn Peak, offers the most spectacular view of Seymore, North Vancouver and on a clear day, the USA.
					</p>
					<p class="col-xs-12">
						For those looking for a less intense, more pleasant stroll should take Lynns loop. Follow the same directions as above except don’t turn off to the Lynn’s Peak hike. The loop takes you all the way down the valley into Lynn’s Creek where there are plenty of places to dip your toes and watch the local youth enjoy the summer heat. Surrounded by second generation forest growth, there are many open areas for children to run around. Most days, you can catch local teenagers risking life and limb for the thrill of diving into the crystal clear 30 foot deep pool.

					</p>

				</div>

				<!-- Google Map -->
				<div class="container-fluid">
					<div class="row">
						<iframe class="col-xs-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6784.948900191419!2d-123.02588457024909!3d49.37323661486544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486653aad3a2663%3A0x17efa57d6d249839!2sLynn+Peak+Trail%2C+North+Vancouver%2C+BC+V7K+3B2!5e0!3m2!1sen!2sca!4v1489890742891" width="600" height="450" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<!-- User reviews -->
				<div class="row">
					<h2 class="col-xs-12 center-heading">Reviews</h2>
				</div>

				<div class="row">
					<hr class="col-xs-12">
				</div>



				<div class="row user-review">
					<img src="../images/lynn_peak/lynn_review.jpg" alt="" class="col-xs-4 review-image">

					<h3 class="col-xs-8">Miranda Carew</h3>

					<p class="col-xs-8">
						Lynn's loop was a great family walk. Plenty of open areas for kids to explore while still in sight of the main path. Don't let your kids play in the water if they're going to fall in and complain for the entire drive home. Saw a bunch of teenagers making huge jumps off of one of the wooden bridges. Did they not see the "no passing this fence" sign?
					</p>
				</div>

				<div class="row user-review">
					<img src="../images/teapot_hill_2.jpg" alt="" class="col-xs-4 review-image">

					<h3 class="col-xs-8">Filip Forsberg</h3>

					<p class="col-xs-8">
						Lynn Peaks was a fantastic hike. Never going on the grind again.
					</p>
				</div>

			<!-- Review submission form -->
				<div class="row">

					<button class="col-xs-offset-4 col-xs-4 button" id="show">Leave a review</button>
					<div class="col-xs-4"></div>
				</div>
				<br>
				<div>
					<form class="col-xs-12" id="review_form" action="http://webdevfoundations.net/scripts/formdemo.asp" method="post" onsubmit="return checkReview()">
					<br>

				<div class="container-fluid">
					<div class="row">

					<div class="col-xs-offset-1 col-xs-3" id="img_frame_container">

					<img id="img_display_frame" src="../images/reviewimageplaceholder.png" height="100" width="100" alt="">
					</div>

					<!-- <div class="col-xs-1"></div> -->
						<div class="col-xs-offset-1 col-xs-6" id="radio_and_title">
							<div class="row radio_buttons">
								<div class="col-xs-2">
									<label><input type="radio" name="rating" id="radrating_0">1<span><span></span></span></label>
								</div>
								<div class="col-xs-2">
									<label><input type="radio" name="rating" id="radrating_1">2<span><span></span></span></label>
								</div>
								<div class="col-xs-2">
									<label><input type="radio" name="rating" id="radrating_2">3<span><span></span></span></label>
								</div>
								<div class="col-xs-2">
									<label><input type="radio" name="rating" id="radrating_3">4<span><span></span></span></label>
								</div>
								<div class="col-xs-2">
									<label><input type="radio" name="rating" id="radrating_4">5<span><span></span></span></label>
								</div>
								<div class="col-xs-2"></div>
							</div>
							<div class="seperator_row row"></div>
							<div class="row">
								<input type="text" id="reviewTitle" name="reviewTitle" class="col-xs-12" placeholder="Review title" >
							</div>
						</div>
					<div class="col-xs-2"></div>
					</div>

				<div class="row">

					<div class="col-xs-offset-1 col-xs-2" id="form_buttons_container">
						<div class="row" id="upload_button_container">
							<input class="filupload_button " id="filupload" name="filupload" type="file" onchange="showPicture(); testPicture();"><label for="filupload" style="color:white;font-weight:normal;">&nbsp;Add A Picture</label>
						</div>
					</div>
					<div class="col-xs-offset-2 col-xs-6" id="textarea_container">
						<textarea id="txtreview" rows="5" cols="44" placeholder="   Tell us about your hike!"></textarea>
					<div class="row">
					<button class="button col-xs-9" type="submit" id="submit">Submit</button>
					</div>
					<div class="col-xs-9" id="warnRating"></div>
					<div class="col-xs-9" id="warnTitle"></div>
					<div class="col-xs-9" id="warnText"></div>
					<div class="col-xs-9" id="warnPicture"></div>
					</div>
					<div class="col-xs-1"></div>
				</div>
				</div>
					</form>
				</div>
				<!-- End review form -->
			</div>
		</div>

		<!-- Footer -->
		<footer class="container-fluid">
		<div class="row">
			<div class="col-xs-offset-2 col-xs-2">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../about.php">About</a></li>
					<li><a href="../prepare.php">Hike Prep</a></li>
				</ul>
			</div>
			<div class="col-xs-2">
				<ul>
					<li><a href="cascade_falls.php">Cascade Falls</a></li>
	 				<li><a href="garibaldi_lake.php">Garibaldi Lake</a></li>
					<li><a href="jug_island.php">Jug Island</a></li>
	 				<li><a href="lynn_peak.php">Lynn Peak</a></li>
					<li><a href="mt_brunswick.php">Mount Brunswick</a></li>
	 				<li><a href="teapot_hill.php">Teapot Hill</a></li>
	 			</ul>
			</div>
			<div class="col-xs-4 col-xs-offset-1" id="social-icons">
				<ul>
					<li>Connect with VanPeaks:</li>
					<li class="socialmedia"><a href="http://www.facebook.com"><img src="../images/facebook.png" alt="Facebook logo" /></a></li>
	 				<li class="socialmedia"><a href="http://www.twitter.com"><img src="../images/twitter.png" alt="Twitter logo" /></a></li>
	 				<li class="socialmedia"><a href="http://www.instagram.com"><img src="../images/instagram.png" alt="Instagram logo" /></a></li>
	 				<li class="socialmedia"><a href="http://www.youtube.com"><img src="../images/youtube.png" alt="YouTube logo" /></a></li>
				</ul>
			</div>

		</div>
		<p>Copyright &copy; 2017 VanPeaks | Designed by <a href="#">TEAM</a></p>
		</footer>
</body>
</html>