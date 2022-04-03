<?php
//Recibo todos los datos del  formulario
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];
$direccion=$_POST["direccion"];
$celular=$_POST["celular"];
$documento = $_POST['documento'];
$dinero=$_POST["dinero"];
$Peliculas=$_POST["pelicula"];
$iva1 = 0.16;


//contenido de rambo
if($_REQUEST['pelicula'] == "r"){
    $entrada = 8000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 15){
                         echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                    echo "residente de $direccion, numero telefonico $celular"."<br>";
        echo "cumple con los requisitos para ver la pelicula"."<br>";
            echo "edad: $edad, total efectivo: $dinero"."<br>";
                        $sobra = $dinero - $total;
                        echo "precio por entrada: $total"."<br>";
                        echo "le sobran $sobra";
        }
        else{
                 echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                                 echo "residente de $direccion, numero telefonico $celular"."<br>";
                            echo "No cuenta con la edad suficiente para ver la película Rambo";
        }
    } 
    else{
                 echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                   echo "residente de $direccion, numero telefonico $celular"."<br>";
                      echo "No cuenta con el dinero suficiente para ver la película Rambo";
    }

//contenido depredador
}
elseif($_REQUEST['pelicula'] == "d"){
    $entrada = 10000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 15){
            echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                echo "residente de $direccion, numero telefonico $celular"."<br>";
                    echo "cumple con los requisitos para ver la pelicula"."<br>";
                       echo "Edad: $edad, total efectivo: $dinero"."<br>";
            $sobra = $dinero - $total;
              echo "precio por entrada: $total"."<br>";
                   echo "le sobran $sobra";
        }
        else{
             echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                       echo "residente de $direccion, numero telefonico $celular"."<br>";
                               echo "No cuenta con la edad suficiente para ver la película Depredador";
        }
    } 
    else{
              echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                     echo "residente de $direccion, numero telefonico $celular"."<br>";
                         echo "No cuenta con el dinero suficiente para ver la película Depredador";
    }  

//contenido del cazador de brujas
}
elseif($_REQUEST['pelicula'] == "c"){
    $entrada = 12000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 18){
            echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                echo "residente de $direccion, numero telefonico $celular"."<br>";
                    echo "cumple con los requisitos para ver la pelicula"."<br>";
                        echo "Edad: $edad, total efectivo: $dinero"."<br>";
            $sobra = $dinero - $total;
              echo "precio por entrada: $total"."<br>";
                   echo "le sobran $sobra";
        }
        else{
            echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                 echo "residente de $direccion, numero telefonico $celular"."<br>";
                     echo "No cuenta con la edad suficiente para ver la película El cazador de brujas";
        }
    } 
    else{
          echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
              echo "residente de $direccion, numero telefonico $celular"."<br>";
        echo "No cuenta con el dinero suficiente para ver la película El cazador de brujas";
    }

//contenido la red
}
elseif($_REQUEST['pelicula'] == "l"){
    $entrada = 15000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 18){
            echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                 echo "residente de $direccion, numero telefonico $celular"."<br>";
                     echo "cumple con los requisitos para ver la pelicula La Red"."<br>";
                         echo "Edad: $edad, total efectivo: $dinero"."<br>";
            $sobra = $dinero - $total;
            echo "precio por entrada: $total"."<br>";
                 echo "le sobran $sobra";
        }
        else{
            echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
                echo "residente de $direccion, numero telefonico $celular"."<br>";
                     echo "No cuenta con la edad suficiente para ver la película La Red";
        }
    } 
    else{
        echo "La persona $nombre $apellido identificado con el numero $documento"."<br>";
            echo "residente de $direccion, numero telefonico $celular"."<br>";
                echo "No cuenta con el dinero suficiente para ver la película La Red";
    }    
}
?>