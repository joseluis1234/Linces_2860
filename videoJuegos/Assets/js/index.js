function consltarRegitros() {
    var numUser =   document.querySelector('#numUser').value;
    if (numUser !=  ""){

    }else {
        swal({
            text: "El número de empleado no debe estar vacio",
            icon: "warning"
        });
        return false;
    }
    return true;
}