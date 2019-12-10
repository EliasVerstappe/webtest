//TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/
// var button_0 = document.getElementById("button_0");
// var button_1 = document.getElementById("button_1");
// var button_2 = document.getElementById("button_2");
// var button_3 = document.getElementById("button_3");
// var button_4 = document.getElementById("button_4");
// var button_5 = document.getElementById("button_5");
// var button_6 = document.getElementById("button_6");
// var button_7 = document.getElementById("button_7");

//Create an array for easy access later
// var Buttons = [ button_0, button_1, button_2, button_3, button_4, button_5, button_6, button_7];

//This function is asking for gpio.php, receiving datas and updating the index.php windtures
function change_pin ( wind ) {
var data = 0;
//send the wind number to gpio.php for changes
//this is the http request
	var request = new XMLHttpRequest();
	request.open( "GET" , "gpio.php?wind=" + wind, true);
	request.send(null);
	//receiving informations
	request.onreadystatechange = function () {
		if (request.readyState == 4 && request.status == 200) {
			data = request.responseText;
			if ( !(data.localeCompare("fail"))) {
				alert ("Something went wrong! error fail" );
				return ("fail");			
			}
			else {
				alert ("Something went wrong! error kweet nie" );
				return ("fail"); 
			}
		}
		//test if fail
		else if (request.readyState == 4 && request.status == 500) {
			alert ("server error");
			return ("fail");
		}
		//else 
		else if (request.readyState == 4 && request.status != 200 && request.status != 500 ) { 
			alert ("Something went wrong! error 4 en 200 en 500");
			return ("fail"); }
	}	
	
return 0;
}