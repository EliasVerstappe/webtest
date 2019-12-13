<!DOCTYPE html>
<html>
<head>
  <title>Lab Mechatronica</title>
  <!-- voor icoontjes op login scherm tag#0001 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link href="./style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login">
  <h1>Login page</h1>

  <form action="./config/authenticate.php" method="post">

      <label for="username">
        <!-- tag#0001 -->
        <i class="fas fa-user"></i>
      </label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>
      
      <label for="password">
        <!-- tag#0001 -->
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
	  
	  <div id="register"> <a href="./documents/register.php">Make a new account here</a> </div>

      <input type="submit" value="Login">

  </form>


  
</div>

</body>
</html>


