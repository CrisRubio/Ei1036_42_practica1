<?php

/**
 * * Descripción: listar tabla base de datos
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
    
    $rows=consultar($pdo,$table);
   
    if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
        print '<table><thead>';
        foreach ( array_keys($rows[0])as $key) {
            echo "<th>", $key,"</th>";
        }
        print "</thead>";
        foreach ($rows as $row) {
            print "<tr>";
            foreach ($row as $key => $val) {
                echo "<td>", $val, "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
}
$table = "a_cliente";

try{handler($pdo,$table);}
catch (PDOException $e) {
echo "Failed to get DB handle: " . $e->getMessage() . "\n";
exit;
}

    ?>