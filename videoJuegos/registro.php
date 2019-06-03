<?php
session_start();
require_once "Controllers/Controller.php";
require_once "Models/Crud.php";
$register   =   new MvcController();
$register   -> registroUserController();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuarios</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="assets/js/validarRegistro.js"></script>
    <script src="Assets/js/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="Assets/js/moment.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style_Register.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="form-check-inline" id="divLogin">
            <form name="Login" id="Login" method="POST" onsubmit="return validarRegistro()" class="form-row">

                <!--<div class="md-form ml-xl-5">
                    <label for="NoEmp" class="col-form-label-lg">Número de usuario <span></span></label>
                    <br>
                    <input type="text" name="numUser" placeholder="Número de Usuario" id="NoEmp"
                           class="form-control w3-half" for="idUser">
                </div>-->

                <div class="md-form ml-xl-5">
                    <label for="NoEmp" class="col-form-label-lg">Nombre <span></span></label>
                    <br>
                    <input type="text" name="nameUser" placeholder="Nombre" id="NoEmp"
                           class="form-control w3-half" for="idUser">
                </div>

                <div class="md-form ml-xl-5">
                    <label for="EmpPass" class="col-form-label-lg">Apellido Paterno</label>

                    <input type="text" class="form-control w3-half" name="ap_paterno"
                           placeholder="Apellido Paterno"
                           id="EmpPass" maxlength="10">
                </div>

                <div class="md-form ml-xl-5">
                    <label for="EmpPass" class="col-form-label-lg">Apellido Materno</label>

                    <input type="text" class="form-control w3-half" name="ap_materno"
                           placeholder="Apellido Materno"
                           id="EmpPass" maxlength="10">
                </div>
                <div class="md-form ml-xl-5">
                    <label for="EmpPass" class="col-form-label-lg">Fecha de Nacimiento</label>

                    <input type="date" class="form-control w3-half" name="fechaNac"
                           placeholder="Fecha de Nacimiento"
                           id="EmpPass">
                </div>
                <div class="md-form ml-xl-5">
                    <label for="EmpPass" class="col-form-label-lg">Correo</label>

                    <input type="emai" class="form-control w3-half" name="email"
                           placeholder="email"
                           id="EmpPass">
                </div>

                <div class="md-form ml-xl-5">
                    <label for="EmpPass" class="col-form-label-lg">Contraseña</label>

                    <input type="text" class="form-control w3-half" name="password"
                           placeholder="Contraseña"
                           id="EmpPass" maxlength="10">
                </div>

                <div class="md-form ml-xl-5">
                    <label for="EmpPass" class="col-form-label-lg">Nacionalidad</label>

                    <input type="text" class="form-control w3-half" name="nacionalidad"
                           placeholder="Nacionalidad"
                           id="EmpPass" maxlength="10">
                </div>


                <div class="md-form ml-xl-5">
                    <label for="EmpPass" class="col-form-label-lg">Nivel</label>

                    <input type="text" class="form-control w3-half" name="nivelUser"
                           placeholder="Ingrese su rfc"
                           id="EmpPass" maxlength="10">
                </div>

                <br><br>
                <div class="form-check-inline col-md-12">
                    <div class="col-lg-2 py-5">
                        <button type="submit" class="btn-lg btn-primary" value="Enviar" id="btnLogin">
                            Registrar
                        </button>
                    </div>


                    <div class="col-lg-6 py-5">
                        <a href="index.php" type="submit" class="btn-lg btn-danger" value="Enviar" id="btnLogin">
                            Regresar
                        </a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

