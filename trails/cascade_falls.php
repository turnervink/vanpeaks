<!DOCTYPE html>
<html lang="zxx">
<?php session_start() ?>
<head>
	<title>VanPeaks - Cascade Falls</title>
	<meta charset="utf-8">

  <!-- Link Bootstrap files -->
  <script type="text/javascript" src="../jquery/js/jquery-3.1.1.js"></script>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <script src="../bootstrap/js/bootstrap.js"></script>

  <!-- Link JavaScript files -->
	<script src="../js/logindropdown.js"></script>
  <script type="text/javascript" src="../js/indexHeader.js"></script>

  <!-- Link base and trails stylesheets -->
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
					<a href="../prepare.php" class="link button_hover">Hike Prep</a>
				</li>
				<li class="listitem button_hover" id="about">
					<a href="../about.php" class="link">About</a>
				</li>

				<li class="listitem button_hover" id="nojs-login">
					<a href="../login.php" class="link">Login/Signup</a>
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

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 header-image" id="cascade-falls-header">
					<h1 class="jumboMainHeader col-xs-12">Cascade Falls</h1>
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
						<td></td>
          </tr>
          <tr>
						<td></td>
            <td>Easy</td>
            <td>30 minutes</td>
            <td>250m</td>
            <td>1.3km loop</td>
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
						Located Northeast of Mission, BC, Cascade Falls is a scenic waterfall that can be viewed from a suspension bridge that crosses the river, just in front of the falls. The short walk uphill to the falls makes the long drive worth the trip.
					</p>
					<p class="col-xs-12">
						<img src="../images/cascade_falls/cascade_falls_2.jpg" alt="Suspension bridge at Cascade Falls" class="inline-image-right">
						From the parking lot, walk towards the metal gate by the hill (note: sometimes the gate is not noticeable if it is open) and walk up towards a trail that begins on the right. Follow the trail up a steep hill as it winds to the right and within minutes you reach a set of wooden stairs. Climb the wooden stairs until you are just underneath the suspension bridge, where you get the first scenic view of Cascade Falls. Walk up the remaining stairs and cross the suspension bridge. During the early spring months and after a rainfall, an enormous amount of water flows over the rocks and into the canyon down below. Continue across the bridge to the wooden platform on the far side.
					</p>
					<p class="col-xs-12">
						The wooden platform is as close as you can get to the falls and when a lot of water is dropping into the canyon, you can feel the mist from this platform. For those with strollers or wheelchairs, you can continue on the wide, gravel road to reach the falls. That route is slightly longer and less scenic. But the road will still reach the falls at the top so you can still access the viewing platform without navigating the stairs.
					</p>
					<p class="col-xs-12">
						After enjoying the view, cross back over the suspension bridge and walk back down the wooden stairs, returning to the parking lot via the gravel trail.
					</p>
				</div>

				<!-- Google Map -->
				<div class="container-fluid">
					<div class="row">
						<iframe class="col-xs-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.0922556763044!2d-122.21667768463826!3d49.274649079261366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548424c28c8e7423%3A0xf4861d5d9d36feae!2sCascade+Falls+Trail%2C+Fraser+Valley+F%2C+BC+V2V+7G7!5e0!3m2!1sen!2sca!4v1489890460274" width="600" height="450" style="border:0" allowfullscreen></iframe>
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
				<li class="socialmedia"><a href="#"><img src="../images/facebook.png" alt="Facebook logo" /></a></li>
				<li class="socialmedia"><a href="#"><img src="../images/twitter.png" alt="Twitter logo" /></a></li>
				<li class="socialmedia"><a href="#"><img src="../images/instagram.png" alt="Instagram logo" /></a></li>
				<li class="socialmedia"><a href="#"><img src="../images/youtube.png" alt="YouTube logo" /></a></li>
			</ul>
		</div>

	</div>
	<p>Copyright &copy; 2017 VanPeaks | Designed by <a href="#">TEAM</a></p>
	</footer>
</body>
</html>
