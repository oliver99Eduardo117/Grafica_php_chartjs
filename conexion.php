<?php

  //Opciones de la conexión
  $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
  //Objeto PDO, Controlador de BD, IP del servidor o localhost, nombre de la BD, usuario y contraseña
  $objetoPDO = new PDO('mysql:host=localhost;dbname=fordmt','root','',$opciones);
    
  try{
    $objetoPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $objetoPDO = new PDO('mysql:host=localhost;dbname=fordmt', 'root', '');
  }catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
  }

   
?>