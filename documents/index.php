<?php

session_start();

if(!empty($_GET))
{
  $_SESSION["username"] = $_GET["username"];
  $_SESSION["password"] = $_GET["password"];

  header("Location: homepage.php");
} else {
  $dbc = mysqli_connect("localhost", "root", "", "lab_mechatronica")
    or die (mysqli_connect_error($dbc));
    echo (mysqli_connect_error($dbc));
?>


  <!DOCTYPE html>
  <html>
  <head>
    <title>Lab Mechatronica</title>
  </head>
  <body>

    <h1>Login page</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
      
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit">Login</button>
      </div>
    </form>

  </body>
  </html>

<?php
}
?>

