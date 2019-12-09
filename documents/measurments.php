<!DOCTYPE html>
	<html>
		<head>
			<title>Lab Mechatronica</title>
			<link href="../style.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		</head>
        <script>
            function MeasureFunc(){
                <?php
                    system("gpio -g mode 10 out");
                    system("gpio -g mode 9 out");
                    system("gpio -g mode 11 out");
                    system("gpio -g mode 5 out");
                    system("gpio -g mode 6 out");
                    system("gpio -g mode 13 out");
                    system("gpio -g mode 19 out");
                    system("gpio -g mode 26 out");
                ?>
            }
        </script>
		
		<body class="loggedin">
	
			<nav class="navtop">
				<div>
					<h1>SaLuJan - Robot</h1>
                    <a href="homepage.php"><i class="fas fa-home"></i>Homepage</a>
					<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
					<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				</div>
			</nav>

			<div class="content">
                <h2>Measurments Page</h2>
                <button type="button" onclick="MeasureFunc()">Measure</button>
			</div>
		</body>
	</html>