<!DOCTYPE html>
<html lang="zxx">
<?php session_start() ?>
<head>
	<title>VanPeaks - Mt. Brunswick</title>
	<meta charset="utf-8">

	<!-- Link Bootstrap files -->
	<script type="text/javascript" src="../jquery/js/jquery-3.1.1.js"></script>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/bootstrap.js"></script>

	<!-- Link JavaScript files -->
	<script src="../js/logindropdown.js"></script>
	<script type="text/javascript" src="../js/indexHeader.js"></script>

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
					<span class="trail_hover">Trails
					<span class="caret"></span></span>
					<ul class="dropdwn">
						<li><a href="cascade_falls.php">Cascade Falls</a></li>
						<li><a href="garibaldi_lake.php">Garibaldi Lake</a></li>
						<li><a href="jug_island.php">Jug Island</a></li>
						<li><a href="lynn_peak.php">Lynn Peak</a></li>
						<li><a href="mt_brunswick.php">Mount Brunswick</a></li>
						<li><a href="teapot_hill.php">Teapot Hill</a></li>
					</ul>
				</li>
				<li class="listitem button_hover" id="hikeprep">
					<a href="prepare.html" class="link button_hover">Hike Prep</a>
				</li>
				<li class="listitem button_hover" id="about">
					<a href="about.php" class="link">About</a>
				</li>

				<li class="listitem button_hover" id="nojs-login">
					<a href="login.html" class="link">Login/Signup</a>
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
                                <form method="post" action="../php/forum/login.php" onsubmit="return loginValidation()">
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
                                                    onclick="javascript:location.href='login.html'"
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
  
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 header-image" id="mt-brunswick-header">
					<h1 class="jumboMainHeader col-xs-12">Mount Brunswick</h1>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
        <table class="col-xs-12">
          <tr>
						<td></td>
            <td><img src="../images/stats_icons/hard.png" alt="Difficulty"></td>
            <td><img src="../images/stats_icons/long.png" alt="Time"></td>
            <td><img src="../images/stats_icons/elevation.png" alt="Elevation"></td>
            <td><img src="../images/stats_icons/length.png" alt="Distance"></td>
						<td></td>
          </tr>
          <tr>
						<td></td>
            <td>Hard</td>
            <td>6 hours</td>
            <td>1543 m</td>
            <td>14 km</td>
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
						Mount Brunswick is a fantastic hike if you are looking for an amazing view over Lion's Bay. Due to the length
						of the hike, it is recommended to have snacks and a meal as the hike will definitely take over 5 hours. As well,
						have proper gear according to the weather as it is much cooler and there is a lot more wind as you get to the top.
						Be prepared for a long and beautiful hike!
					</p>
					<p class="col-xs-12">
						<img src="../images/mt_brunswick/mt_brunswick_1.jpg" alt="An inline image" class="inline-image-right">
						On the drive to Mount Brunswick, you will encounter the beautiful Lion's Bay to excite you for what is to come
						at the end. When you arrive at the parking lot, there is a map of the trails around Mount Brunswick, and you can clearly
						find where the start of the trail begins. There really isn't any way of getting too lost as there is one path that goes up,
						however when you get closer to the top the trail splits to a loop, and as long as you read the signs, you will be fine.
					</p>
					<p class="col-xs-12">
						As you begin the hike, there is not much to see except lots of trees, and trail markers on the way up. Make sure you follow
						them so you do not wander off-trail. Again, the first hour or two, is a peaceful hike, the trail will start inclining more and more
						as your elevation increases. After about 30 minutes of hiking you will reach Magnesia Creek, and depending on the season, you may or may
						not see a wooden bridge to cross as snow could be covering it. Though it is recommended to cross that as the wooden bridge
						takes you over a stream, however you can cross the stream without going on the bridge if you walk over exposed boulders in the stream.
					</p>
					<p class="col-xs-12">
						After about an hour or two of further hiking, you will come to a fork in the road that splits between Hat Mountain and Tunnel Bluffs. You
						would want to go right, heading uphill onto an old, overgrown road. At around the 5 km mark, you will start seeing views of Howe Sound open
						up, and you will have chances at the glimpses of the bay. Soon you will reach another junction for Howe Sound Crest Trail, what you want to do
						is continue heading straight up the trail as marked by the sign.
					</p>
					<p class="col-xs-12">
						<img src="../images/mt_brunswick/mt_brunswick_2.jpg" alt="An inline image" class="inline-image-left">
						The summit is not too far after the junction however, this is when some technical 'scrambling' is required. The grade of the slope increases, and
						there is not a clear route the higher you go up, but rest assured, just continue going upwards. There is quite a bit of loose rocks, so be careful and
						keep spacing when climbing. If you do reach this point, look behind you as you will see an amazing view of the bay. Continue, climbing and exercise caution
						of the weather and snow as well as ice since it is cooler, and weather can change quickly at high elevations.
					</p>
					<p class="col-xs-12">
						You will eventually reach the saddle which leads to the Brunswick Mountain summit. Becareful as the ridge is very exposed and the other side is a steep drop,
						you will pass a wooden helicopter landing pad along the ridge right before the summit.
					</p>
					<p class="col-xs-12">
						Once you reach the summit, the view is simply incredible, and it is probably one of the best views from the Lower Mainland. You will be able to see Grouse Mountain,
						Crown Mountain, the Lions, Howe Sound and its islands, as well as Vancouver Island. Make sure you bring a camera as it is a view you do not want to forget!
					</p>
				</div>

				<!-- Google Map -->
				<div class="container-fluid">
					<div class="row">
						<iframe class="col-xs-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2591.852804961399!2d-123.19937869812225!3d49.48728740605547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54865d5f9330c64f%3A0x90eebb4fe629f155!2sBrunswick+Mountain!5e0!3m2!1sen!2sca!4v1489890837788" width="600" height="450" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<!-- User reviews -->
				<div class="row">
					<h2 class="col-xs-12 center-heading">Reviews</h2>
				</div>

				<div class="row">
					<hr class="col-xs-12">
				</div>


				<?php if (isset($_SESSION['SESS_LOGIN'])): ?>
				<!-- Review submission form -->
					<div class="row">

						<button class="col-xs-offset-4 col-xs-4 button" id="show">Hey <?php echo $_SESSION['SESS_LOGIN'] ?>! Leave a review</button>
						<div class="col-xs-4"></div>
					</div>
					<br>
					<div>
						<form class="col-xs-12" id="review_form" action="../php/forum/add_topic.php" method="post" onsubmit="return checkReview()">
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
							<textarea name="txtreview" id="txtreview" rows="5" cols="44" placeholder="   Tell us about your hike!"></textarea>
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
				<?php else: ?>
				<?php endif;?>
				<button class="col-xs-offset-4 col-xs-4 button" id="show" onclick="location.href='../php/forum/forum.php'">View reviews</button>
				<br><br>

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
