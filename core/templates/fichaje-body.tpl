<div class="w3-container" style="margin: 20px auto 0; width: 360px;">
<div class="w3-center">
    <p class="w3-blue">Hora actual</p2>
    <form name="form_reloj" method="post">
        <input class="w3-input w3-center" type="text" name="reloj" readonly><br>
        <input class="w3-button w3-black w3-round" type="submit" name="entrada" value="Fichar entrada">
        <input class="w3-button w3-black w3-round" type="submit" name="salida" value="Fichar salida">
    </form>
</div>
<hr>
<table class="w3-table w3-striped w3-border">
<tr>
    <th>Entrada</th>
    <th>Salida</th>
</tr>
<?php
    global $fichar;
    $fichar->registros();
?>
</table>
<script>
    function mueveReloj() {
        date = new Date();
        dia = date.getDate() + "-" + date.getMonth() + "-" + date.getFullYear();
        hora = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        document.form_reloj.reloj.value = dia + " " + hora;
        setTimeout("mueveReloj()", 1000);
    }
    window.onload = mueveReloj();
</script>