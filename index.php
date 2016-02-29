<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Samyak is the biggest techno-management fest in all of Andhra Pradesh. The theme adapted this year is START UP INDIA, STAND UP INDIA. This theme is adapted from a slogan coined by our honourable prime minister, Sri. Narendra Modi.">
	<meta name="robots" content="samyak,klu samyak 2016,samyak 2016,samyak 2k16">
	<meta name="keywords" content="samyak,samyak2016,samyak2K16">
	<link href="asserts/style.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="asserts/scripts/library/normalize.css" />
	<link rel="stylesheet" type="text/css" href="aserts/scripts/tentacles/gall.css" />
	<script src="asserts/scripts/library/TweenLite.min.js"></script>
	<script src="asserts/scripts/library/EasePack.min.js"></script>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<script src="asserts/script.js" type="text/javascript"></script>
	<script src="asserts/scripts/library/jquery-1.9.1.js" type="text/javascript"></script>
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>Samyak 2K16 || KLUniversity</title>
	<style>
		canvas {
			transform: translateZ(-50px);
		}
	</style>
</head>

<body>
	<div id="large-header">
		<canvas style="position: absolute; z-index: 1;" id="demo-canvas"></canvas>
		<canvas id="samyak_bg" style="position: absolute; z-index: 2"></canvas>
	</div>
	<div class="container" id="container">
		<?php include 'asserts/header.php'; ?>

		<div class="content">


			<div class="poster">

				<div class="poster_img" style="z-index: 2;"></div>

				<div class="poster_text" style="z-index: 2;">
					<b>A NATIONAL LEVEL TECHNO MANAGEMENT CULTURAL FEST</b>
					<br>
					<b>Feb 25<sup>th</sup> &amp; 26<sup>th</sup></b><br><br>
				<?php /*	<div id="count2">
						<div class="timer" id="day"></div>
						<div class="timer" id="hour"></div>
						<div class="timer" id="min"></div>
						<div class="timer" id="sec"></div>
					</div> */ ?>
					<img style="width: 80%" src="asserts/images/STRIPBELOW1.png">


				</div>
				<script src="asserts/scripts/timer/countdown.js"></script>
				<script src="asserts/scripts/burst/demo-3.js"></script>
				<script src="asserts/scripts/tentacles/gall.js"></script>
			</div>
		</div>
				<?php include 'asserts/footer.php'; ?>
</body>

</html>