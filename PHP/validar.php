<?php
$error="";
 function validar_nombre($nombre,$error){
    if(empty($nombre)){
        $error=$error."No puso ningun nombre"."<br>";}
        if(is_numeric($nombre)){
         $error=$error."Su nombre tiene numeros"."<br>";
        }
        return $error;
    }

    
function validar_telefono($telefono,$error){
    if(empty($telefono)){
        $error=$error."No puso ningun telefono"."<br>";}
        elseif(strlen($telefono)>15){
            $error=$error."Tu telefono tiene mas de 10 numeros"."<br>";
        }
        if(!is_numeric($telefono)){
         $error=$error."Su telefono tiene letras"."<br>";
        }
        return $error;
    }

    function validar_empty($dato, $error){
        if(empty($dato)){
            $error=$error."No puede tener datos vacios"."<br>";
        } 
        return $error;
    }

    function validar_domicilio($domicilio, $error){
        if(empty($domicilio)){
            $error=$error."No puede tener datos vacios"."<br>";
        } 
        return $error;
    }
     

    function validar_correo($correo,$error){
     if(empty($correo)){
         $error=$error."No hay correo"."<br>";
     }elseif(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
         $error=$error."No es un correo"."<br>";
     }
     return $error;
 }
 function validar_dni($dni,$error){
     if(empty($dni)){
         $error=$error."No hay dni"."<br>";
     }
     elseif(!is_numeric($dni)){
      $error=$error."usted ingreso letras en el dni"."<br>";
     }
     elseif(strlen($dni)>8){
         $error=$error."el dni tiene mas de 8 digitos"."<br>";
     }
     elseif(strlen($dni)<8){
         $error=$error."el dni tiene mmenos de 8 digitos"."<br>";
     }
     return $error;
 }
 
 function validar_direccion($direccion,$error){
    if(empty($direccion)){
        $error=$error."No puso ninguna direccion"."<br>";}

        return $error;
    }

    function validar_codigo($codigo,$error){
        if(empty($codigo)){
            $error=$error."No puso un codigo"."<br>";
        }return $error;
    }

    function validar_descripcion($descripcion,$error){
        if(empty($descripcion)){
            $error=$error."No hay descripcion"."<br>";
        }
        if(is_numeric($descripcion)){
         $error=$error."usted ingreso numeros en la descripcion"."<br>";
        } return $error;
    }

    function validar_precio($precio,$error){
        if(empty($precio)){
            $error=$error."No puso precio"."<br>";
        }
         if(!is_numeric($precio)){
         $error=$error."usted ingreso letras en el precio"."<br>";
        } return $error;
    }
    function validar_cantidad($cantidad,$error){
        if(empty($cantidad)){
            $error=$error."No puso cantidad"."<br>";
        }
         if(!is_numeric($cantidad)){
         $error=$error."usted ingreso letras en la cantidad"."<br>";
        } return $error;
    }
    function validar_categoria($categoria,$error){
        if(empty($categoria)){
            $error=$error."No puso categoria"."<br>";
        }
       
        if(is_numeric($categoria)){
         $error=$error."usted ingreso numeros en la categoria"."<br>";
        } return $error;
    }
 
    function validar_fecha($fecha,$error){
        if(empty($fecha)){
            $error=$error."No puso fecha"."<br>";
        }
        return $error;
     }
     function validar_id($id,$error){
        if(empty($id)){
            $error=$error."No puso id "."<br>";
        }
       
        if(!is_numeric($id)){
         $error=$error."usted ingreso letras en el id "."<br>";
        } return $error;
     }
function validar_total($total,$error){
    if(empty($total)){
        $error=$error."No puso el total"."<br>";
    }
   
    if(!is_numeric($total)){
     $error=$error."usted ingreso letras en el total"."<br>";
    } return $error;
}
function validar_estado($estado,$error){
    if(empty($estado)){
        $error=$error."No puso el estado"."<br>";
    }
   
    if(is_numeric($estado)){
     $error=$error."usted ingreso numeros en el estado"."<br>";
    } return $error;
}
function validar_monto($monto,$error){
    if(empty($monto)){
        $error=$error."No puso el monto"."<br>";
    }
   
    if(!is_numeric($monto)){
     $error=$error."usted ingreso letras en el monto"."<br>";
    } return $error;
}
function validar_metodo($metodo,$error){
    if(empty($metodo)){
        $error=$error."No puso el metodo de pago"."<br>";
    }
   
    if(is_numeric($metodo)){
     $error=$error."usted ingreso numeros en el metodo de pago"."<br>";
    } return $error;
}
function validar_contrasena($contrasena,$error){
    if(empty($contrasena)){
        $error=$error. "La contrasena es requerida.<br>";
    }
    elseif(strlen($contrasena) >20){
         $error=$error. "la contraseña no puede tener mas de 20 caracteres caracteres.<br>";
    } 
    if(preg_match("/[0-9]/",$contrasena) <1){
        $error=$error. "La contraseña debe tener almenos 1 numero.<br>";
    }
    if(preg_match("/[A-Z]/",$contrasena) <1){
        $error=$error. "La contraseña debe tener almenos 1 mayuscula.<br>";
    }
    if(preg_match("/[a-z]/",$contrasena) <1){
        $error=$error. "La contraseña debe tener almenos 1 minuscula.<br>";
    }
    if(preg_match("/[!@·$%&*?.+_:;=-]/",$contrasena) <1){
        $error=$error. "La contraseña debe tener almenos 1 caracter especial.<br>";
    }
    return $error;
}
function validar_confirmar($confirmar,$contrasena,$error){
    if ($contrasena !== $confirmar) {   
    $error=$error. "Debe escribir su contraseña de vuelta para confirmarla.<br>";
  }
    return $error;
}
function validar_apellido($apellido, $error){
    if(empty($apellido)){
        $error .= "No puso el apellido" . "<br>";
    }
    return $error;
}

function validar_valor($valor,$error){
    if(empty($valor)){
        $error=$error."No valor"."<br>";
    }
}
 ?>