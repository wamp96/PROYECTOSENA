<html>
<head><title>Creacion de usuario</title></head>



<?php 
    include ("conexion.php");

    $con = connection();

    $id_usuario = null;
    $identidad = isset($_POST['identidad']) ? $_POST['identidad'] : "";
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellidop = isset($_POST['apellidop']) ? $_POST['apellidop'] : "";
    $apellidom = isset($_POST['apellidom']) ? $_POST['apellidom'] : "";
    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
    $rol = isset($_POST['rol']) ? $_POST['rol'] : "";
    $area = isset($_POST['area']) ? $_POST['area'] : "";
    $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : "";
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : "";



    $sql = "INSERT INTO usuario (id_usuario,nombre_perfil,contraseña,id_rol) 
    VALUE(
        '$id_usuario',
        '$usuario',
        '$contrasena'
        '$rol',        
         )";


    if($rol == 1){
        $sql = "INSERT INTO tecnico (id_tecnico,nombre,apellidop,apellidom,correo,telefono,id_ciudad,id_usuario,id_area) 
        VALUE(
            '$identidad',
            '$nombre',
            '$apellidop',
            '$apellidom',
            '$correo',
            '$telefono',
            '$ciudad',
            '$usuario',
            '$area'
             )";
    }    

    $query = mysqli_query($con,$sql);
    /*Se cierra la conexion a la base de datos $conexion abierta previamente */
    mysqli_close($con);
    //Imprimir mensaje al cerrar la conexion a la base de datos
    echo"El usuario fue ingresado correctamente";
        
?>




    <?php
    /*
        //Se generar variable conexion a la cual se le asigna la conexion a MYSQL a la base de datos Conexion1
        $conexion = mysqli_connect(
            //SERVIDOR DE CONEXION
            "localhost",
            //USUARIO CONEXION
            "root",
            //CONTRASEÑA CONEXION 
            "",
            //BASE DE DATOS CONEXION
            "proyecto") 
            or die("Problemas de la conexión");
        
        /*Se realiza una consulta sobre la variable conexion,se insertan datos en la tabla alumnos, en caso que no se conecte correctamente a la base de datos arroja error*
        mysqli_query($conexion, "insert into usuario(nombre_perfil,contraseña,id_rol) values 
                    ($_REQUEST[usuario],'$_REQUEST[contrasena]','$_REQUEST[rol]')") or 
                    die ("Problemas en el select" . mysqli_error($conexion));

        if($rol == 1){
            mysqli_query($conexion, "insert into tecnico(id_tecnico,nombre,apellidop,apellidom,correo,telefono,id_ciudad,id_usuario,id_area) values 
            ($_REQUEST[identidad],'$_REQUEST[nombre]','$_REQUEST[apellidop]','$_REQUEST[apellidom],'$_REQUEST[correo]',$_REQUEST[telefono],$_REQUEST[ciudad],'$_REQUEST[usuario]',$_REQUEST[area])") or 
            die ("Problemas en el select" . mysqli_error($conexion));

        }
                    


        /*Se cierra la conexion a la base de datos $conexion abierta previamente *
        mysqli_close($conexion);
        //Imprimir mensaje al cerrar la conexion a la base de datos
        echo"El usuario fue ingresado correctamente";

        */
    ?>
