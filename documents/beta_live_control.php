<!DOCTYPE html>
<html>
    <head>
        <title>Live control</title>
        <link href="../styles/live_control.css" rel="stylesheet" type="text/css">
        <link href="../styles/beta_live_control.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>


    <body>
        <nav class="navtop">
            <div>
                <h1>Project :: Robot</h1>
                <a href="homepage.php"><i class="fas fa-home"></i>Homepage</a>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>

        <div class="contered-div">
        
            

            <table class="buttontable">
            <tr>
                <td><button onmousedown="change_pin('northwest');" onmouseup="change_pin('stop');"><i class="fas fa-arrow-up" id="northwest"></i></button></td>
                <td><button onmousedown="change_pin('north');" onmouseup="change_pin('stop');"><i class="fas fa-arrow-up"></i></button></td>
                <td><button onmousedown="change_pin('northeast');" onmouseup="change_pin('stop');"><i class="fas fa-arrow-up" id="northeast"></i></button></td>
            </tr>
            <tr>
                <td><button onmousedown="change_pin('west');" onmouseup="change_pin('stop');"><i class="fas fa-arrow-left"></i></button></td>
                <td></td>
                <td><button onmousedown="change_pin('east');" onmouseup="change_pin('stop');"><i class="fas fa-arrow-right"></i></button></td>
            </tr>
            <tr>
                <td><button onmousedown="change_pin('southwest');" onmouseup="change_pin('stop');"><i class="fas fa-expand-arrows-alt"></i></button></td>
                <td><button onmousedown="change_pin('south');" onmouseup="change_pin('stop');"><i class="fas fa-arrow-down"></i></button></td>
                <td><button onmousedown="change_pin('southeast');" onmouseup="change_pin('stop');"><i class="fas fa-expand-arrows-alt"></i></button></td>
            </tr>
            <tr>
                <td><button onmousedown="change_pin('ccw');" onmouseup="change_pin('stop');"><i class="fas fa-undo-alt"></i></button></td>
                <td></td>
                <td><button onmousedown="change_pin('cw');" onmouseup="change_pin('stop');"><i class="fas fa-redo-alt"></i></button></td>
            </tr>
            
            <!-- javascript -->
            <script src="script.js"></script>

            </table>

        </div>

        

    </body>

</html>