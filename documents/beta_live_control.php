<!DOCTYPE html>
<html>
    <head>
        <title>Live control</title>
        <link href="../styles/live_control.css" rel="stylesheet" type="text/css">
        <link href="../styles/beta_live_control.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


        <script>

        function sendRequest(page){
            var request = new XMLHttpRequest();
            request.open("GET", page);
            request.onreadystatechange=function(){
                if(request.readyState==4){
                    if(request.status==200){
                    } else alert ("HTTP error");
                }
            }
            request.send();
        }

        $(document).ready(function(){
            $("#northwest_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/northwest.php");
            });
            $("#north_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/north.php");
            });
            $("#northeast_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/northeast.php");
            });
            $("#west_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/west.php");
            });
            $("#east_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/east.php");
            });
            $("#southwest_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/southwest.php");
            });
            $("#south_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/south.php");
            });
            $("#southeast_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/southeast.php");
            });
            $("#ccw_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/ccw.php");
            });
            $("#cw_btn").mousedown(function(){
                sendRequest("/documents/pincontrol/cw.php");
            });

            $("button").mouseup(function(){
                sendRequest("/documents/pincontrol/stop.php");
            });

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
                <td><button id="east_btn"><i class="fas fa-arrow-right"></i></button></td>
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