<?php
require "Conexion.php";


class Crud extends Conexion
{
//Metodo para hacer el registro de los usuarios, funcional
    public function registroUserModel($tabla, $datos)
    {
        $stmt = Conexion::connection()->prepare("INSERT INTO $tabla(nombre, apellido_paterno, apellido_materno, fecha_nacimiento, correo, password, nacionalidad)
values (:nombreUser,:paterno,:materno,:fechaNac,:email,:pass,:nacion)");
        /*
        $stmt = Conexion::connection()->prepare("INSERT INTO usuario(nombre, apellido_paterno, 
        apellido_materno, fecha_nacimiento, correo, password, nacionalidad,nivel_usuario) 
        VALUE (:nombreUser,:paterno,:materno,:fechaNac,:email,:pass,:nacion,:nivelUser)");
        */
        //  $stmt->bindParam(':id', $datos['numUser'], PDO::PARAM_INT);
        $stmt->bindParam(":nombreUser", $datos["nameUser"], PDO::PARAM_STR);
        $stmt->bindParam(":paterno", $datos["ap_paterno"], PDO::PARAM_STR);
        $stmt->bindParam(":materno", $datos["ap_materno"], PDO::PARAM_STR);
        $stmt->bindParam(":fechaNac", $datos["fechaNac"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":nacion", $datos["nacionalidad"], PDO::PARAM_STR);
        //  $stmt->bindParam(":nivelUser", $datos["nivelUser"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            // $message = 'Usuario creado satisfactoriamente';
            return "success";
        } else {
            //$message = 'Error en el registro, intente de neuvo';
            return "error";
        }

    }

// Metodo para iniciar sesión, funcional
    public function login($tabla, $datosModel)
    {
        $stmt = Conexion::connection()->prepare("Select idUsuario,correo,password,nivel_usuario FROM $tabla where correo=:User");
        $stmt->bindParam(":User", $datosModel["emailUser"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->close();
    }

    public function infoUser($tabla,$datosModel){
        $stmt = Conexion::connection()->prepare("SELECT * FROM $tabla where idUsuario=:idUser");
        $stmt   -> bindParam(":idUser",$datosModel,PDO::PARAM_STR);
        $stmt   ->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->close();
    }

    //Metodo para actualizar perfil del Usuario
    public function actualizar($tabla, $datosModel)
    {
        $stmt = Conexion::connection()->prepare("UPDATE usuario SET where idUsuario=:idUser");
        $stmt->bindParam(":paterno", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":materno", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":idUser", $datosModel[''], PDO::PARAM_STR);
        if ($stmt->execute()) {
            #  return  $stmt->fetchAll(PDO::FETCH_ASSOC);
            # var_dump($stmt->fetchAl(PDO::PARAM_STR));
            return "success";
        } else {
            return "error";
        }

        $stmt->close();
    }

    public function updateVideojuegos($tabla, $datosModel)
    {
        $stmt = Conexion::connection()->prepare("UPDATE videojuego SET nombreVideojuego=:nombrV,clasificacion=:clasV,fechaLanzamiento=:fechaL,genero=:Genere,
 precio=:price
where idUsuario=:idUser");
        $stmt->bindParam(":nombrV", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":clasV", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":fechaL", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":Genere", $datosModel[''], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datosModel[''], PDO::PARAM_STR);
        if ($stmt->execute()) {
            #  return  $stmt->fetchAll(PDO::FETCH_ASSOC);
            # var_dump($stmt->fetchAl(PDO::PARAM_STR));
            return "success";
        } else {
            return "error";
        }
    }

}