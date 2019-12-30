

function approveUser(id, action) {
    // set display none
    document.getElementById("user_row_" + id).style.display = "none";

    var data = [id, action] ;
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