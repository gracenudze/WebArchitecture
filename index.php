<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Agricultural Monitoring System</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/normalize.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
	<?php 
		session_start(); 
		if (isset($_SESSION['username'])) {
			header('location: ajax.php');
		}
	?>
	<div id="wrapper">
		<header id="header">
			<div class="logo">
				<span class="icon fa fa-tree"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1>Agricultural Monitoring System</h1>
					<p>An automated IOT-based Agricultural Monitoring system.</p>
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="#intro">Intro</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#join_us">Join Us</a></li>
				</ul>
			</nav>
		</header>

	<!-- Main -->
		<div id="main">

		<!-- Intro -->
			<article id="intro">
				<h2 class="major">Intro</h2>
				<span class="image main"><img src="images/hydroponics_introduction1.jpg" alt="" /></span>
				<span class="image main"><img src="images/hydroponics_introduction.jpg" alt="" /></span>
				<p>Hydroponics is a subset of hydroculture, the method of growing plants without soil, using mineral nutrient solutions in a water solvent. Terrestrial plants may be grown with only their roots exposed to the mineral solution, or the roots may be supported by an inert medium, such as perlite or gravel. The nutrients in hydroponics can come from an array of different sources; these can include but are not limited to byproduct from fish waste, duck manure, or commercial fertilisers. </br>
				</br>Growing with hydroponics comes with many advantages, the biggest of which is a greatly increased rate of growth in your plants. With a proper setup, your plants will mature up to 25% faster and produce up to 30% more than the same plants grown in soil.</br>
				</br>Plants in a hydroponic system grow more quickly because they have food and water available to them all the time. They produce bigger crops because they can devote their energy to producing their crop rather than producing large roots such as would be needed in soil to seek out water and nutrients. Hydroponically-grown plants have smaller root systems because the roots do not need to go out looking for nutrients and water.</br>
				</br>All of this is possible through careful control of the nutrient solution and pH levels. A hydroponic system will also use 70-90% less water than soil based plants because the system is enclosed, which results in less evaporation. Hydroponics is better for the environment because it reduces waste and pollution from soil runoff.</p>
			</article>

		<!-- Work -->
			<article id="work">
				<h2 class="major">Work</h2>
				<span class="image main"><img src="images/breadboard2.jpeg" alt="" /></span>
				<span class="image main"><img src="images/arduinoo.jpeg" alt="" /></span>
				<span class="image main"><img src="images/breadboard1.jpeg" alt="" /></span>
			</article>

		<!-- About -->
			<article id="about">
				<h2 class="major">About</h2>
				<span class="image main"><img src="images/nft.jpg" alt="" /></span>
				<p>The entire system mainly consists of a water pump, a fertiliser pump, an NPK sensor, a soil moisture sensor and a soil temperature sensor. </br>
				</br>The temperature sensor checks for how high or low the temperature of the soil is; as well as the soil moisture sensor checking for the moisture content of the soil. The NPK sensor also determines the nutrient content of the soil.</br>
				</br>A threshold value is set for the sensors, depending on the type of plant being grown on the soil. If the soil temperature and moisture content both happen to be low, there is an indication that the plant needs to be watered; and the waterpump is automatically triggered. If the nutrient content of the soil also happens to be low, then the fertiliser pump is also automatically turned on.</br>
				</br>Overlooking pH control can be perilous for plants, particularly those that rely on water supplies with high alkalinity.</br>
				The pH of the nutrient solution is a major factor in determining the uptake rate of many essential nutrient ions. Run pH too high and the dreaded nutrient lockout looms.</br>
				The pH sensor detects the pH level of the water and prompts the pH up/ pH down pump to balance out the pH levels in the reservoir.</br>
				</br>The grow box has a drainage system which allows continous flow of nutrient solution runs over the plants roots.</br>
				</br>This type of system works very well because the roots of a plant absorb more oxygen from the air than from the nutrient solution itself. Since only the tips of the roots come in contact with the nutrient solution, the plant is able to get more oxygen which fascilitates a faster rate of growth.</p>
			</article>

		<!-- Join Us -->
			<article id="join_us">
				<h2 class="major">Join Us</h2>
				<div class="form">
				<ul class="tab-group">
					<li class="tab active"><a href="#signup">Sign Up</a></li>
					<li class="tab"><a href="#login">Log In</a></li>
				</ul>

				<div class="tab-content">
					<div id="signup">
					<h1>Sign Up for Free</h1>
					<form action="index.php#join_us" method="post">
							<?php include('errors.php'); ?>	
							<div class="top-row">
						<div class="field-wrap">
							<label>
								First Name<span class="req">*</span>
							</label>
								<input type="text" required autocomplete="off" name ="firstname" value="<?php echo$firstname; ?>"/>
						</div>
						<div class="field-wrap">
							<label>
								Last Name<span class="req">*</span>
							</label>
								<input type="text" required autocomplete="off" name="lastname" value="<?php echo $lastname; ?>" />
						</div>
						</div>
						<div class="field-wrap">
						<label>
							Email Address<span class="req">*</span>
							</label>
								<input type="email" required autocomplete="off" name="email" value="<?php echo $email; ?>"/>
						</div>
						<div class="field-wrap">
						<label>
							Set A Password<span class="req">*</span>
							</label>
								<input type="password" name="password" required autocomplete="off" />
						</div>
						<button type="submit" class="button button-block" name="reg_user" />Get Started</button>
					</form>
					</div>

					<div id="login">
					<h1>Welcome Back!</h1>
					<form action="index.php#login" method="post">
						<div class="field-wrap">
						<label>
							Email Address<span class="req">*</span>
							</label>
						<input type="email" name="email" required autocomplete="off" />
						</div>
						<div class="field-wrap">
						<label>
							Password<span class="req">*</span>
							</label>
						<input type="password" name="password" required autocomplete="off" />
						</div>
						<p class="forgot"><a href="#">Forgot Password?</a></p>
						<button class="button button-block" name="login_user"/>Log In</button>
					</form>
					</div>
				</div>

			<!-- /form -->
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script  src="assets/js/index.js"></script>
			</article>
		</div>

	</div>

<!-- BG -->
	<div id="bg"></div>
<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
