<?php 
session_start();
	// Se o utilizador estiver sessão iniciada vai acontecer o que está embaixo
if (isset($_SESSION['id'])){
	// Se o botão editar for pressionado vai acontecer o que está embaixo
	if (isset($_POST['botaoEditar'])){
		//editar o perfil
		$id = $_SESSION['id'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		include_once('DataAccess.php');
		$da = new DataAccess();
		// Aqui chamamos a função de editar o perfil de utilizador
		$da->editarPerfilUtilizador($id, $nome, $email);
		echo "<script>alert('Profile edited with success!')</script>";
	}else{
		// Se o botão editar password for pressionado vai acontecer o que está embaixo
		if (isset($_POST['botaoEditarPassword'])){
			//editar a password
			$id = $_SESSION['id'];
			$oldPass = md5($_POST['oldPass']);
			$newPass = md5($_POST['newPass']);
			include_once('DataAccess.php');
			$da = new DataAccess();
			// Aqui chamamos a função de editar a password do utilizador
			$res = $da->editarPasswordUtilizador($id, $oldPass, $newPass);
			if ($res == true){
				// Se a password antiga estiver errada vai aparecer a seguinte mensagem
				echo "<script>alert('Old passwrod is wrong!')</script>";				
			}else{
				// Se estiver tudo correto vai aparecer a seguinte mensagem
				echo "<script>alert('Password edited with success!')</script>";
			}
			
		}
	}
	// Caso não tenhamos a sessão iniciada vamos automaticamente para o inicio.php
}else{
	echo "<script>window.location='register.php'</script>";
	
}

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Profile</title>
		<script>
			// Aqui criamos uma function para validar o email
			function validarFormulario(){
				var email = document.getElementById('Email');
  			    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;				
				
				if (!filter.test(email.value)) {
					alert('Wrong email!');
					email.focus();
					return false;
				}else{
					return true;
				}
				
				return false;
			}
			// Aqui criamos uma function para validar a password
			function validarFormEditPass(){
				if (document.getElementById('newPass').value == document.getElementById('newPass2').value)
					return true;
				else{
					alert('The passwords dont match!');
					return false;				
				}
			}
		
		</script>
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
						<li><a href="episodes.php">Episodes</a></li>
						<li><a href="games.php">Games</a></li>
						<?php 
							if (!isset($_SESSION['id'])){
								echo"<li><a href='register.php'>Login/Register</a></li>";
							}
							else{
								echo"<li class='selecionado'><a href='profile.php'>Profile</a></li>";
								echo"<li><a href='logout.php'>Logout</a></li>";
							}
						?>
					</ul>
				</nav>
			</div>
		</header>
		<section id="profileForm">
			<div class="container" id="Login" style="width: 100%; overflow: hidden; margin-left: 1%; margin-top: 5%;">
				<div style="width: 45%; float: left;" id="editUser">
					<?php
					$id = $_SESSION['id'];
					include_once('DataAccess.php');
					$da = new DataAccess();
					// Aqui vamos buscar as informações do utilizador que tem a sessão iniciada
					$res = $da->getUtilizador($id);
					$row = mysqli_fetch_object($res);
					// Este form é para editar o nome e o email do utilizador
					echo "
							<form method='post' action='profile.php'>
								<h2 align='center'>Edit user profile</h2>
								<input type='hidden' name='id' value='$row->id'/>
								<div style='width:45%; float: left;' align='center'>
									<p>Name</p>
									<input class='loginInput' type='text' value='$row->nome' name='nome' id='nome' required/>
								</div>

								<div style='width:45%; float: right;' align='center'>
									<p>E-mail</p>
									<input class='loginInput' style='width:100%;' type='text' name='email' id='email' required value='$row->email'/>
								</div>

								<div style='width: 100%; margin-top: 20%;' align='center'>
									<input class='medium button' type='submit' value='Editar' name='botaoEditar' onclick='return validarFormulario()' />
								</div>
							</form>";
				?>
			</div>
			<div style="width: 45%; float: left; margin-left: 5%;" id="editPassword">
						<!-- Este form é para editar a password do utilizador -->
				<form method='post' action='profile.php'>
					<h2 align='center'>Edit user password</h2>
					<div style='width:100%; float: left;' align='center'>
						<p>Old password</p>
						<input class='loginInput' type='password' name='oldPass' required/>
					</div>
					
					<div style='width:45%; float: left;' align='center'>
						<p>New password</p>
						<input class='loginInput' type='password' id='newPass' name='newPass' required/>
					</div>
					
					<div style='width:45%; float: right;' align='center'>
						<p>Repeat password</p>
						<input class='loginInput' type='password' id='newPass2' name='newPass2' required/>
					</div>
					
					<div style='width: 100%; margin-top: 20%;' align='center'>
						<input class='medium button' type='submit' value='Editar' name='botaoEditarPassword' onclick='return validarFormEditPass()' />
					</div>
				</form>
			</div>
			</div>
		</section>
	</body>
</html>
