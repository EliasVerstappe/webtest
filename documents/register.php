<?php
    $msg = "";
    
    if (isset($_POST['submit'])) {
        $dbc = mysqli_connect('localhost', 'root', '', 'lab_mechatronica');
        if ( mysqli_connect_errno() ) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());
        }


        if(!isset($_POST['name']) or !isset($_POST['email']) or !isset($_POST['password']) or !isset($_POST['cpassword']) ) {
            $msg = "Fill in all the fields";
        } else {
            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $password = ($_POST['password']);
            $cpassword = ($_POST['cpassword']);
            
            if ($password != $cpassword) {
                $msg = "Passwords don't match!";
            } else {
                $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
                $dbc->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_pwd')");
                $msg = "You have been registered succesfully!";
                header('Location: ./successful_registreatoin.php');
            }   
        }
    }
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


  <form action="register.php" method="post">

  
      <label for="username"> <i class="fas fa-user"></i> </label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>
      <label for="email"> <i class="fas fa-envelope"></i> </label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="password"> <i class="fas fa-lock"></i> </label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
      <label for="password"> <i class="fas fa-lock"></i> </label>
      <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required>
    
    <br><br>

    <div>
        <?php if($msg != "") echo $msg ;?>
    </div>
      
        <input name="submit" type="submit" value="Sign up">

  </form>
</div>

</body>
</html>


