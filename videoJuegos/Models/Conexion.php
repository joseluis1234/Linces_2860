<?php


class Conexion
{
    //Se declara una funcion donde devolverá el estado de la conexión
    public function conexion(){
        try{
            $connect    =   new PDO('mysql:host=localhost;dbname=nombredelabd','root','','');
        }catch (PDOException    $exception){
            die("CConexión Fallida....!!!".$exception->getMessage());
        }
        return  $connect;
    }

}