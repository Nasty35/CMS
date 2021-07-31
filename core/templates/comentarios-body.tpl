<div class="w3-padding-large" style="margin: 20px auto 0; width: 360px;">
	<?php
		Noticias::mostrar($_GET['id']);
		Comentarios::mostrar($_GET['id']);
	?>
	<form action="procesar_comentario.php?id=<?=$_GET['id']?>" method="post">
		<input type="hidden" name="id" value="<?=$_GET['id']?>"><br>
		Escriba el comentario<br>
		<textarea name="comentario" cols="40" rows="10" required></textarea>
		<br>
		<input class="w3-button w3-gray" type="submit" value="Enviar comentario"><br>
	</form>
	<br>
	<a class="w3-button w3-green" href="noticias.php">Volver</a>
</div>