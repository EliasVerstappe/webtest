<?php
function north () {
    system("gpio -g mode 26 out");
    system("gpio -g write 26 1");
};
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Live control</title>
        <link href="../styles/live_control.css" rel="stylesheet" type="text/css">
        <link href="../styles/beta_live_control.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


        <script>
            $(document).ready(function(){
                var request = new XMLHttpRequest();
                $("#northwest_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/northwest.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });
                $("#north_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/north.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });
                $("#northeast_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/northeast.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });
                $("#west_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/west.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });
                $("#east_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/east.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });
                $("#southwest_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/southwest.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });
                $("#south_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/south.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });
                $("#southeast_btn").mousedown(function(){
                    request.open("GET", "/documents/pincontrol/southeast.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });

                $("button").mouseup(function(){
                    request.open("GET", "/documents/pincontrol/stop.php");
                    request.onreadystatechange=function(){
                        if(request.readyState==4){
                            if(request.status==200){
                            } else alert ("HTTP error");
                        }
                    }
                    request.send();
                });

                // PROBEER DIT AF TE ZONDEREN:
                // request.onreadystatechange=function(){
                //     if(request.readyState==4){
                //         if(request.status==200){
                //         } else alert ("HTTP error");
                //     }
                // }
                // request.send();
            });
        </script>



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
                <td><button id="northwest_btn"><i class="fas fa-arrow-up" id="northwest"></i></button></td>
                <td><button id="north_btn"><i class="fas fa-arrow-up"></i></button></td>
                <td><button id="northeast_btn"><i class="fas fa-arrow-up" id="northeast"></i></button></td>
            </tr>
            <tr>
                <td><button id="west_btn"><i class="fas fa-arrow-left"></i></button></td>
                <td></td>
                <td><button id="east"><i class="fas fa-arrow-right"></i></button></td>
            </tr>
            <tr>
                <td><button id="southwest_btn"><i class="fas fa-arrow-up" id="southwest"></i></button></td>
                <td><button id="south_btn"><i class="fas fa-arrow-down"></i></button></td>
                <td><button id="southeast_btn"><i class="fas fa-arrow-up" id="southeast"></i></button></td>
            </tr>
            <tr>
                <td><button id="ccw_btn"><i class="fas fa-undo-alt"></i></button></td>
                <td></td>
                <td><button id="cw_btn"><i class="fas fa-redo-alt"></i></button></td>
            </tr>
            
            </table>

        </div>

        

    </body>

</html>