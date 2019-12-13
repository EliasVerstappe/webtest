<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
        exit();
    }

    function addToDatabase(){
        $conn = mysqli_connect('localhost', 'root', '', 'lab_mechatronica');
        $result = "";
        $sql = "INSERT INTO measurments (distance, date, sensor) VALUES ('100', 'current_timestamp()', 'MCUD14P40B12RO')";
        if ($conn->query($sql) === TRUE) {
            $result = "succesfull!";
        } else {
            $result = "error!";
        }
        return $result;
        $conn->close();
    }
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Lab Mechatronica</title>
			<link href="../styles/measurments.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		</head>
        <script>
            var Search;

            function MeasureFunc(){
                <?php echo addToDatabase() ?>;
            }

            function Searchfunc(SearchOn){
                Search = SearchOn;
                document.getElementById("SearchOn").innerHTML = Search;
                
                if (Search =='Number'){
                    document.getElementById("SearchInput").value = "Insert a number.";
                } else if (Search == 'Distance'){
                    document.getElementById("SearchInput").value = "Insert a Distance in mm.";
                } else if (Search == "Date"){
                    document.getElementById("SearchInput").value = "Insert a date: day/month/year.";
                } else if (Search == "Sensor") {
                    document.getElementById("SearchInput").value = "Insert sensor name.";
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
					<h1>Project :: Robot</h1>
                    <a href="homepage.php"><i class="fas fa-home"></i>Homepage</a>
					<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
					<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				</div>
            </nav> 

            <div class="content">
                <h2>Measurments Page</h2>
                <div class="measure-content">
                    <div class="measure-left">
                        <button type="button" onclick="MeasureFunc()" id="MeasureButton">Measure</button>
                    </div>
                    <div class="measure-right">
                        <p>Press the "Measure" button to measure the current distance.</p>
                    </div>
                </div>
                <div class="search-content">
                    <div class="dropdown">
                    <button class="dropbtn" id="SearchOn">Search on</button>
                        <div class="dropdown-content">
                            <a href="#" onclick="Searchfunc('Number')">Number</a>
                            <a href="#" onclick="Searchfunc('Distance')">Distance</a>
                            <a href="#" onclick="Searchfunc('Date')">Date</a>
                            <a href="#" onclick="Searchfunc('Sensor')">Sensor</a>
                        </div>
                    </div>
                    <input type="text" id="SearchInput" value="Select Search criteria">
                    <button onclick="requestfunc()" type="button" id="SearchButton">Search</button>
                </div>
                <div class="result-content" id="resulttable">
                    <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'lab_mechatronica');
                            $sql = "SELECT number, distance, date, sensor from measurments order by number desc";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                echo "<table id=\"resulttable\"><tr><th>Numbers</th><th>Distance</th><th>Date</th><th>Sensor</th></tr>";
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["number"] . "</td><td>" . $row["distance"] .  "</td><td>" . $row["date"] . "</td><td>" . $row["sensor"] . "</td></tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
                            $conn->close();   
                    ?>
                </div>
            </div>
		</body>
	</html>