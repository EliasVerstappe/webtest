

function approveUser(id) {
    // set display none
    var doc = document.getElementById(id);

    var data = id ;
    httpPOST("../documents/responses/user-handler.php", data);
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