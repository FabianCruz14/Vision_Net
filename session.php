<?php

if(isset($_POST['submit'])){
    # session_start();
     require("connection.php");  #siempre que se va a manipular info de la BD primero necesitamos hacer la conexion
         
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }

     $ide = validate($_POST['identifier']);
     $password = validate($_POST['password']);

     $eadmin = "SELECT nameA FROM administradores WHERE id='$ide' AND pass='$password'";   

     $res = mysqli_query($connection, $eadmin) or die("Query error");
     $fila=mysqli_fetch_assoc($res);
     if($fila == NULL){
        mysqli_close($connection);
        header("Location: login_admins.php?error=Correo o contraseña incorrecta");
        exit();

     }
     else{
        session_start();
        $_SESSION["ID"]=$fila;
        
        mysqli_close($connection); 
        header("Location: vista_user.php"); #bienvenida del admin 
        exit();         
     }
     
 }          
?>