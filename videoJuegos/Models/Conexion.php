<?php


class Conexion
{

    //Se declara una funcion donde devolverá el estado de la conexión
    public function connection()
    {
        try {
            #$connect    =   new PDO('mysql:host=localhost;dbname=trigames','root','Alberto.23');
            $connect = new PDO('mysql:host=localhost;dbname=trigames', 'root', '');

            //echo "La conexion es correcta";
        } catch (PDOException    $exception) {
            die("Conexión Fallida....!!!" . $exception->getMessage());
        }
        return $connect;
    }

}