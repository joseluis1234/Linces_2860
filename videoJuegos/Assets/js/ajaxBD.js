function ajaxFunction() {
    var ajaxRequest;
    try{
        ajaxRequest =   new XMLHttpRequest();
    }catch (e) {
        try {
            ajaxRequest =   new ActiveXObject("Msxml2.XMLHTTP");
        }catch (e) {
            try{
                ajaxRequest =   new ActiveXObject("MICROSOFT.XMLHTTP");
            }catch (e) {
                alert("Tu navegador se ha roto... :(");
                return false;
            }
        }
    }

    ajaxRequest.onreadystatechange  =   function () {
        if (ajaxRequest.readyState  ==  4){
            var ajaxDisplay =   document.getElementById('resultado');
            ajaxDisplay.innerHTML   =   ajaxRequest.responseText;
        }
    }

    var nameUser    =   document.getElementById('nameUser').value;
    var apPaterno   =   document.getElementById('paterno').value;
    var apMaterno   =   document.getElementById('materno').value;
    var queryString =   "?nameUser=" + nameUser;
        queryString +=  "&paterno =" + apPaterno +   "&materno ="+apMaterno;
    ajaxRequest.open("POST","Controllers/controllers.php" + queryString,true);
    ajaxRequest.send(null);
}