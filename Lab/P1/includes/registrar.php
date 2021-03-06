<?php

/**
 * * Descripción: registrar en la base de datos
 * *
 * * Descripción extensa: acceso a la base de datos
 * *
 * * @author  Cristina Rubio Juárez <al375866@uji.es> 
 * * @copyright 2020 Cris
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 1
 * */


include("./gestionBD.php");

function handler($pdo,$table)
{
    $datos = $_REQUEST;
    if (count($_REQUEST) < 3) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO     $table (nombre, email,clave)
                        VALUES (?,?,?)";
                       
    echo $query;
    try { 
        $a=array($_REQUEST['userName'], $_REQUEST['email'],$_REQUEST['passwd'] );
        print_r ($a);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_REQUEST['userName'], $_REQUEST['email'],$_REQUEST['passwd']  ));
        if (1>$a)echo "InCorrecto";
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

$table = "a_cliente";
var_dump($_POST);
handler( $pdo,$table);
?>