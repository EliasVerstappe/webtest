<!DOCTYPE html>
<html>
    <head>
        <title>Live control</title>
        <link href="../styles/live_control.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<!-- Scripts -->
    <script>
        function direction(wind){

            <?php
                system("gpio -g mode 10 out");
                system("gpio -g mode 9 out");
                system("gpio -g mode 11 out");
                system("gpio -g mode 5 out");
                system("gpio -g mode 6 out");
                system("gpio -g mode 13 out");
                system("gpio -g mode 19 out");
                system("gpio -g mode 26 out");

                system("gpio -g write 10 0");
                system("gpio -g write 9 0");
                system("gpio -g write 11 0");
                system("gpio -g write 5 0");
                system("gpio -g write 6 0");
                system("gpio -g write 13 0");
                system("gpio -g write 19 0");
                system("gpio -g write 26 0");
            ?>

            switch(wind) {
                case northwest:
                    <?php
                        system("gpio -g write 6 1");
                    ?>                   
                
                    break;
                
                case north:
                    <?php
                        system("gpio -g write 26 1");
                    ?>
                
                    break;
                
                case northeast:
                    <?php
                        system("gpio -g write 19 1");
                        system("gpio -g write 26 1");
                    ?>
                
                    break;
                
                case west:
                    <?php
                        system("gpio -g write 13 1");
                        system("gpio -g write 19 1");
                        system("gpio -g write 26 1");
                    ?>

                    break;
                
                case east:
                    <?php
                        system("gpio -g write 19 1");
                        system("gpio -g write 26 1");
                    ?>

                    break;

                case southwest:
                    <?php
                        system("gpio -g write 13 1");
                        system("gpio -g write 19 1");
                    ?>

                    break;

                case south:
                    <?php
                        system("gpio -g write 13 1");
                        system("gpio -g write 26 1");
                    ?>

                    break;

                case southeast:
                    <?php
                        system("gpio -g write 13 1");
                    ?>

                    break;

                case ccw:
                    <?php
                        system("gpio -g write 6 1");
                        system("gpio -g write 19 1");
                    ?>

                    break;

                case cw:
                    <?php
                        system("gpio -g write 6 1");
                        system("gpio -g write 26 1");
                    ?>

                    break;

                case stop:
                    <?php
                        system("gpio -g write 10 0");
                        system("gpio -g write 9 0");
                        system("gpio -g write 11 0");
                        system("gpio -g write 5 0");
                        system("gpio -g write 6 0");
                        system("gpio -g write 13 0");
                        system("gpio -g write 19 0");
                        system("gpio -g write 26 0");
                    ?>

                    break;


                default:
                    // zelfde code als STOP
            }
        }


    </script>
<!--  -->

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
                <td><button onmousedown="direction('northwest')" onmouseup="direction('stop')"><i class="fas fa-expand-arrows-alt"></i></button></td>
                <td><button onmousedown="direction('north')" onmouseup="direction('stop')"><i class="fas fa-arrow-up"></i></button></td>
                <td><button onmousedown="direction('northeast')" onmouseup="direction('stop')"><i class="fas fa-expand-arrows-alt"></i></button></td>
            </tr>
            <tr>
                <td><button onmousedown="direction('west')" onmouseup="direction('stop')"><i class="fas fa-arrow-left"></i></button></td>
                <td></td>
                <td><button onmousedown="direction('east')" onmouseup="direction('stop')"><i class="fas fa-arrow-right"></i></button></td>
            </tr>
            <tr>
                <td><button onmousedown="direction('southwest')" onmouseup="direction('stop')"><i class="fas fa-expand-arrows-alt"></i></button></td>
                <td><button onmousedown="direction('south')" onmouseup="direction('stop')"><i class="fas fa-arrow-down"></i></button></td>
                <td><button onmousedown="direction('southeast')" onmouseup="direction('stop')"><i class="fas fa-expand-arrows-alt"></i></button></td>
            </tr>
            <tr>
                <td><button onmousedown="direction('ccw')" onmouseup="direction('stop')"><i class="fas fa-undo-alt"></i></button></td>
                <td></td>
                <td><button onmousedown="direction('cw')" onmouseup="direction('stop')"><i class="fas fa-redo-alt"></i></button></td>
            </tr>
            </table>



        </div>

        

    </body>

</html>