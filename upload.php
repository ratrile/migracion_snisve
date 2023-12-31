<?php
    require_once('conexion/conexionAccess.php');
    require_once('migracion/migracion_datos.php');
    require_once('migracion/migracion_establecimientos.php');
    require_once('migracion/migracion_variables_formulario.php');

    $directorio = "base_datos/";

    $archivo = $directorio . basename($_FILES["file"]["name"]);

    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    
    if($tipoArchivo == "mdb"){

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){

            $dt = new DateTime();
            echo $dt->format("Y");
         
            if (basename($_FILES["file"]["name"]) =='snismain.mdb'){
                $migracion_main  = new migracion_variable;
                $migracion_main->migrar_variable(realpath($archivo), $año);
                echo 'migracion terminada base main ';
            
            }else if(strpos(basename($_FILES["file"]["name"]),'snis20')!== false){

                $migracion_datos  = new migracion_establecimiento;
                $migracion_datos->migrar_establecimiento(realpath($archivo), $año);
                echo "<pre>";
                echo 'migracion terminada de los establecimientos';

                $migracion_datos  = new migracion_datos;
                $migracion_datos->formulario301(realpath($archivo), $año);
                echo "<pre>";
                echo 'migracion terminada formulario 301';

                $migracion_datos  = new migracion_datos;
                $migracion_datos->formulario302(realpath($archivo), $año);
                echo "<pre>";
                echo 'migracion terminada formulario 302';

                $migracion_datos  = new migracion_datos;
                $migracion_datos->formulario303(realpath($archivo), $año);
                echo "<pre>";
                echo 'migracion terminada formulario 303';
            }
           
        }else{
            echo "Hubo un error en la subida del archivo";
        }
    }else{
        echo "Solo se admiten archivo mdb";
    }
?>