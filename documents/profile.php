<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'lab_mechatronica';
$dbc = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $dbc->prepare('SELECT email FROM users WHERE username = ?');
$stmt->bind_param('i', $_SESSION['name']);
if(!$stmt){
	echo "Prepare failed: (". $dbc->errno.") ".$dbc->error."<br>";
} else {
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->fetch();
}
$stmt->close();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="../style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1 onclick="window.location.href = 'homepage.php'" >Project :: Robot</h1>
				<a href="homepage.php"><i class="fas fa-home"></i>Homepage</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>

					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>

				<form action="POST">
					<tr>
						<td>Change password:</td>
						<td> <input type="password" placeholder="New password" name="new_password" id="new_password" required> </td>
					</tr>
					<tr>
						<td></td>
						<td> <input type="password" placeholder="Confirm new password" name="c_new_password" id="c_new_password" required> </td>
					</tr>
					<tr>
						<td></td>
						<td> <input type="submit" value="Submit"> </td>
					</tr>
				</form>

				</table>
			</div>
		</div>
	</body>
</html>