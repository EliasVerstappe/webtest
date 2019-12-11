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
            var Search;

            function MeasureFunc(){
                alert("button pushed!")
            }

            function Searchfunc(SearchOn){
                Search = SearchOn;
                document.getElementById("SelectSearch").innerHTML = Search;
                
                if (Search =='Number'){
                    document.getElementById("SearchInput").value = "Insert a number.";
                } else if (Search == 'Distance'){
                    document.getElementById("SearchInput").value = "Insert a Distance in mm.";
                } else if (Search == "Date"){
                    document.getElementById("SearchInput").value = "insert a date: day/month/year.";
                } else if (Search == "Sensor") {
                    document.getElementById("SearchInput").value = "insert sensorname";
                }
            };

            function requestfunc(){
                if (Search =='Number'){
                    alert(Search);
                } else if (Search == 'Distance'){
                    alert(Search);
                } else if (Search == "Date"){
                    alert(Search);
                } else if (Search == "Sensor") {
                    alert(Search);
                }else{
                    alert("nothing selected.");
                }
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
                <div class="dropdown">
                <button class="dropbtn" id="SelectSearch">Search on</button>
                    <div class="dropdown-content">
                        <a href="#" onclick="Searchfunc('Number')">Number</a>
                        <a href="#" onclick="Searchfunc('Distance')">Distance</a>
                        <a href="#" onclick="Searchfunc('Date')">Date</a>
                        <a href="#" onclick="Searchfunc('Number')">Sensor</a>
                    </div>
                </div>
                <input type="text" id="SearchInput" value="Select Search criteria">
                <button onclick="requestfunc()" type="button" >Search</button>
            </div>
            <div>
            <?php
                    $sql = "SELECT number, distance, date, sensor from measurments";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table id=\"resulttable\">";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["number"] . "</td><td>" . $row["distance"] .  "</td><td>" . $row["date"] . "</td><td>" . $row["sensor"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                ?>
            </div>
		</body>
	</html>