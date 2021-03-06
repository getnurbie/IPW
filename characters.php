<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Characters</title>

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
						<li class="selecionado"><a href="characters.php">Characters</a></li>
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
		<section id="characters">
			<div class="container" style="width: 100%; overflow: hidden; margin-left: 13%; margin-top: 5%;">
				<!-- Lauren -->
				<div style="width: 45%; float: left;">
					<div style="width:25%; float: left;">
						<img alt="Lauren" src="images/lauren.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Lauren Strucker</p>
						<p><b>Age: </b>17</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="laurenBtn">More</button></p>
						<div id="laurenModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
							<div>
								 <p><img alt="Lauren" src="images/lauren.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Natalie Alyn Lind</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Lauren Strucker is a main character on The Gifted. She is the mutant daughter of Caitlin and Reed Strucker. She has inherited the same ability to manipulate matter at a molecular level, which manifests as barriers of compressed air (otherwise known as shields) as her great-great aunt Andrea Von Strucker.
								</p>
								<p>
									She had known for years that she was a mutant. However, she kept this secret from everyone, including her family, in fear that her father would send her away to a detention center for mutants. It was only when her brother Andy had lashed out with his powers and showed that he was a mutant that she finally revealed that she was a mutant herself.
								</p>
							</div>
						  </div>
						</div>
					</div>
				</div>
				<!-- Andy -->
				<div style="width: 45%; float: left;">
					<div style="width:25%; float: left;">
						<img alt="Andy" src="images/andy.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Andy Strucker</p>
						<p><b>Age: </b>15</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="andyBtn">More</button></p>
						<div id="andyModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Andy" src="images/andy.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Percy Hynes White</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Andrew "Andy" Strucker is a main character on The Gifted. He is the mutant son of Caitlin and Reed Strucker. He has inherited the same unspecified, yet destructive abilities as his great grandfather Andreas Von Strucker. The day he first discovered his powers changed not just his life, but the lives of his whole family as well.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Caitlin -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Caitlin" src="images/caitlin.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Caitlin Strucker</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Human</p>
						<p><button id="caitlinBtn">More</button></p>
						<div id="caitlinModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Caitlin" src="images/caitlin.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Amy Acker</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Caitlin Strucker (née Reynolds) is a main character on The Gifted. She is a human nurse skilled in mutant medicine.
							  	</p>
								<p>
									She is the wife of Reed Strucker, and mother of Lauren and Andy Strucker, two mutant teens. Her world is shaken to its core following the discovery of her children's abilities, forcing her family on the run from Sentinel Services.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Reed -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Reed" src="images/reed.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Reed Strucker</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Human</p>
						<p><button id="reedBtn">More</button></p>
						<div id="reedModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Reed" src="images/reed.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Stephen Moyer</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Reed Strucker is a main character on The Gifted. He is an Attorney for the mutant task force, employed with the goal of prosecuting and imprisoning mutants that threaten the community.
							  	</p>
								<p>
									He is the husband of Caitlin Strucker, and the father of two mutant teens, Lauren and Andy Strucker. Reed is forced to go on the run with his family upon finding out that his children are mutants, and that Sentinel Services seek to take them into custody.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Lorna/Polaris -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Lorna" src="images/lorna.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Lorna Dane/Polaris</p>
						<p><b>Age: </b>28</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="lornaBtn">More</button></p>
						<div id="lornaModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Lorna" src="images/lorna.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Emma Dumont</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Polaris (birth name Lorna Dane) is a main character on The Gifted. She is a mutant with the ability to manipulate magnetism. She is also the daughter of Magneto.
							  	</p>
								<p>
									Her biggest heartbreak is not knowing who her real father is. As many mutants do, she discovered her abilities at a young age, but instead of shying away from them as most would, she embraced her powers.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Marcos/Eclipse -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Marcos" src="images/marcos.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Marcos Diaz/Eclipse</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="marcosBtn">More</button></p>
						<div id="marcosModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Marcos" src="images/marcos.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Sean Teale</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Eclipse (birth name Marcos Diaz) is a main character on The Gifted. He is a Mutant with the ability to absorb and manipulate photons.
							  	</p>
								<p>
									He comes from a poor family that exiled him from his home after he used his powers for the very first time. In search of many things, such as family and unity, Eclipse headed to the United States, where he eventually got involved with an Underground Network of mutants, including his closest friend, Thunderbird, and his girlfriend, Polaris.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Sonya/Dreamer -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Dreamer" src="images/dreamer.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Sonya Simonson/Dreamer</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Deceased</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="sonyaBtn">More</button></p>
						<div id="sonyaModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Dreamer" src="images/dreamer.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Elena Satine</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>rX</td>
										</tr>
										<tr>
											<th>Last Appearance</th>
											<td>eXploited</td>
										</tr>
									</table>
									<h3>History</h3>
									Dreamer (birth name Sonya Simonson) was a recurring character on The Gifted. She was a mutant with the ability to implant, remove and view memories.
							  	</p>
								<p>
									She was also a member of the Mutant Underground, as well as the best friend of Polaris and the girlfriend of Thunderbird.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- John/Thunderbird -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="John" src="images/john.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>John Proudstar/Thunderbird</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="johnBtn">More</button></p>
						<div id="johnModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="John" src="images/john.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Blair Redford</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Thunderbird (birth name John Proudstar) is a main character on The Gifted. He is a Mutant with super strength, invulnerability, foresight, and heightened senses.
							  	</p>
								<p>
									He comes from an Apache and military background. He is also the leader of the underground network. Thunderbird is often seeking out mutants who are on the run from the Sentinel Services, in search of refuge.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Clarice/Blink -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Blink" src="images/blink.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Clarice Fong/Blink</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="clariceBtn">More</button></p>
						<div id="clariceModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Blink" src="images/blink.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Jamie Chung</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Blink (birth name Clarice Fong) is a main character on The Gifted. She is a mutant with the ability to teleport via portals.
							  	</p>
								<p>
									She has spent a vast majority of her life on the run or in detention centers, simply for being born different. Unlike a majority of mutants whose abilities can be kept hidden, Clarice has facial markings that are fairly visible and make her mutant status clearly known, which led to constant persecution.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Jace -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Jace" src="images/jace.png" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Jace Turner</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Human</p>
						<p><button id="jaceBtn">More</button></p>
						<div id="jaceModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Jace" src="images/jace.png" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Coby Bell</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Agent Jace Turner is a main character and primary antagonist on The Gifted. He is a man that often questions his line of work as he is an agent for the Sentinel Services.
							  	</p>
								<p>
									Before joining this government agency, Jace was a police officer, who lost his daughter to a mutant related incident. He takes no pleasure from separating Mutants from their families, however, he feels it's something that must be done for public safety. Agent Turner started an illegal, non government sanctioned extermination/incarceration attempt of mutants after Dreamer, in an attempt to gain information on an illegal secret program, manipulated his memories, and unintentionally caused him to forget the death of his daughter.
								</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Carmen -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Carmen" src="images/carmen.png" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Carmen Guerra</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Human</p>
						<p><button id="carmenBtn">More</button></p>
						<div id="carmenModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Carmen" src="images/carmen.png" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Michelle Veintimilla</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXit strategy</td>
										</tr>
									</table>
									<h3>History</h3>
									Carmen Guerra is a recurring character in The Gifted. She is the current leader of the Cartel. She was romantically tied with Marcos Diaz.
							  	</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Pulse -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Pulse" src="images/pulse.png" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Augustus/Pulse</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Deceased</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="pulseBtn">More</button></p>
						<div id="pulseModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Pulse" src="images/pulse.png" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Zach Roerig</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXit strategy</td>
										</tr>
										<tr>
											<th>Last Appearance</th>
											<td>threat of eXtinction</td>
										</tr>
									</table>
									<h3>History</h3>
									Pulse (birth name Augustus) was a mutant with the ability to disable mutant and non-mutant abilities, as well as electronic systems. He used to be a member of the Mutant Underground, until he was captured by Sentinel Services and transformed into a Hound by Trask Industries.
							  	</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Esme -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Esme" src="images/esme.png" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Esme Frost</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="esmeBtn">More</button></p>
						<div id="esmeModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Esme" src="images/esme.png" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Skyler Samuels</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>threat of eXtinction</td>
										</tr>
									</table>
									<h3>History</h3>
									Esme Frost is a recurring character on The Gifted. She, along with her identical sisters Sophie and Phoebe, are telepathic mutants who share a hive mind-like connection.
							 	 </p>
								<p>
									She joined the Mutant Underground as a refugee, and secretly manipulated it into helping her free her sisters, Sophie and Phoebe from the custody of Sentinel Services.
							  	</p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Wes -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Wes" src="images/wes.png" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Wes</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="wesBtn">More</button></p>
						<div id="wesModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Wes" src="images/wes.png" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Danny Ramirez</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>got your siX</td>
										</tr>
									</table>
									<h3>History</h3>
									Wes is a character on The Gifted. He is a mutant refugee in the Mutant Underground and has formed a bond with Lauren Strucker. He has gone on to become part of the Underground's security by using his illusions to hide the mutants from prying eyes.
							 	 </p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Sage -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Sage" src="images/sage.png" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Sage</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Female</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="sageBtn">More</button></p>
						<div id="sageModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Sage" src="images/sage.png" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Hayley Lovitt</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
									</table>
									<h3>History</h3>
									Sage is a recurring character on The Gifted. She is a mutant with superhuman intelligence.
							 	 </p>
								 <p>
									 She is also a member of the Mutant Underground.
							 	 </p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Shatter -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Shatter" src="images/shatter.png" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Shatter</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Mutant</p>
						<p><button id="shatterBtn">More</button></p>
						<div id="shatterModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Shatter" src="images/shatter.png" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Jermaine Rivers</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>eXposed</td>
										</tr>
										<tr>
											<th>Last Appearance</th>
											<td>threat of eXtinction</td>
										</tr>
									</table>
									<h3>History</h3>
									Shatter is a recurring character on The Gifted. He is a Mutant with crystallized skin.
							 	 </p>
						  </div>
						</div>
					</div>
				</div>
				<!-- Campbell -->
				<div style="width: 45%; float: left; margin-top: 5%;">
					<div style="width:25%; float: left;">
						<img alt="Dr.Campbell" src="images/campbell.jpg" width="100%" height="35%">
					</div>
					<div style="width:73%; float: right;">
						<p><b>Name: </b>Roderick Campbell</p>
						<p><b>Age: </b>Unknown</p>
						<p><b>Gender: </b>Male</p>
						<p><b>Status: </b>Alive</p>
						<p><b>Species: </b>Human</p>
						<p><button id="campbellBtn">More</button></p>
						<div id="campbellModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="width: 50%;">
							<span class="close">&times;</span>
								<p><img alt="Dr.Campbell" src="images/campbell.jpg" height="30%" style="float: left; margin-right: 5%; width:20%;">
									<h3>Series Information</h3>
									<table>
										 <tr>
											<th>Portrayed By</th>
											<td>Garret Dillahunt</td>
										</tr>
										<tr>
											<th>First Appearance</th>
											<td>rX</td>
										</tr>
									</table>
									<h3>History</h3>
									Roderick Campbell is a recurring character on The Gifted. He is the head scientist and researcher for Trask Industries, a private contractor of Sentinel Services. He is working on mutant research in taking mutants and enhancing their abilities in order to control and weaponize them. His top priority is to acquire the two Strucker children in order to weaponize their joint power for his own ends.
							 	 </p>
						  </div>
						</div>
					</div>
				</div>
			</div>
			<script>
				// Get the modal
				var modal = document.getElementById('laurenModal');
				var modal1 = document.getElementById('andyModal');
				var modal2 = document.getElementById('caitlinModal');
				var modal3 = document.getElementById('reedModal');
				var modal4 = document.getElementById('lornaModal');
				var modal5 = document.getElementById('marcosModal');
				var modal6 = document.getElementById('sonyaModal');
				var modal7 = document.getElementById('johnModal');
				var modal8 = document.getElementById('clariceModal');
				var modal9 = document.getElementById('jaceModal');
				var modal10 = document.getElementById('carmenModal');
				var modal11 = document.getElementById('pulseModal');
				var modal12 = document.getElementById('esmeModal');
				var modal13 = document.getElementById('wesModal');
				var modal14 = document.getElementById('sageModal');
				var modal15 = document.getElementById('shatterModal');
				var modal16 = document.getElementById('campbellModal');
				

				// Get the button that opens the modal
				var btn = document.getElementById("laurenBtn");
				var btn1 = document.getElementById("andyBtn");
				var btn2 = document.getElementById("caitlinBtn");
				var btn3 = document.getElementById("reedBtn");
				var btn4 = document.getElementById("lornaBtn");
				var btn5 = document.getElementById("marcosBtn");
				var btn6 = document.getElementById("sonyaBtn");
				var btn7 = document.getElementById("johnBtn");
				var btn8 = document.getElementById("clariceBtn");
				var btn9 = document.getElementById("jaceBtn");
				var btn10 = document.getElementById("carmenBtn");
				var btn11 = document.getElementById("pulseBtn");
				var btn12 = document.getElementById("esmeBtn");
				var btn13 = document.getElementById("wesBtn");
				var btn14 = document.getElementById("sageBtn");
				var btn15 = document.getElementById("shatterBtn");
				var btn16 = document.getElementById("campbellBtn");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];
				var span1 = document.getElementsByClassName("close")[1];
				var span2 = document.getElementsByClassName("close")[2];
				var span3 = document.getElementsByClassName("close")[3];
				var span4 = document.getElementsByClassName("close")[4];
				var span5 = document.getElementsByClassName("close")[5];
				var span6 = document.getElementsByClassName("close")[6];
				var span7 = document.getElementsByClassName("close")[7];
				var span8 = document.getElementsByClassName("close")[8];
				var span9 = document.getElementsByClassName("close")[9];
				var span10 = document.getElementsByClassName("close")[10];
				var span11 = document.getElementsByClassName("close")[11];
				var span12 = document.getElementsByClassName("close")[12];
				var span13 = document.getElementsByClassName("close")[13];
				var span14 = document.getElementsByClassName("close")[14];
				var span15 = document.getElementsByClassName("close")[15];
				var span16 = document.getElementsByClassName("close")[16];

				// When the user clicks the button, open the modal 
				btn.onclick = function() {modal.style.display = "block";}
				btn1.onclick = function() {modal1.style.display = "block";}
				btn2.onclick = function() {modal2.style.display = "block";}
				btn3.onclick = function() {modal3.style.display = "block";}
				btn4.onclick = function() {modal4.style.display = "block";}
				btn5.onclick = function() {modal5.style.display = "block";}
				btn6.onclick = function() {modal6.style.display = "block";}
				btn7.onclick = function() {modal7.style.display = "block";}
				btn8.onclick = function() {modal8.style.display = "block";}
				btn9.onclick = function() {modal9.style.display = "block";}
				btn10.onclick = function() {modal10.style.display = "block";}
				btn11.onclick = function() {modal11.style.display = "block";}
				btn12.onclick = function() {modal12.style.display = "block";}
				btn13.onclick = function() {modal13.style.display = "block";}
				btn14.onclick = function() {modal14.style.display = "block";}
				btn15.onclick = function() {modal15.style.display = "block";}
				btn16.onclick = function() {modal16.style.display = "block";}

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {modal.style.display = "none";}
				span1.onclick = function() {modal1.style.display = "none";}
				span2.onclick = function() {modal2.style.display = "none";}
				span3.onclick = function() {modal3.style.display = "none";}
				span4.onclick = function() {modal4.style.display = "none";}
				span5.onclick = function() {modal5.style.display = "none";}
				span6.onclick = function() {modal6.style.display = "none";}
				span7.onclick = function() {modal7.style.display = "none";}
				span8.onclick = function() {modal8.style.display = "none";}
				span9.onclick = function() {modal9.style.display = "none";}
				span10.onclick = function() {modal10.style.display = "none";}
				span11.onclick = function() {modal11.style.display = "none";}
				span12.onclick = function() {modal12.style.display = "none";}
				span13.onclick = function() {modal13.style.display = "none";}
				span14.onclick = function() {modal14.style.display = "none";}
				span15.onclick = function() {modal15.style.display = "none";}
				span16.onclick = function() {modal16.style.display = "none";}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {modal.style.display = "none";}
					if (event.target == modal) {modal1.style.display = "none";}
					if (event.target == modal) {modal2.style.display = "none";}
					if (event.target == modal) {modal3.style.display = "none";}
					if (event.target == modal) {modal4.style.display = "none";}
					if (event.target == modal) {modal5.style.display = "none";}
					if (event.target == modal) {modal6.style.display = "none";}
					if (event.target == modal) {modal7.style.display = "none";}
					if (event.target == modal) {modal8.style.display = "none";}
					if (event.target == modal) {modal9.style.display = "none";}
					if (event.target == modal) {modal10.style.display = "none";}
					if (event.target == modal) {modal11.style.display = "none";}
					if (event.target == modal) {modal12.style.display = "none";}
					if (event.target == modal) {modal13.style.display = "none";}
					if (event.target == modal) {modal14.style.display = "none";}
					if (event.target == modal) {modal15.style.display = "none";}
					if (event.target == modal) {modal16.style.display = "none";}
				}
				</script>
		</section>
	</body>
</html>
