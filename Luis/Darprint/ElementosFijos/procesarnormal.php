<?php

        $nombre = $_POST['usuario'];
        $apellidos = $_POST['ap'];
        $contraseña = $_POST['pass'];
        $correo = $_POST['corr'];
        $localidad = $_POST['Localidad'];
        $direccion = $_POST['Direccion'];
        $cp = $_POST['cp'];
        $telefono = $_POST['telefono'];

        $usuario = 'root';
        $password = '';
        $servidor = 'localhost';
        $basededatos = 'darprint';

        $mysqli = new mysqli($servidor, $usuario, $password, $basededatos);
     
        if ($mysqli -> connect_errno) {
           echo "Fallo al conectar con la BD " . $mysqli -> connect_error;
           exit();
         }

        //hacemos la sentencia SQL
        $sql = "INSERT INTO usuarios ( nombre, apellidos, contraseña, correo, localidad, direccion, cp, telefono) VALUES('".$nombre."', '".$apellidos."', '".$contraseña."',
        '".$correo."', '".$localidad."', '".$direccion."', '".$cp."', '".$telefono."')";


        //ejecutamos la sentencia SQL
        $consulta = $mysqli->query($sql);
?>