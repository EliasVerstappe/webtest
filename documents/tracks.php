<html>
    <head>
        <title>Lab Mechatronica</title>
        <link href="../style.css" rel="stylesheet" type="text/css">
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
            $("#track_btn_star").click(function(){
                sendRequest("/documents/pincontrol/routes/star.php");
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
        <div class="content">
            <h2>Trajecten</h2>
            <div class='pretrack'>
            <button id="track_btn_cross">   
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:lucid="lucid" width="200" height="200"><path d="M20 60h40V20h80v40h40v80h-40v40H60v-40H20z" stroke="#000" stroke-width="4" fill="#ffdba9" lucid:page-tab-id="0_0"/></svg>
            </button> 
            <button id="track_btn_hexagon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:lucid="lucid" width="200" height="200"><path d="M20 89l40-69h80l40 69-40 69H60z" stroke="#000" stroke-width="4" fill="#c7e8ac" lucid:page-tab-id="0_0"/></svg>
            </button>  
            <button id="track_btn_square">   
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:lucid="lucid" width="200" height="200"><path d="M20 20h160v160H20z" stroke="#000" stroke-width="4" fill="#d1bcd2" lucid:page-tab-id="0_0"/></svg>
            </button> 
            <button id="track_btn_star">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:lucid="lucid" width="200" height="200"><path d="M100 20L81.2 74.1 23.9 75.3l45.65 34.6-16.6 54.84L100 132l47.02 32.72-16.6-54.83 45.66-34.62-57.27-1.17z" stroke="#000" stroke-width="4" fill="#ffeca9" lucid:page-tab-id="0_0"/></svg>
            </button> 
            <button id="track_btn_triangle">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:lucid="lucid" width="200" height="200"><path d="M20 180h160L100 20z" stroke="#000" stroke-width="4" fill="#ffbbb1" lucid:page-tab-id="0_0"/></svg>
            </button> 
        </div>
        </div>
    </body>
</html>