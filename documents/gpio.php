<?php
//TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/
//This page is requested by the JavaScript, it updates the pin's status
//Getting and using values

// system("gpio -g mode 26 out");
// system("gpio -g write 26 1"); 
// sleep(2);
// system("gpio -g write 26 0"); 


// if (isset ( $_GET["wind"] )) {
    $wind = $_GET["wind"];
    echo $wind;
    // echo "<script language='text/javascript'>function sayHiFromPHP() { alert('Just wanted to say $wind!'); }</script>";
// } else {
    // echo "Variable not set";
// }

    



if (isset ( $_GET["wind"] )) {

    echo "<script language='text/javascript'> alert('Just wanted to say $wind!'); </script>";


    // $wind = strip_tags ($_GET["wind"]);
    
    // $wind = 'north';
	
	// //test if value is a string
	// if ( is_string($wind) ) {
        
    //     system("gpio -g mode 10 out");
    //     system("gpio -g mode 9 out");
    //     system("gpio -g mode 11 out");
    //     system("gpio -g mode 5 out");
    //     system("gpio -g mode 6 out");
    //     system("gpio -g mode 13 out");
    //     system("gpio -g mode 19 out");
    //     system("gpio -g mode 26 out");
    //     system("gpio -g write 10 0");
    //     system("gpio -g write 9 0");
    //     system("gpio -g write 11 0");
    //     system("gpio -g write 5 0");
    //     system("gpio -g write 6 0");
    //     system("gpio -g write 13 0");
    //     system("gpio -g write 19 0");
    //     system("gpio -g write 26 0");
    
    //     switch($wind) {
    //         case 'northwest':
    //             system("gpio -g write 6 1");
    //             break;
            
    //         case 'north':
    //             system("gpio -g write 26 1");    
    //             break;
            
    //         case 'northeast':
    //             system("gpio -g write 19 1");
    //             system("gpio -g write 26 1");
    //             break;
            
    //         case 'west':
    //             system("gpio -g write 13 1");
    //             system("gpio -g write 19 1");
    //             system("gpio -g write 26 1");
    //             break;
            
    //         case 'east':
    //             system("gpio -g write 19 1");
    //             system("gpio -g write 26 1");
    //             break;

    //         case 'southwest':
    //             system("gpio -g write 13 1");
    //             system("gpio -g write 19 1");
    //             break;

    //         case 'south':
    //             system("gpio -g write 13 1");
    //             system("gpio -g write 26 1");
    //             break;

    //         case 'southeast':
    //             system("gpio -g write 13 1");
    //             break;

    //         case 'ccw':
    //             system("gpio -g write 6 1");
    //             system("gpio -g write 19 1");
    //             break;

    //         case 'cw':
    //             system("gpio -g write 6 1");
    //             system("gpio -g write 26 1");
    //             break;

    //         case 'stop':
    //             system("gpio -g write 10 0");
    //             system("gpio -g write 9 0");
    //             system("gpio -g write 11 0");
    //             system("gpio -g write 5 0");
    //             system("gpio -g write 6 0");
    //             system("gpio -g write 13 0");
    //             system("gpio -g write 19 0");
    //             system("gpio -g write 26 0");
    //             break;

    //         default:
    //             system("gpio -g write 10 0");
    //             system("gpio -g write 9 0");
    //             system("gpio -g write 11 0");
    //             system("gpio -g write 5 0");
    //             system("gpio -g write 6 0");
    //             system("gpio -g write 13 0");
    //             system("gpio -g write 19 0");
    //             system("gpio -g write 26 0");
    //     }
    // });
		
	// }
    // else { echo ("fail"); }
    
    // header("Location: /documents/beta_live_control.php");

} //print fail if cannot use values
else { echo ("fail"); }
?>