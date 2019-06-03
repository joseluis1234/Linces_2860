<?php


class MvcController
{

    # Este metodo registra a los usuarios
    public function registroUserController()
    {

        if (isset($_POST['nameUser'])) {
            $datos = array(
                "nameUser" => $_POST["nameUser"],
                "ap_paterno" => $_POST["ap_paterno"],
                "ap_materno" => $_POST["ap_materno"],
                "fechaNac" => $_POST["fechaNac"],
                "email" => $_POST["email"],
                "password" => $_POST["password"],
                "nacionalidad" => $_POST["nacionalidad"]);
            // var_dump($datos);
            $respuesta = Crud::registroUserModel("usuario", $datos);
            if ($respuesta === "success") {
                echo "Registro exitoso";
            } else {
                echo "Error";
            }


        }
    }

    # Este metodo permite ingresar a los usuarios previamente registrados
    public function ingresoUserController()
    {
        if (isset($_POST["emailUser"])) {
            #preg_match =   realiza una comparacion con una expresion regular
            //  if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST["emailUser"])) {
            $datosController = array("emailUser" => $_POST["emailUser"], "passwordAccess" => $_POST["passwordAccess"]);
            $respuesta = Crud::login("usuario", $datosController);
            $_SESSION['user'] = $respuesta['idUsuario'];
            $_SESSION['cred'] = $respuesta['nivel_usuario'];
            if ($datosController['emailUser'] == $respuesta['correo']) {
                if ($datosController['passwordAccess'] == $respuesta['password']) {
                    header('Location: principal.php');
                } else {
                    echo "Todo va mal";
                }
            } else {

            }
            /*
            if ($datosController["emailUser"] === $respuesta["correo"]) {
                header('Location: principal.php');
            } else {
                echo "Sus datos son incorrectos, verifique por favor";
            }
            */

            //} else {
            //}


        }


    }

    # Metodo que trae la informacion del usuario, funcional
    public function infoPerfilUser($infoUser)
    {
        $infoUserReq = Crud::infoUser("usuario", $infoUser);
        $arregloInfo = array(
            0 => $infoUserReq["idUsuario"],
            1 => $infoUserReq["nombre"],
            2 => $infoUserReq["apellido_paterno"],
            3 => $infoUserReq["apellido_materno"],
            4 => $infoUserReq["fecha_nacimiento"],
            5 => $infoUserReq["correo"],
            6 => $infoUserReq["password"],
            7 => $infoUserReq["nacionalidad"],
            8 => $infoUserReq["nivel_usuario"]);

        return $arregloInfo;
    }

    public function updateProfile($arregloInfo)
    {
        if (isset($_POST['numUserProfile'])) {
            $datosController = array(
                "idUser" => $_POST['numUserProfile'],
                "mailUser" => $_POST['emailProfile'],
                "newPass" => $_POST['newPass'],
                "confirmPass" => $_POST['confirmPass'],
                "curpUserProfile" => $_POST["curpUserProfile"]);
            $respuesta = Crud::actu alizar("usuario", $datosController);
            #  var_dump($datosController["actualPass"]);
            # $dataUser = Crud::consultaUsuario($datosController, 'APSISISTEMAS.dbo.empleados', 'APSISISTEMAS.dbo.empresas', 'APSISISTEMAS.dbo.vacaciones');
            if ($datosController["idUser"] === $arregloInfo[0] and $datosController["curpUserProfile"] === $arregloInfo[5]) {
                if ($respuesta == "success") {
                    header("location: principal.php");
                } else {
                    echo "error";
                }

                echo 'Bien hecho';
            } else {
                echo 'Error';
            }

        }

    }

    public
    function validarUser($validateUser)
    {
        $datosController = $validateUser;
        $respuesta = Crud::validarUser($datosController['User'], "APSISISTEMAS.dbo.empleados");
        # var_dump($respuesta['codigo']);

        $request = array(
            1 => $respuesta['codigo'],
            2 => $respuesta['empresa'],
            3 => $respuesta['nombre'],
            4 => $respuesta['ap_paterno'],
            5 => $respuesta['ap_materno'],
            6 => $respuesta['curp'],
            7 => $respuesta['fchalta'],
            8 => $respuesta['rfcalfa'] . $respuesta['rfcnum'],
            9 => $respuesta['rfcnum'],
            10 => $respuesta['rfchomo'],
            11 => $respuesta['activo'],
            12 => $respuesta['password_empleado'],
            13 => $respuesta['mail'],
            14 => $respuesta['credencial']);


        if ($request[1] === $datosController['User'] and $request[8] === $datosController['pass']) {
            echo 0;
        } else {
            echo 1;
        }


    }


    public function loadList()
    {
        #$datosController = $item;
        $respuesta = Crud::cargarSolicitudes("APSISISTEMAS.dbo.solicitud_vacaciones");

        foreach ($respuesta as $row => $item) {
            echo '
<br>
<table class="table table-hover table-light">
    <tbody>
<tr>
    <td>' . $item['Empresa'] . '</td>
    <td>' . $item['Codigo'] . '</td>
    <td>' . $item['Disfrute'] . '</td>
    <td>' . $item['Fin_Disfrute'] . '</td>
    <td>' . $item['Dias_Autoriza'] . '</td>
    <td>' . $item['Estatus'] . '</td>
    <td>' . $item['Motivo'] . '</td>
    <td>' . $item['Fecha_Real'] . '</td>
    <td>' . $item['Cerrada'] . '</td>
    <td>' . $item['CausaVacaciones'] . '</td>
    <td><a href="partials/registerUser.php"><button class="btn-warning">Editar</button></a></td>
    <td><a href="misSolicitudes.php"><button class="btn-danger">Borrar</button></a></td>
    <td><a href="principal.php"><button class="btn-dark">Regresar</button></a></td>
</tr>
   </tbody>
      </table>';
        }

    }


    public function editUser()
    {
        $respuesta = Crud::User("APSISISTEMAS.dbo.empleados");

        foreach ($respuesta as $row => $item) {
            echo '
<br>
<table class="table table-hover table-light">
    <tbody>
<tr>
    <td>' . $item['Empresa'] . '</td>
    <td>' . $item['Codigo'] . '</td>
    <td>' . $item['nombre'] . '</td>
    <td>' . $item['ap_paterno'] . '</td>
    <td>' . $item['ap_materno'] . '</td>
    <td>' . $item['Estatus'] . '</td>
    <td>' . $item['Motivo'] . '</td>
    <td>' . $item['Fecha_Real'] . '</td>
    <td>' . $item['Cerrada'] . '</td>
    <td>' . $item['CausaVacaciones'] . '</td>
    <td><a href="partials/registerUser.php"><button class="btn-warning">Editar</button></a></td>
    <td><a href="misSolicitudes.php"><button class="btn-danger">Borrar</button></a></td>
    <td><a href="principal.php"><button class="btn-dark">Regresar</button></a></td>
</tr>
   </tbody>
      </table>';
        }
    }

}