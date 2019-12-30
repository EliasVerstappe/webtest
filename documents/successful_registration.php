<?php
session_start();
if (!isset($_SESSION['form_ok'])) {
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
	<div class="tick">
		<p>
			<i class="fas fa-check"></i>
		</p>
	</div>
	<div class="text">
		<p>You have successfully been registered!</p>
		<p>An administrator will process your request soon.</p>		
	</div>
	<div class="return-button">
		<a href="../index.php">Great!</a>
	</div>
</div>

</body>
</html>


