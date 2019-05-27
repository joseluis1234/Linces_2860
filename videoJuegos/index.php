<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compara-Games</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/validarRegistro.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/indexStyle.css">
</head>
<body>
<br>
<div class="col-lg-2 float-lg-right">
    <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Inicio
        de
        Sesión</a>
</div>
<div class="col-lg-1 float-lg-right">
    <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal"
       data-target="#registerModal">Registro</a>
</div>

<div class="modal fade modal-open" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">l

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w- font-weight-bold">Registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body mx-sm-5" id="divLogin">
                <form name="Login" id="Login" method="POST" onsubmit="return validarRegistro()" class="form-row">
                    <div class="md-form ml-xl-5">
                        <label for="NoEmp" class="col-form-label-lg">Correo <span></span></label>
                        <br>
                        <input type="text" name="numUser" placeholder="Ingrese su número de empleado" id="NoEmp"
                               class="form-control w3-half" maxlength="6" for="idUser">
                    </div>

                    <div class="md-form ml-xl-5">
                        <label for="EmpPass" class="col-form-label-lg">Contraseña</label>

                        <input type="text" class="form-control w3-half" name="passwordAccess"
                               placeholder="Ingrese su rfc"
                               id="EmpPass" maxlength="10">
                    </div>

                    <br>
                    <div class="mxl-form col-md-12">
                        <button type="submit" class="btn-lg btn-primary" value="Enviar" id="btnLogin">
                            Iniciar
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade modal-open" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Inicio de Sesión</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body mx-sm-5" id="divLogin">
                <form name="Login" id="Login" method="POST" onsubmit="return validarRegistro()" class="form-row">
                    <div class="md-form ml-xl-5">
                        <label for="NoEmp" class="col-form-label-lg">Correo <span></span></label>
                        <br>
                        <input type="text" name="numUser" placeholder="Ingrese su número de empleado" id="NoEmp"
                               class="form-control w3-half" maxlength="6" for="idUser">
                    </div>

                    <div class="md-form ml-xl-5">
                        <label for="EmpPass" class="col-form-label-lg">Contraseña</label>

                        <input type="text" class="form-control w3-half" name="passwordAccess"
                               placeholder="Ingrese su rfc"
                               id="EmpPass" maxlength="10">
                    </div>

                    <br>
                    <div class="mxl-form col-md-12">
                        <button type="submit" class="btn-lg btn-primary" value="Enviar" id="btnLogin">
                            Iniciar
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<label for="NoEmp" class="col-form-label-lg"> <span></span></label>

</body>
</html>
