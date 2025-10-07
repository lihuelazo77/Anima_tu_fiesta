<?php
require_once './dao.php'
$NombreBuscar= "arte";
$dao= new dao();
$consulta= "select codigo, nombre, creditos""from curso where nombre= '$NombreBuscar' order by nomnre asc"
try{
    $datos=$dao ->EjecutarConsulta($consulta);
    if(is_integer($datos)){
        echo "ocurrio un error";
    }else{
        if(isset($datos) && !empty($datos) && sizeof($datos)>0){
            echo "<h1>cursos: </h1>";
        }
    }
