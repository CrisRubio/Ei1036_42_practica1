
<!--**
 * * Descripción: registro de usuario en el Programa Aprender PHP
 * *
 * * Descripción extensa: Pagina web dividida en 4 ficheros.
 * *
 * * @author  Cristina Rubio Juarez <al375866@uji.es>
 * * @version 1
 * * @link http://dllido@al.nisu.org/P0/holaMundo.php
 * * -->


<main>
	<h1>Gestión de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>

		<label for="client_id">Identificador</label>
		<br/>
		<input type="text" name="client_id" class="item_requerid" size="20" maxlength="25" value="<?php print $client_id ?>"
		 placeholder="1234" />
		<br/>

		<label for="name">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value="<?php print $name ?>"
		 placeholder="Miguel" />
		<br/>

		<label for="surname">Apellido</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="25" value="<?php print $surname ?>"
		 placeholder="Cervantes" />
		<br/>

		<label for="address">Dirección</label>
		<br/>
		<input type="text" name="address" class="item_requerid" size="20" maxlength="25" value="<?php print $address ?>"
		 placeholder="Ronda Mijares" />
		<br/>

		<label for="city">Ciudad</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="20" maxlength="25" value="<?php print $address ?>"
		 placeholder="Castellón" />
		<br/>

		<label for="foto_file">Foto file</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="20" maxlength="500" value="<?php print $address ?>"
		 placeholder="https://us.123rf.com/450wm/thesomeday123/thesomeday1231712/thesomeday123171200009/91087331-icono-de-perfil-de-avatar-predeterminado-para-hombre-marcador-de-posici%C3%B3n-de-foto-gris-vector-de-ilustr.jpg?ver=6" />
		<br/>

		<label for="zip_code">Clave</label>
		<br/>
		<input type="zip_code" name="passwd" class="item_requerid" size="8" maxlength="25" value="<?php print $passwd ?>"
		/>
		<br/>

		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>