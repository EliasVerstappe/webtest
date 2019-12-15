<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Lab Mechatronica</title>
			<link href="../styles/homepage.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		</head>
		
		<body class="loggedin">
	
			<nav class="navtop">
				<div>
					<h1>Project :: Robot</h1>
					<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
					<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				</div>
			</nav>

			<div class="content">
				<h2>Home Page</h2>

				<p>Welcome back, <?=$_SESSION['name']?>!</p>

				<div class='navigationbar'>
					<button id="link-button" onclick="window.location.href = 'settings.php'">Settings</button>
					<button id="link-button"onclick="window.location.href = 'tracks.php'">Trajects</button>
					<button id="link-button"onclick="window.location.href = 'measurments.php'">Measurments</button>
					<button id="link-button"onclick="window.location.href = 'beta_live_control.php'">Live control</button>
				</div>

				<div class='general-info'>
					<p>Info ivm de website. en wie hem gemaakt heeft.</p>
				</div>
			</div>
		</body>
	</html>

