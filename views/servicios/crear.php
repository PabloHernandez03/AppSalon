<h3 class="nombre-pagina">Nuevo Servicio</h3>
<h3 class="descripcion-pagina">LLena todo los campos para añadir un nuevo servicio</h3>

<?php
    include_once __DIR__."/../templates/barra.php";
    include_once __DIR__."/../templates/alertas.php";
?>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php
        include_once __DIR__."/formulario.php";
    ?>
    <input type="submit" class="boton" value="Guardar Servicio">
</form>