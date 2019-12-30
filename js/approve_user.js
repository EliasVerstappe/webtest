

function approveUser(id) {
    // set display none
    var doc = document.getElementById(id);


    var data = id ;
    httpPOST("http://localhost:8080/documents/responses/test.php", data);
}

function httpPOST(url, data)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", url, true ); // false for synchronous request
    xmlHttp.setRequestHeader('Content-Type', 'application/json');
    xmlHttp.send(JSON.stringify({
        data
    }));

    return xmlHttp.responseText;
}