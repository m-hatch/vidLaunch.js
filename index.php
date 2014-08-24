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
			<p>Some text describing what vidLaunch can do...</p>
		</div>

	</div><!-- end #container -->

	<!-- Javascript -->
	<script src="js/jquery-1.11.1.min.js"></script>

	<!-- PHP variables -->
	<script type="text/javascript">
		var serverTime = '<?php echo date("F d, Y H:i:s", time())?>',
			serverDate = new Date(serverTime)
			console.log(serverTime);
	</script>

	<!-- Display demo launch time -->
	<script>
		var displaySeconds = setInterval('startTime()', 1000);

		var count = 4;
		function startTime() {

			if(count < 0){
				clearInterval(displaySeconds);
			} else{
				document.getElementById('launch-count').innerHTML = count;
				count--;
			}
		}
	</script>
	
	<!-- Plugin -->
	<script src="js/vidLaunch.js"></script>
	
</body>
</html>