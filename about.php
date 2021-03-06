<?php 
	session_start();
?>
<meta charset="utf-8">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>About</title>

		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<header>
			<!-- Menu -->
			<div class="container">
				<div id="logo">
					<h1><span class="destaque">The Gifted</span></h1>
				</div>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="selecionado"><a href="about.php">About</a></li>
						<li><a href="characters.php">Characters</a></li>
						<li><a href="episodes.php">Episodes</a></li>
						<li><a href="games.php">Games</a></li>
						<?php 
							if (!isset($_SESSION['id'])){
								echo"<li><a href='register.php'>Login/Register</a></li>";
							}
							else{
								echo"<li><a href='profile.php'>Profile</a></li>";
								echo"<li><a href='logout.php'>Logout</a></li>";
							}
						?>
					</ul>
				</nav>
			</div>
		</header>
		
		<section id="info">
			<div class="container">
				<h2>What we are?</h2>
				<p>We are a website where you can find information about the serie "The Gifted".</p>
				<h2>What we have?</h2>
				<p>We have a page where we can find all the characters of the series and their information, we have a page where we can see how many episodes there are and information about each episode and lastly we have a page where games will be available for fun, the first game is building a puzzle of an image of the series our choice, the second game consists of small quizzes about the series to see your knowledge and the third game is to listen to a audio where a character will talk and we have to guess who is talking or we can complete the sentence.</p>
			</div>
		</section>
		<section id="owners">
			<div class="container" width="100%">
				<h2>Creators</h2>
				<div id="nicole" width="50%">
					<img alt ="Nicole" src="img/1016980_601144716575317_771225311_n.jpg">
					<p><b>Name: </b>Nicole Vieira</p>
					<p><b>Age: </b>18</p>
				</div>
				<div id="bianca" width="50%">
					<img alt="Bianca" src="img/18268371_1851114561569133_8309198664153318967_n.jpg">
					<p><b>Name: </b>Bianca Galamba</p>
					<p><b>Age: </b>18</p>
				</div>
			</div>
		</section>
			
		<section id="trailer">
			<h2>Trailer</h2>
			<div class="container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4I_htkGJAZ4" frameborder="0" allowfullscreen></iframe>
			</div>
		</section>
		
	</body>
</html>
