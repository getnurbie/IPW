<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Games</title>

		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>

	<body onLoad="score()">
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
						<li><a href="episodes.php">Episodes</a></li>
						<li class="selecionado"><a href="games.php">Games</a></li>
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
		<section id="audio">
			<div class="container">
				<button id="myBtn" class="button">AudioQuiz</button>
				<div id="myModal" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
					<span class="close">&times;</span>
					<?php
						include_once('DataAccess.php');
						$da = new DataAccess();
						$res = $da->getGuessWho(rand (1, 127));
					  	$row = mysqli_fetch_object($res);
					  	$res2 = $da->getGuessWho(rand (1, 127));
					  	$row2 = mysqli_fetch_object($res2);
					  	$res3 = $da->getGuessWho(rand (1, 127));
					  	$row3 = mysqli_fetch_object($res3);
					  	$res4 = $da->getGuessWho(rand (1, 127));
					  	$row4 = mysqli_fetch_object($res4);
					  	$res5 = $da->getGuessWho(rand (1, 127));
					  	$row5 = mysqli_fetch_object($res5);
					  	$res6 = $da->getGuessWho(rand (1, 127));
					  	$row6 = mysqli_fetch_object($res6);
					  	$res7 = $da->getGuessWho(rand (1, 127));
					  	$row7 = mysqli_fetch_object($res7);
					  	$res8 = $da->getGuessWho(rand (1, 127));
					  	$row8 = mysqli_fetch_object($res8);
					  	$res9 = $da->getGuessWho(rand (1, 127));
					  	$row9 = mysqli_fetch_object($res9);
					  	$res10 = $da->getGuessWho(rand (1, 127));
					  	$row10 = mysqli_fetch_object($res10);
					?>
					  <div>Time left:</div>
						<div id='count'></div>
						<div align='center' style='margin-top:3%; margin-bottom:3%;'>Iteration: <span id='iteration'></span></div>
							<div align='center' style='margin-top:3%; margin-bottom:3%;'>
							<img src='img/thegifted.jpg' style='width:30%;'>
							</div>
							<div align='center' style='margin-top:5%; margin-bottom:3%;'>
							<audio controls id='myAudio' style="display: block;">
							  <source src='<?php echo $row->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio2' style="display: none;">
							  <source src='<?php echo $row2->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio3' style="display: none;">
							  <source src='<?php echo $row3->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio4' style="display: none;">
							  <source src='<?php echo $row4->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio5' style="display: none;">
							  <source src='<?php echo $row5->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio6' style="display: none;">
							  <source src='<?php echo $row6->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio7' style="display: none;">
							  <source src='<?php echo $row7->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio8' style="display: none;">
							  <source src='<?php echo $row8->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio9' style="display: none;">
							  <source src='<?php echo $row9->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							<audio controls id='myAudio10' style="display: none;">
							  <source src='<?php echo $row10->guessWhoPath; ?>' type='audio/mpeg'>
							</audio>
							</div>
							<div align='center' style='margin-top:3%; margin-bottom:3%; margin-left:6%;'>
							<input class='loginInput' type='text' name='guessWhoAnswer' id='guessWhoAnswer'><input class='button' type='button' onClick='verifyAnswer()' value='Ok'>
							</div>
					</div>
				  </div>

				</div>
				<script>
				// Get the modal
				var modal = document.getElementById('myModal');

				// Get the button that opens the modal
				var btn = document.getElementById("myBtn");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks the button, open the modal 
				btn.onclick = function() {
					modal.style.display = "block";
					restart();
				}

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
					modal.style.display = "none";
					window.location.reload(true); 
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
				let countdown = 15;
				var score;
				var iterations = 0;
					
				function restart(){
					document.getElementById('iteration').innerText = iterations;
				
					myAudio.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio2.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio3.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio4.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio5.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio6.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio7.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio8.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio9.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);
					myAudio10.addEventListener('ended', function () {
						setTimeout(function(){
							audio.pause();
							alert("Audio Stop Successfully");
						},
						5000);
						if (iterations < countdown) {

							this.currentTime = 0;
							iterations ++;

							document.getElementById('iteration').innerText = iterations;

						}
					}, false);


					let interval = setInterval(function() {
					  countdown -= 1;
					  document.getElementById("count").innerHTML = countdown;
					  if (countdown <= 0) {
						document.getElementById("myAudio").pause();
						//clearInterval(interval);
						  changeAudio();
					  }
					}, 1000);
				}
				
				var p = <?php echo json_encode($row->guessWhoAnswer)?>;
				function score(){
					score = 0;
				}
				function verifyAnswer(){
					var value;
					var audioAnswer = document.getElementById('guessWhoAnswer');
					alert(audioAnswer.value);
					if(audioAnswer.value === ''){
						alert('You need to answer!');
					}
					else if(audioAnswer.value === p){
						alert('Right Answer!');
						if(iterations == 1 || iterations == 0){
							score+=20;
							alert(score);
							changeAudio();
						}
						else if(iterations == 2){
							score+=15;
							alert(score);
							changeAudio();
						}
						else if(iterations == 3){
							score+=10;
							alert(score);
							changeAudio();
						}
						else{
							alert(score);
							changeAudio();
						}
					}
					else{
						alert('Wrong Answer');
						score-=10;
						alert(score);
						
					}
				}
				function changeAudio(){
					countdown = 15;
					iterations = 0;
					document.getElementById('iteration').innerText = iterations;
					
					if(document.getElementById('myAudio').style.display == "block"){
					   		p = <?php echo json_encode($row2->guessWhoAnswer)?>;
							document.getElementById('myAudio').style.display = "none";
							document.getElementById('myAudio2').style.display = "block";
					   }
					else if(document.getElementById('myAudio2').style.display == "block"){
							p = <?php echo json_encode($row3->guessWhoAnswer)?>;
							document.getElementById('myAudio2').style.display = "none";
							document.getElementById('myAudio3').style.display = "block";
					}
					else if(document.getElementById('myAudio3').style.display == "block"){
					   		p = <?php echo json_encode($row4->guessWhoAnswer)?>;
							document.getElementById('myAudio3').style.display = "none";
							document.getElementById('myAudio4').style.display = "block";
					   }
					else if(document.getElementById('myAudio4').style.display == "block"){
							p = <?php echo json_encode($row5->guessWhoAnswer)?>;
							document.getElementById('myAudio4').style.display = "none";
							document.getElementById('myAudio5').style.display = "block";
					}
					else if(document.getElementById('myAudio5').style.display == "block"){
					   		p = <?php echo json_encode($row6->guessWhoAnswer)?>;
							document.getElementById('myAudio5').style.display = "none";
							document.getElementById('myAudio6').style.display = "block";
					   }
					else if(document.getElementById('myAudio6').style.display == "block"){
							p = <?php echo json_encode($row7->guessWhoAnswer)?>;
							document.getElementById('myAudio6').style.display = "none";
							document.getElementById('myAudio7').style.display = "block";
					}
					else if(document.getElementById('myAudio7').style.display == "block"){
					   		p = <?php echo json_encode($row8->guessWhoAnswer)?>;
							document.getElementById('myAudio7').style.display = "none";
							document.getElementById('myAudio8').style.display = "block";
					   }
					else if(document.getElementById('myAudio8').style.display == "block"){
						p = <?php echo json_encode($row9->guessWhoAnswer)?>;
							document.getElementById('myAudio8').style.display = "none";
							document.getElementById('myAudio9').style.display = "block";
					}
					else if(document.getElementById('myAudio9').style.display == "block"){
					   		p = <?php echo json_encode($row10->guessWhoAnswer)?>;
							document.getElementById('myAudio9').style.display = "none";
							document.getElementById('myAudio10').style.display = "block";
					   }
					else if(document.getElementById('myAudio10').style.display == "block"){
						window.location.reload(true);
					}
				}
			</script>
		</section>
		
	</body>
</html>