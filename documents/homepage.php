<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
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


				<?php 

				include_once ('../config/db-conn.php');

				$name = $_SESSION['name'];
				$sql = "SELECT admin FROM users WHERE username='$name' limit 1";
				$result = mysqli_query($dbc, $sql);
				$value = mysqli_fetch_object($result);				
				if($value->admin) : ?>
					<a href="approve_user.php">Pending user requests</a>
				<?php endif;				
				?>

				<div class='navigationbar'>
					<button id="link-button" onclick="window.location.href = 'settings.php'"><i class="fas fa-cogs"></i> Settings</button> 					<!-- icon:  <i class="fas fa-cogs"></i> -->
					<button id="link-button" onclick="window.location.href = 'tracks.php'"><i class="fas fa-car"></i> Trajects</button> 					<!-- icon : <i class="fas fa-car"></i> -->
					<button id="link-button" onclick="window.location.href = 'measurments.php'"><i class="fas fa-ruler"></i> Measurments</button>				<!-- icon : <i class="fas fa-ruler"></i> -->
					<button id="link-button" onclick="window.location.href = 'beta_live_control.php'"><i class="fas fa-car"></i> Live control</button>		<!-- icon : <i class="fas fa-car"></i> --> 
				</div>

				<div class='general-info'>
					<p>This is the webpage that controls the robot. This website is part of the 'Lab Mechatronica' course. 
					The project was developed by Yentel Kint, Daan Ver Eecke and Elias Verstappe. Michiel Clepkens also partly helped with this project.</p>
				</div>
			</div>
		</body>
	</html>

