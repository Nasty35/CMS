<form action="editar_noticia.php" method="post" class="w3-container w3-center w3-blue w3-margin">
    <input type="hidden" name="id" value = "<?=Noticias::getData($_GET['id'])['id_noticia'];?>"><br>
    Título noticia:<br>
    <input class="w3-input w3-round" type="text" name="titulo" value="<?=Noticias::getData($_GET['id'])['titulo'];?>" required><br>
    Categoría:<br>
    <input class="w3-input w3-round" type="text" name="categoria" value= "<?=Noticias::getData($_GET['id'])['categoria'];?>" required><br>
    Escriba el articulo<br>
    <textarea  class="w3-input w3-round" name="noticia" cols="50" rows="10" required><?=Noticias::getData($_GET['id'])['noticia'];?></textarea>
    <br>
    <input class="w3-button w3-grey w3-margin" type="submit" value="Editar"><br>
</form>