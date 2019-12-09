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
                <p>Press the "Measure" button!</p>
			</div>

            <div>
                <button type="button" >Search</button>
                <div class="dropdown">
                <button class="dropbtn">Search on</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>

            <div>
                <?php
                    $sql = "SELECT number, distance, date, sensor from measurments";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "Number: ". $row["number"]. " - distance: ". $row["distance"] . " - date: ". $row["date"] . " - sensor: ". $row["sensor"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>                 
            </div>
		</body>
	</html>