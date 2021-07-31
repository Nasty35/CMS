<div class="w3-container" style="margin: 20px auto 0; width: 360px;">
	<div class="w3-container w3-blue w3-margin">
		<h2>Escribir art&iacute;culo</h2>
		<form action="procesar_noticia.php" method="post">
			<label>Título noticia:</label>
			<input class="w3-input w3-round" type="text" name="titulo" required>
			<label>Categoría:</label>
			<input class="w3-input w3-round" type="text" name="categoria" required>
			<label>Escriba el articulo</label><br>
			<textarea class="w3-input w3-round" name="articulo" cols="40" rows="10" required></textarea><br>
			<input class="w3-button w3-grey w3-margin" type="submit" value="Publicar">
		</form>
	</div>
	<br>
	<a class="w3-button w3-green w3-margin" href="noticias.php">Volver</a>
</div>