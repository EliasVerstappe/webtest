//This function is asking for gpio.php, receiving datas
function change_pin ( wind ) {
var data = 0;
//send the wind string to gpio.php for changes
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
			alert ("Failed to load resource: the server responded with a status of 500");
			return ("fail");
		}
		//else 
		else if (request.readyState == 4 && request.status != 200 && request.status != 500 ) { 
			alert ("Something went wrong! error 4 en !200 en !500");
			return ("fail"); }
	}	
	
return 0;
}