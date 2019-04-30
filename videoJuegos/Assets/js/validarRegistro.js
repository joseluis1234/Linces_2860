//Validar registro con AJAX
//var usuarioExistente    =   false;
$("#NoEmp").change(function () {
   var usuario  =   $("#NoEmp").val();
   console.log("usuario",usuario);
   /*
   var datos    =   new FormData();
   datos.append("numUser",usuario);
   $.ajax({

       url:"Controllers/ajax.php",
       method:"POST",
       data:datos,
       cache:false,
       contentType: false,
       processData: false,
       success:function (respuesta) {
            if(respuesta    === 0){
                $("label[for='numUser'] span").html('<p>Su contraseña es incorrecta, verifique por favor</p>');
                usuarioExistente    =   true;
            }else{
                $("label[for='numUser'] span").html("");
                usuarioExistente    =   false;
            }
       }

   });
*/
});



//Validación de Login y/o  Registro con JS

function validarRegistro() {
    //var user    =   document.querySelector("#NoEmp").value;
    //var pass    =   document.querySelector("#EmpPass").value;
    var user = document.querySelector("#NoEmp").value;
    var pass = document.querySelector("#EmpPass").value;
    var terms = document.querySelector("#terminos").checked;


    if (user != "") {
        var caracters = user.length;
        //   var caracPass = pass.length;
        var exprUser = /^[0-9]*$/;
        // var exprPass =  /^[*$]*$/;
        if (caracters > 7) {
            swal({
                text: "El número de usuario no debe ser mayor de 7 caracteres",
                icon: "warning",

            });
            return false;
        }
        if (!exprUser.test(user)) {
            swal({
                text: "El número de usuario no debe contener letras o caracteres especiales",
                icon: "warning",
            });
            return false;
        }

    } else {
        swal({
            text: "El número de usuario es necesario",
            icon: "warning",
        });
        return false;
    }

    if (pass != "") {
        var caracPass = pass.length;
        var exprPass = /^[A-Z0-9]*$/;
        if (caracPass > 10) {
            swal({
                text: "La contraseña no de tener más de 10 caracteres",
            });
            return false;
        }
        if (!exprPass.test(pass)) {
            swal({
                text: "La contraseña no debe tener minúsculas y/o caracteres espaciales",
                icon: "warning",
            });
            return false;
        }

    } else {
        swal({
            text: "La contraseña es requerida",
            icon: "warning",
        });
        return false;
    }

    if (!terms) {
        document.querySelector("#NoEmp").value = user;
        document.querySelector("#EmpPass").value = pass;
        swal({
            text: "Debe aceptar los términos para seguir con el registro",
            icon: "warning",
        });
        return false;
    }
    return true;
}


//Validación de solicitud de vacaciones con JS
/*
$("#peticion").hide();
function ShowHideElement() {
    let text    =   "";
    if ($("#Enviar").text() === "Enviar"){
        $("#peticion").show();
        text    =   "Hide form";
        $("#Consultar").hide();
        return true;
    }else {
        $("#peticion").hide();
        text    =   "Enviar";
        return;
    }
}
*/

/*
$(document).ready(function () {
    $("#Enviar").click(function () {
      var numUser   =   $("#userNum").val().trim();
      var caracter  =   numUser.length;
      var exprUsr = /^[0-9]*$/;
      let  text =   "";
  if (numUser   !=  ""){
        if (caracter    >   5){
            swal({
                text: "El número de usuario no debe ser mayor de 5 caracteres",
                icon:'warning'
            });
            return false;
        }if (!exprUsr.test(numUser)){
          swal({
              text: "El número de usuario no debe contener letras o caracteres especiales",
              icon: "warning",
          });
          return false;
      }
      } else {
      swal({
          text:'El número de usuario es indispensable',
          icon:'warning'
      });
      return false;
  }

  return true;
   });

});
*/


