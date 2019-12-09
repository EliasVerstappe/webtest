<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
        exit();
    }

    $conn = mysqli_connect('localhost', 'root', '', 'lab_mechatronica');
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Lab Mechatronica</title>
			<link href="../style.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		</head>
        <script>
            function MeasureFunc(){
                alert("button pushed!")
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

			<div class="measure-content">
                <h2>Measurments Page</h2>
                <button type="button" onclick="MeasureFunc()">Measure</button>
			</div>

            <div>
                <?php
                    $sql = "SELECT number, distance, date, sensor from measurments";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Number : " . $row["number"]. " - distance: " . $row["distance"]. " - date " . $row["date"] . " - sensor " . $row["sensor"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>                 
            </div>
		</body>
	</html>