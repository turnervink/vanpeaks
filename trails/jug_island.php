<!DOCTYPE html>
<html lang="zxx">
<?php session_start() ?>
<head>
	<title>VanPeaks - Jug Island</title>
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

					<?php if (isset($_SESSION['SESS_LOGIN'])):?>
						<li class="listitem">
							<a href="../php/forum/logout.php" class="link">Logout</a>
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

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 header-image" id="jug-island-header">
					<h1 class="jumboMainHeader col-xs-12">Jug Island</h1>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
        <table class="col-xs-12">
          <tr>
						<td></td>
            <td><img src="../images/stats_icons/easy.png" alt="Difficulty"></td>
            <td><img src="../images/stats_icons/medtime.png" alt="Time"></td>
            <td><img src="../images/stats_icons/elevation.png" alt="Elevation"></td>
            <td><img src="../images/stats_icons/length.png" alt="Distance"></td>
            <td><img src="../images/stats_icons/cloudy.png" alt="Current Weather Conditions"></td>
						<td></td>
          </tr>
          <tr>
						<td></td>
            <td>Easy</td>
            <td>90 minutes return</td>
            <td>100m</td>
            <td>5.5km one-way</td>
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
						Lorem esse sint elit mollit nulla eiusmod cupidatat minim pariatur
						et proident cupidatat duis. Ipsum elit sint sint tempor est irure Lorem labore sint
						magna commodo. Et aliqua duis officia veniam velit id est. Ullamco enim et ad ipsum
						culpa eiusmod nulla ullamco labore dolor nisi enim sit.
					</p>
					<p class="col-xs-12">
						<img src="../images/jug_island/trailhead.jpg" alt="The Jug Island trailhead" class="inline-image-right">
						Quis in aliquip tempor minim ut do nisi esse. Officia do ad deserunt pariatur commodo
						amet sunt. Sit ex incididunt sit consequat nisi nulla consectetur. Cillum laboris ex
						pariatur culpa consequat irure consequat deserunt ea excepteur. Sint reprehenderit
						labore nulla irure id incididunt amet sit commodo. Eu elit exercitation sint qui enim
						eiusmod cupidatat magna non exercitation sunt qui adipisicing officia nulla aliquip
						labore. Nulla id sunt ut dolor in aute sit fugiat anim reprehenderit laborum incididunt
						fugiat veniam elit culpa commodo.
					</p>
					<p class="col-xs-12">
						Exercitation nisi qui sint occaecat est culpa adipisicing. Aliqua adipisicing id officia
						laboris laboris consequat magna laborum occaecat excepteur occaecat consequat amet ullamco
						amet. Mollit minim nulla cillum nulla ullamco eu ullamco enim non ut officia sint sunt
						adipisicing. In dolore non in ullamco nostrud Lorem officia tempor voluptate pariatur aute
						nostrud proident. Nisi reprehenderit ea veniam laboris laborum veniam aute voluptate consectetur
						eu dolor laboris adipisicing nulla. Reprehenderit duis duis aliqua reprehenderit aliquip eu ex
						qui aliquip reprehenderit.
					</p>
					<p class="col-xs-12">
						Lorem esse sint elit mollit nulla eiusmod cupidatat minim pariatur
						et proident cupidatat duis. Ipsum elit sint sint tempor est irure Lorem labore sint
						magna commodo. Et aliqua duis officia veniam velit id est. Ullamco enim et ad ipsum
						culpa eiusmod nulla ullamco labore dolor nisi enim sit.

					</p>
					<p class="col-xs-12">
						Quis in aliquip tempor minim ut do nisi esse. Officia do ad deserunt pariatur commodo
						amet sunt. Sit ex incididunt sit consequat nisi nulla consectetur. Cillum laboris ex
						pariatur culpa consequat irure consequat deserunt ea excepteur. Sint reprehenderit
						labore nulla irure id incididunt amet sit commodo. Eu elit exercitation sint qui enim
						eiusmod cupidatat magna non exercitation sunt qui adipisicing officia nulla aliquip
						labore. Nulla id sunt ut dolor in aute sit fugiat anim reprehenderit laborum incididunt
						fugiat veniam elit culpa commodo.
					</p>
					<p class="col-xs-12">
						<img src="../images/jug_island/stairs.jpg" alt="Ascending stairs on the Jug Island trail" class="inline-image-left">
						Exercitation nisi qui sint occaecat est culpa adipisicing. Aliqua adipisicing id officia
						laboris laboris consequat magna laborum occaecat excepteur occaecat consequat amet ullamco
						amet.
						Mollit minim nulla cillum nulla ullamco eu ullamco enim non ut officia sint sunt
						adipisicing. In dolore non in ullamco nostrud Lorem officia tempor voluptate pariatur aute
						nostrud proident. Nisi reprehenderit ea veniam laboris laborum veniam aute voluptate consectetur
						eu dolor laboris adipisicing nulla. Reprehenderit duis duis aliqua reprehenderit aliquip eu ex
						qui aliquip reprehenderit.
					</p>
					<p class="col-xs-12">
						Lorem esse sint elit mollit nulla eiusmod cupidatat minim pariatur
						et proident cupidatat duis. Ipsum elit sint sint tempor est irure Lorem labore sint
						magna commodo. Et aliqua duis officia veniam velit id est. Ullamco enim et ad ipsum
						culpa eiusmod nulla ullamco labore dolor nisi enim sit.
					</p>
				</div>

				<!-- Google Map -->
				<div class="container-fluid">
					<div class="row">
							<iframe class="col-xs-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10251.371855210087!2d-122.92714662863479!3d49.32216606756687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867bc8fba91841%3A0x4fcd768d13e46dd8!2sJug+Island+Trail%2C+Belcarra%2C+BC+V3H+4N6!5e0!3m2!1sen!2sca!4v1489866986733" width="600" height="450" style="border:0" allowfullscreen></iframe>
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

						<button class="col-xs-offset-4 col-xs-4 button" id="show">Leave a review</button>
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
					<button class="col-xs-offset-4 col-xs-4 button" id="show" onclick="location.href='../php/forum/forum.php'">View reviews</button>
					<br><br>
				<?php endif;?>
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