function validacionSol() {
    var numUser = document.querySelector("#userNum").value;
    var dateIn = document.querySelector("#desde").value;
    var dateOut = document.querySelector("#hasta").value;
    var rquested = document.querySelector("#solicitados").value;
    var dayPend = document.querySelector("#diasPen").value;
    //var fomrulario  =   document.getElementById("#peticion").style.visibility  =   "hidden";
    //  var dateIng     =   document.querySelector("#fechaIngreso").value;
    //  var dateToday   =   document.querySelector("#fechaActual").value;
    // var user   =   document.forms["Login"]["numUser"].value;
    // var pass   =    document.forms["Login"]["passwordAccess"].value;


    if (numUser != "") {
        //  swal("Oops, Algo salió mal!!", "error");
        //alert("Debe ingresar su número de empleado");
        var caracter = numUser.length;
        var exprUsr = /^[0-9]*$/;
        if (caracter > 5) {
            swal({
                text: "El número de usuario no debe ser mayor de 5 caracteres",
                icon: 'warning'
            });
            return false;
        }
        if (!exprUsr.test(numUser)) {
            swal({
                text: "El número de usuario no debe contener letras o caracteres especiales",
                icon: "warning",
            });
            return false;
        }
        if (dateIn == "") {
            swal({
                text: 'La Fecha de Inicio no debe estar vacia, verifique por favor',
                icon: 'warning'
            });
            return false;
        }
    } else {
        swal({
            text: 'El número de usuario es indispensable',
            icon: 'warning'
        });
        return false;
    }


    if (!exprUsr.test(rquested)) {
        swal({
            text: 'Este campo no acepta números con decimales',
            icon: 'warning'
        });
        return false;

    } else if (rquested == "") {
        swal({
            text: 'Debe ingresar la cantidad de días por distrutar',
            icon: 'warning'
        });
        return false;
    }


    return true;
}


function validateRecoverPass() {
    var userEmail = document.querySelector("#emailRecoverUser").value;
    var numUser = document.querySelector("#numberRecoverUser").value;

    if (numUser   !=  ""){
       var caracters    =   numUser.length;
       var exprUser     =   /^[0-9]*$/;

       if (caracters > 6){
           swal({
               text: 'El número de usuario no debe ser mayor de 5 caracteres',
               icon: 'warning'
           });
           return false;
       }
       if (!exprUser.test(numUser)){
           swal({
               text: "El número de usuario no debe contener letras o caracteres especiales",
               icon: "warning",
           });
           return false;
       } else if (userEmail ==  "") {
           swal({
               text: 'El correo del usuario es requerido',
               icon: 'warning'
           });
           return false;
       }


    } else{

        swal({
            text:'El número de usuario es indispensable',
            icon:'warning'
        });
        return false;
    }

        return true;
}


/*
$(document).ready(function () {
    $(#'Enviar') .click(function () {
        if(validacionSol()){
            $.post("peticionVacaciones.php",$('#solicitud').serialize(),function (res) {
               if (res  == 1){
                   $("#exito").delay(500).fadeIn("slow");
               }  else{
                   $("#fail").delay(500).fadeIn("slow");
                }
            });
        }
    });
});
*/
/*
function noWeekeds() {
    var form    =   document.getElementById('peticion');
    var elDate  =   document.getElementById('desde');
    var sub     =   document.getElementById('Send');
    var day =   new Date(elDate.value).getUTCDay();

    elDate.setCustomValidity('');
    if (day==0){
        elDate.setCustomValidity('Domingos no disponibles');
    } else if (day==6){
        elDate.setCustomValidity('Sabados no disponibles');
    }else {
        elDate.setCustomValidity('');
    }
    //if(!form.checkValidity()) {sub.click()};
}

*/

/*
$("#desde").datepicker({
        beforeShowDay:function (date) {
            var day =   date.getDay();
            return[(day!=0 && day!=6),''];
        }
});

*/


function llenar() {
    var campos = document.getElementById('').value;
    window.location.href = 'http://localhost:81/modulos/modulo-login/misVacaciones.php?campos=' + campos;
}


function validarTerm() {
    var terms = document.querySelector("#terminos").checked;

}

function ocultarPassword() {
    $(document).ready(function () {
        $('#hiddenPass').click(function () {
            if ($('#hiddenPass').is(':checked')) {
                $('#EmpPass').attr('type', 'text');
            } else {
                $('#EmpPass').attr('type', 'password');
            }

        });
    });
}

