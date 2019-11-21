<!DOCTYPE html>
<html>
<head>
<title>Lab Mechatronica</title>
</head>
<body>

<h1>Login page</h1>

<form action="action_page.php" method="post">
  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>

  <div class="container">
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>

</body>
</html>