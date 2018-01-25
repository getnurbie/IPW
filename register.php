<?php
session_start();
	if (isset($_SESSION['id'])){
		echo "<script>alert('Already logged!'); window.location='index.php'</script>";
	}
	if (isset($_POST['btRegister'])){
		//registar novo utilizador
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		include_once('DataAccess.php');
		$da = new DataAccess();
		$da->inserirUtilizador($name, $email, $password);
		// Se o utilizador for registado com sucesso vamos ser automaticamente direcionados para o início
		echo "<script>alert('User created with success'); window.location='register.php'</script>";
	}
?>
<!-- Meter a página em UTF-8 para que os sinais não apareçam com caracteres esquisitos -->
<meta charset ="UTF-8">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Login/Register</title>

		<link href="css/style.css" rel="stylesheet" type="text/css">

		<script>
				// Vai verificar se o email está bem inserido
				function validarFormulario(){
				var email = document.getElementById('email');
  			    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;				
				
				if (!filter.test(email.value)) {
					alert('Wrong Email');
					email.focus();
					return false;
					}
					//alert('email ok');				
					//validar as password
					var pwd1 = document.getElementById('password');
					var pwd2 = document.getElementById('password1');
					
					if (pwd1 == pwd2 && pwd1 != ""){
						//alert('tudo ok');
						return true;						
					}else{
						alert('Wrong Password');
						pwd1.focus();
						return false;
					}						
				}					
				return false;
		</script>
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
						<li><a href="episodes.php">Episodes</a></li>
						<li><a href="games.php">Games</a></li>
						<li class="selecionado"><a href="register.php">Login/Register</a></li>
					</ul>
				</nav>
			</div>
		</header>
	<section id="loginForm">
		<div class="container" id="Login" style="width: 100%; overflow: hidden; margin-left: 2%; margin-top: 5%;">
			<div style="width: 45%; float: left;" id="Login">
				<form method='post' action='login.php'>
					<h2 align="center">Login</h2>
					<div style="width:45%; float: left;" align="center">
						<p>Email</p>
						<input class="loginInput" placeholder="Email" type="Text" name="email" required>
					</div>
					<div style="width:45%; float: right;" align="center">
						<p>Password</p>
						<input class="loginInput" placeholder="Password" type="password" name="password" required>
					</div>
					<div style="width: 100%; margin-top: 20%;" align="center">
						<input class="button" type="submit" value="Login" id="login" name="login">
					</div>
						
				</form>
			</div>
			<div style="width: 45%; float: left; margin-left: 3%;" id="Register">
				<form method='post' action='register.php'>
					<h2 align="center">Register</h2>
					<div style="width:45%; float: left;" align="center">
						<p>Name</p>
						<input class="loginInput" placeholder="Name" type="Text" name="name" id="name" required>
					</div>
					<div style="width:45%; float: right;" align="center">
						<p>Email</p>
						<input class="loginInput" placeholder="Email" type="Text" name="email" id="email" required>
					</div>
					<div style="width:45%; float: left; margin-top: 5%;" align="center">
						<p>Password</p>
						<input class="loginInput" placeholder="Password" type="password" name="password" id="password" required>
					</div>
					<div style="width:45%; float: right; margin-top: 5%;" align="center">
						<p>Repeat password</p>
						<input class="loginInput" placeholder="Repeat password" type="password" name="password1" id="password1" required>
					</div>
					<div style='width:100%; margin-top:40%;' align="center">
						 <!--Ao clicarmos no botão Registar o programa vão ver se as passwords estão coincidem e vai ver se o email está de forma correta -->
						<input class='button' type='submit' value='Registar' name='btRegister' id='btRegister' onclick='return validarFormulario()'>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>