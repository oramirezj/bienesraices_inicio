<?php
//Base de datos
require '../../includes/config/database.php';
$db=conectarDB();


require '../../includes/funciones.php';
incluirTemplete('header');
?>


<main class="contenedor seccion">
    <h1>Crear</h1>


    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario" method="GET" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" placeholder="Precio Propiedad">
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Ej. 3" min="1" max="9">
            <label for="wc">Baños:</label>
            <input type="number" id="wc" placeholder="Ej. 2" min="1" max="9">
            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" placeholder="Ej. 2" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="" id="">
                <option value="1">Juan</option>
                <option value="2">Karen</option>
            </select>
        </fieldset>
        <input type="sumit" value="Crear propiedad" class="boton boton-verde">
    </form>
</main>
<!--main-->
<?php
incluirTemplete('footer');
?>