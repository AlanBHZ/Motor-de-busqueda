<?php
#consultas a la base de datos
class Conexion{
  public static function con()
  {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "";
    $port = "3308";
    //realizamos la conexion a la bd
    $link = mysqli_connect($host, $user, $pass, $dbname, $port)
      or die("ERROR AL CONECTAR LA BD" . mysqli_error($link));
    //SETEAR LA bd
    mysqli_query($link, "SET NAMES 'utf8'");
    //seleccionamos la bd
    mysqli_select_db($link, $dbname)
      or die("ERROR AL SELECCIONAR LA BD" . mysqli_error($link));
    return $link;
  }
}
?>