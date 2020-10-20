<?php //control_form.php
    
    /**
     * * Descripción: Programa Aprender PHP
     * *
     * * @author  Cristina Rubio Juárez <al375866@uji.es>
     * * @copyright 2020 Cristina
     * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
     * * @version 1
     * * @link http://dllido.al.nisu.org/P0/holaMundo.php
     * */


echo "GET";
var_dump($_GET);
echo "POST";
var_dump($_POST);
echo "REQUEST";
var_dump($_REQUEST);

    if (isset($_REQUEST["nombre"])) {
        $nombre= $_REQUEST["nombre"];
         print ("<P>Hola, $nombre</P>");
        }
 
    ?>
