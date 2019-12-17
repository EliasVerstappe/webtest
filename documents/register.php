<?php
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ../index.php');
        exit();
    }
    
    session_start();


    $msg = "";
    
    if (isset($_POST['submit'])) {
        $dbc = mysqli_connect('localhost', 'root', '', 'lab_mechatronica');
        if ( mysqli_connect_errno() ) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
        
        if ($_POST['password'] != $_POST['cpassword']) {
            $msg = "Passwords don't match!";
        } else {
            $hashed_pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $name = $_POST['username'];
            $email = $_POST['email'];
            
            $sql = ("INSERT INTO users (username, email, password) VALUES ('{$name}', '{$email}', '{$hashed_pwd}')");
            $stmt = $dbc->prepare($sql);
            if(!$stmt){
               echo "Prepare failed: (". $dbc->errno.") ".$dbc->error."<br>";
            } else {
                $stmt->execute();
            }
            $stmt->close();

            header('Location: ./successful_registration.php');
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


