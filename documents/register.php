<?php

?>




<!DOCTYPE html>
<html>
<head>
  <title>Lab Mechatronica</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login">
  <h1>Register</h1>

  <form action="../resister.php" method="post">

  
      <label for="username">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>
      <label for="email">
      <i class="fas fa-envelope"></i>
      </label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
      

      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required>
      
      <input type="submit" value="Sign up">

  </form>
</div>

</body>
</html>


