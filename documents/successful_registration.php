<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration successful</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="../styles/successful_registration.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="registered">

	<div>
		<br>
		<i class="fas fa-check"></i> You have successfully been registered!
		<br><br>
	</div>
	
	<a href="../index.php">Sign in</a>

</div>

</body>
</html>


