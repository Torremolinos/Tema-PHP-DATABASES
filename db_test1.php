<?php
/*Vamos a crear una variable cadena conexion porque vamos a guardar aqui en una cadena de texto los datos de conexion que necesitamos. declaramos dentro el sql y el nombre de la base de datos.*/
$cadena_conexion = 'mysql:dbname=dwes_t3;host=127.0.0.1';
$usuario = "root";
$clave = "";

/*como puede fallar lo metemos en un trycatch*/
try{
    $bd=new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexion Realizada con exito";
    $sq1= "SELECT usuario FROM usuarios";
     echo "<br>";
    
     /*creamos una variable usuarios para que nos devuelva el metodo de query que es lo que le lanzamos a la base de datos*/
     $usuarios = $bd->query($sq1);
     print_r($usuarios);

     echo "<br>";
     foreach($usuarios as $row){
        print_r($row["usuario"]. "<br>");
     }
}catch(PDOException $e){
    
    echo "Error conectando a la base de datos: ". $e->getMessage();
}
/**/
?>