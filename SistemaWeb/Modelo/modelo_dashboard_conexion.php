<?php

class conexion{

    static public function conectar(){
      try {
        $conn=new PDO("mysql:host=clinicmariaaux.cvkwoo8mw8nz.us-east-1.rds.amazonaws.com;dbname=clinicmariaaux1","bd001","bdmariaaux001",array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $conn;
      } catch (PDOException $e) {
        echo 'Fallo la conexion: '. $e->getMessage();
      }
    }
}
