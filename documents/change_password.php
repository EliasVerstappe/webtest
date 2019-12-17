<?php
session_start();
include_once ('../config/db-conn.php');


// $_SESSION['error_msg_change_pwd'] = "";




if (isset($_POST['submit'])) {
    echo ("Submit IS SET");
    if ( mysqli_connect_errno() ) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    if (!password_verify($_POST['old_password'], $password)) {
        echo ("Old password incorrect!");
        // $_SESSION['error_msg_change_pwd'] = "Old password incorrect!";
    }
    
    if ($_POST['new_password'] != $_POST['c_new_password']) {
        echo ("Passwords don't match!");
    } else {
        $hashed_pwd = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

        $stmt = $dbc->prepare("UPDATE users SET ('{$hashed_pwd}') WHERE username = ?)");
        $stmt->bind_param('i', $_SESSION['name']);
        $stmt->execute();
        $stmt->fetch();
        
        $stmt = $dbc->prepare($sql);
        if(!$stmt){
           echo "Prepare failed: (". $dbc->errno.") ".$dbc->error."<br>";
        } else {
            $stmt->execute();
        }
        $stmt->close();

        
    }   
}
echo ("Submit NOT set");
// header('Location: ./profile.php');
?>