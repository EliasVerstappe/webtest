<?php

    session_start();
    $_SESSION["logonsession"] = FALSE;

    $dbc = mysqli_connect("localhost", "root", "", "lab_mechatronica")
        or die (mysqli_connect_error($dbc));
        echo (mysqli_connect_error($dbc));

    if(empty($_SESSION["username"]) && empty($_SESSION["password"]))
    {
    echo "U bent niet ingelogd!";
    echo "Klik <a href=\"index.php\"> Meld u opnieuw aan.</a>";
    } else {
        ?>

<!DOCTYPE html>
  <html>
  <head>
    <title>Lab Mechatronica</title>
  </head>
  <body>

    <h1>Startpagina</h1>

    Welkom op de startpagina.

    <div class='navigationbar'>
        <ul>
            <li><a href="settings.php">Instellingen</a></li>
            <li><a href="tracks.php">Trajecten</a></li>
            <li><a href="libe_control.php">Live besturen</a></li>
        </ul>
    </div>




  </body>
  </html>

<?php
    }
?>