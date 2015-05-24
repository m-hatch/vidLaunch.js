<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>vidLaunch Demo</title>
<link href='http://fonts.googleapis.com/css?family=Abel|Roboto:400,700,300,300italic,900,500,400italic,500italic,700italic,900italic|Play:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

	<div id="container">

		<div class="text">
			<h1>vidLaunch</h1>
			<h2>Choose when to launch your videos</h2>
		</div>

		<div class="vid-wrapper">		
			<video poster="" id="video">
				<source src="media/polina.webm" type="video/webm">
				<source src="media/polina.mp4" type="video/mp4">
			</video>
			<div class="date">
				<p>Launch video in<span id="launch-count">5</span>seconds</p>
			</div>
		</div>

		<div class="text">
			<h3>Features</h3>
			<ul>
				<li><p>Set the exact time to play your video</p></li>
				<li><p>Choose to launch from server time or client time</p></li>
				<li><p>Create custom playback loops for your video</p></li>
			</ul>
			<hr>
			<div class="code-link">
				<a href="https://github.com/m-hatch/vidLaunch.js"><p>View source code</p></a>
			</div>
		</div>

	</div><!-- end #container -->

	<!-- jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>

	<!-- Convert PHP variable for server time -->
	<script type="text/javascript">
		var serverTime = '<?php echo date("F d, Y H:i:s", time())?>',
			serverDate = new Date(serverTime)
	</script>
	
	<!-- vidLaunch plugin -->
	<script src="js/vidLaunch.js"></script>

	<!-- Display demo launch time -->
	<script src="js/demoDisplay.js"></script>
	
</body>
</html>