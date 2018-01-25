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
				<!--<div>Iteration: <span id="iteration"></span></div>
					<audio controls id="myAudio">
					  <source src="audio/teste.mp3" type="audio/mpeg">
					Your browser does not support the audio element.
					</audio>
					<input type="text" name="guessWhoAnswer" id="guessWhoAnswer"><input type="button" onClick="verifyAnswer()" value="Ok">

				<div>Time left:</div>
				<div id="count"></div>-->
			
			<?php
				include_once('DataAccess.php');
				$da = new DataAccess();
				$res = $da->getGuessWho();
				$row = mysqli_fetch_object($res);
			/*$res1 = $da->getGuessWhoAnswer();
			$guessWhoAnswer = $_POST['guessWhoAnswer'];
			if (mysqli_num_rows($res1) > 0) {
			$row1 = mysqli_fetch_object($res1);
				
			}*/
			echo 
				"<audio controls id='myAudio'>
					  <source src='$res[guessWhoPath]' type='audio/mpeg'>
					</audio>";
					/*<input type='text' name='guessWhoAnswer' id='guessWhoAnswer'><input type='button' onClick='verifyAnswer()' value='Ok'>*/
			?>
			</div>
			<script>
				var score;
				function score(){
					score = 100;
				}
				function verifyAnswer(){
					var value;
					var audioAnswer = document.getElementById('guessWhoAnswer');
					alert(audioAnswer.value);
					var audio = 'beck';
					if(audioAnswer.value === ''){
						alert('You need to answer!');
					}
					else if(audioAnswer.value === audio){
						alert('Right Answer!');
						alert(score);
					}
					else{
						alert('Wrong Answer');
						value = score - 10;
						alert(value);
						
					}
				}
				var iterations = 1;

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
				
				let countdown = 15;

				document.getElementById("myAudio").play();

				let interval = setInterval(function() {
				  countdown -= 1;
				  document.getElementById("count").innerHTML = countdown;
				  if (countdown <= 0) {
					document.getElementById("myAudio").pause();
					clearInterval(interval);
				  }
				}, 1000);
				
			</script>
		</section>
		
	</body>
</html>
