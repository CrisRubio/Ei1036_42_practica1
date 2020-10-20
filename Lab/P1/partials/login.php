
<!--**
 * * Descripción: inicio de sesión del Programa Aprender PHP
 * *
 * * Descripción extensa: Pagina web dividida en 4 ficheros.
 * *
 * * @author  Cristina Rubio Juarez <al375866@uji.es>
 * * @version 1
 * * @link http://dllido@al.nisu.org/P0/holaMundo.php
 * * -->


<main>
	<h1>Gestion de Usuarios </h1>
	<form class="fom_usuario" action="./datosForm.php" method="POST">
		<fieldset>
			<legend>Datos básicos</legend>
			<label for="nombre">Nombre</label>
			<br/>
			<input type="text" name="nombre" class="item_requerid" size="20" maxlength="25"  placeholder="Miguel" />
			<br/>
			<label for="passwd">Contraseña</label>
			<br/>
			<input type="password"  name="passwd"  class="item_requerid" size="20" maxlength="25" value="xxxx" />
			<br/>
		</fieldset>
		<p>
		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>