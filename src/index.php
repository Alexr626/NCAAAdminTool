<!DOCTYPE HTML>
<!--
    ACKNOWLEDGEMENT: HTML, CSS TEMPLATE ADAPTED FROM BELOW SOURCE WITH SLIGHT MODIFICATIONS:
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>NCAA BASKETBALL DATABASE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="https://www.ncaa.com/">NCAA</a></strong> GAMES DATABSE</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="updateinfo.php">Make Data Changes</a></li>
						<li><a href="ncaastats.php">NCAA Statistics</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<h2>NCAA Basketball Database - Navigation</h2>
				<p>For Load DDL, Insert, Update, Delete, Selection and Projection Queries, GO TO PAGE <a href="updateinfo.php">MAKE DATA CHANGES</a>.</p>
                <p>For Join, Aggregation and Division Queries, GO TO PAGE <a href="ncaastats.php">NCAA STATISTICS.</a></p>
			</section>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>The NCAA Basketball Database</h2>
									<p>For team managers, players, and stats junkies alike, this powerful tool is a one-stop-shop for all your data needs!</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>The domain we’re going to model is the NCAA basketball league. We will focus on teams, and associated player data to help us gain insight on what makes a basketball team successful.
                                   The database will model the following aspects: NCAA team, games, players, head coach, event highlights, venues, mascot, and financial transactions.</p>
								<p>There are two tiers of users for our model. The NCAA basketball league (Tier 1) will have unrestricted access to create, read, update, and delete changes in all of the data tables. For NCAA team managers (Tier 2), they can only read (query) results from the data tables.
                                This limited access ensures that the NCAA team managers do not have the permission to inadvertently add incorrect data or skew crucial game data (ie: game scores) that will impact the integrity of the league.</p>
							</div>
						</div>
					</div>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>INTERESTED IN BECOMING A MEMBER?</h2>
						</header>
						<ul class="actions">
							<li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="button special big">Get in touch</a></li>
						</ul>
					</div>
				</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://www.ncaa.com/sports/basketball-men/d1" class="icon fa-twitter"></a></li>
						<li><a href="https://www.instagram.com/marchmadness/" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>