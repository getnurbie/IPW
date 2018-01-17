<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Episodes</title>

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
						<li><a href="about.php">About</a></li>
						<li><a href="characters.php">Characters</a></li>
						<li class="selecionado"><a href="episodes.php">Episodes</a></li>
						<li><a href="games.php">Games</a></li>
						<?php 
							if (!isset($_SESSION['id'])){
								echo"<li><a href='register.php'>Login/Register</a></li>";
							}
							else{
								echo"<li><a href='logout.php'>Logout</a></li>";
							}
						?>
					</ul>
				</nav>
			</div>
		</header>
		<section id="episodes">
			<div class="container" style="width: 100%; overflow: hidden; margin-top: 5%;">
			<h1><p style = "font-size:25px; margin-left: 3%;">Season 1</p></h1>
				<div style="width: 45%; float: left; margin-left: 5%">
					<h2>Episode 1: eXposed</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						A suburban family is forced to go on the run when the children are discovered to possess mutant powers.
					</p>
						<h3>Promo:</h3>
						<div id="promo" width="50%">
							<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/99FVJ3vPbn4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						</div>
				</div>
				<div style="width: 45%; float: left; margin-left: 5%">
					<h2>Episode 2: rX</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						Caitlin and Eclipse try to help Blink when her powers exceed their limits.
					</p>
					<h3>Promo:</h3>
					<div id="promo1" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/tlp3CmOUKss" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: right; margin-left: 5%; margin-top: 5%;">
					<h2>Episode 4: eXit strategy</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						The mutants devise a plan to take down Sentinel Services; Eclipse looks to an old friend to obtain information; Lauren and Andy attempt to combine their powers to help the group.
					</p>
					<h3>Promo:</h3>
					<div id="promo3" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/Wk3z4ep2JeA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left;  margin-left: 5%; margin-top: auto;">
					<h2>Episode 3: eXodus</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						In an attempt to reunite, Reed makes a deal with the Sentinel Services while Caitlin and the kids get help from someone outside the compound.
					</p>
					<h3>Promo:</h3>
					<div id="promo2" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/T7Fx-Vi3ruU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left;  margin-left: 5%;  margin-top: 5%;">
					<h2>Episode 5: boXed in</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						Jace, motivated by a tragic event from his past, throws all the power of the Sentinel Services into finding the Mutant Underground Way Station; Blink's vivid dreams lead her to confront Dreamer.
					</p>
					<h3>Promo:</h3>
					<div id="promo4" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/Dy-g2fxlebM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left;  margin-left: 5%;  margin-top: 3%;">
					<h2>Episode 6: got your siX</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						Thunderbird spears a mission to get answers about what happened to his friend; Lauren encounters a new friend with useful powers.
					</p>
					<h3>Promo:</h3>
					<div id="promo5" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/gQBIyFV_WSU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: right;  margin-left: 5%; margin-top: 7%;">
					<h2>Episode 8: threat of eXtinction</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						The group faces a threat when they discover a new refugee is a spy working for Sentinel Services; Reed visits his estranged father and learns secrets that<br>could prove useful.
					</p>
					<h3>Promo:</h3>
					<div id="promo7" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/rzRcNamJj0g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left;  margin-left: 5%; margin-top: 5%;">
					<h2>Episode 7: eXtreme measures</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						Eclipse's ex-lover returns; Reed and Sage find alarming information about Lauren's new friend; Thunderbird helps Blink open up about her past; Jace approves a special surveillance program.
					</p>
					<h3>Promo:</h3>
					<div id="promo6" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/01iOjU4xUts" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left; margin-left: 5%; margin-top: 5%;">
					<h2>Episode 9: outfoX</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						The team develops a risky plan to help mutants in Sentinel Service's custody; Reed reveals details about his family history.
					</p>
					<h3>Promo:</h3>
					<div id="promo8" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/XzPH--Ts2g8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left;  margin-left: 5%;  margin-top: 3%;">
					<h2>Episode 10: eXploited</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						Jace is forced to hand over something valuable to Dr. Campbell; the team is divided on what they should do next, so Reed and Caitlin take matters into their own hands.
					</p>
					<h3>Promo:</h3>
					<div id="promo9" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/-1uzAb9krDM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left; margin-left: 5%;  margin-top: 5%;">
					<h2>Episode 11: 3 X 1</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						Tensions heat up Mutant HQ; Reed fears for his family's safety and rethinks at the compound; Dr. Campbell proposes an improved program to Jace that could change everything.
					</p>
					<h3>Promo:</h3>
					<div id="promo10" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/mJLhqV8NeC8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left;  margin-left: 5%; margin-top: 5%;">
					<h2>Episode 12: eXtraction</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px">
						Dr Campbell attends an anti-mutant summit, attempting to take the Hound program national; some of the team members at Mutant HQ go on a dangerous mission to stop him; Polaris learns more about her past; Mutant HQ comes under attack.
					</p>
					<h3>Promo:</h3>
					<div id="promo11" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/zBUpHMzbRew" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				
				<div style="width:45%; float: left; margin-left: 5%;  margin-top: 5%;">
					<h2>Episode 13: X-roads</h2>
					<h3>- About:</h3>
					<p style = "font-size:18px"></p>
					<h3>Promo:</h3>
					<div id="promo12" width="50%">
						<iframe width="300" height="200" style="margin-left:25%;" src="https://www.youtube.com/embed/zBUpHMzbRew" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
			
	</body>
</html>