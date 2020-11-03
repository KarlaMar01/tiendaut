<?php
     try{
        $conexion = new PDO('mysql:host=localhost;dbname=tiendaut', 
                            'root',
                             '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Se estableció la conexión <br> <br>';
        
        /*
        //Esta parte busca todos los registros de la tabla 
        //y regresa  solo los nombres
        $stmt = $conexion->prepare('SELECT nombre FROM cliente');
        $stmt->execute();

        while($datos = $stmt->fetch() ){
            echo ' Nombre: ' . $datos[0] . '<br>';
        } 
      

        
        $user = 'Denisse';
        $pass = '1234';
        $nombre = 'Denisse Fortanelli';
        $correo = 'denisse@gmail.com';
 
 */

        /*
        //Regresa el registro del usuario Jesus
        $stmt = $conexion->prepare('SELECT nombre, correo FROM usuario WHERE usuario=:usuario');
        $stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
        $stmt->execute();
        //$stmt->execute(array(':usuario' =>$user));
        
        while($datos = $stmt->fetch() ){
            echo ' Nombre: ' . $datos[0] . '<br>' . 'Correo: ' . $datos[1] . '<br>';
        } 
        

        //Inserción de un registro
        $stmt = $conexion->prepare('INSERT INTO usuario (usuario, contrasena, nombre, correo)
                                    VALUES (:user, :pass, :nom, :mail)');
        $rows = $stmt->execute(array(':user'=>$user,
                                        ':pass'=>$pass,
                                        ':nom'=>$nombre,
                                        ':mail'=>$correo));
        if($rows == 1){
            echo 'Inserción correcta';
        }
        */
        /*
        //MODIFICACION DE UN REGISTRO
        $stmt = $conexion->prepare('UPDATE usuario SET usuario=:user WHERE nombre=:nom');
        $rows = $stmt->execute(array(':user'=>$user, ':nom'=>$nombre));
        if($rows > 0){
            echo 'Modificación correcta';
        }
        

        //BORRADO DE UN REGISTRO
        $stmt = $conexion->prepare('DELETE FROM usuario WHERE usuario=:user');
        $rows = $stmt->execute(array(':user'=>$user));
        if($rows > 0){
            echo 'Borrado correcto';
        }
        */


   }catch(PDOException $e){
        die('Error conectando a la base de datos:' . $e->getMessage());

       
   }
?>