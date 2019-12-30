<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit();
}
?>

<html>
    <head>
        <title>Lab Mechatronica</title>
        <link href="../style.css" rel="stylesheet" type="text/css">
        <link href="../styles/approve_user.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <nav class="navtop">
            <div>
                <h1 onclick="window.location.href = 'homepage.php'" >Project :: Robot</h1>
                <a href="homepage.php"><i class="fas fa-home"></i>Homepage</a>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
        <div class="content">
            <h2>Pending account requests</h2>

            <table>
                <tr class="table-head-row">
                    <th class="table-head-name">Name</th>
                    <th class="table-head-email">email</th>
                    <th colspan="2" class="table-head-approve">Approve?</th>
                </tr>

                <?php
                include_once ('../config/db-conn.php');
                $sql = "SELECT username, email, id FROM pending_users";
                $result = $dbc->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "<tr id=\"user_row_" . $row['id'] ."\"><td>" . $row["username"]. "</td><td>" . $row["email"] .
                    "</td>" . 
                        "<td><button onclick=\"approveUser(" . $row['id'] .", 'approve' )\" id=" . $row['id'] ." class=\"approve-button\"><i class=\"fas fa-user-check\"></i></button></td>" .
                        "<td><button onclick=\"approveUser(" . $row['id'] .", 'decline' )\" id=" . $row['id'] ." class=\"decline-button\"><i class=\"fas fa-user-times\"></i></button></td>" .
                    "</tr>";
                }
                echo "</table>";
                } else { echo "0 results"; }
                ?>
                
            </table>
        </div>
    <script src="../js/approve_user.js"></script>
    </body>
</html>