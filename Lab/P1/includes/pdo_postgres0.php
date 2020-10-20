<?php

/**
 * * Descripción: pdo_postgres
 * *
 * * Descripción extensa: acceso a la base de datos
 * *
 * * @author  Cristina Rubio Juárez <al375866@uji.es> 
 * * @copyright 2020 Cris
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 1
 * */

/** The name of the database  */
define('DB_NAME', 'al375866_ei1036_42');

/** Database username */
define('DB_USER', 'al375866');

/** Database password */
define('DB_PASSWORD', '20912335E');

/** Database hostname */
define('DB_HOST', "db-aules.uji.es");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/* query y valor pueden ser nulos, o sea no pasarse como parรกmetros */
function ejecutarSQL($query,$valor) {

	global $pdo;
	
	try{
		if (!isset($pdo)) $pdo = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
		$consult = $pdo->prepare($query);
		$a=$consult->execute($valor); 
	}
	catch (PDOException $e) {
		echo "Failed to get DB handle: " . $e->getMessage() . "\n";
		echo $query."\n";
		retun -1;
	}
	return ($consult->fetchAll(PDO::FETCH_ASSOC)); 
						  
}

?>
