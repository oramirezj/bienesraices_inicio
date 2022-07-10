<?php
    require 'includes/funciones.php';
    incluirTemplete('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta en frente del Bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad" />
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono-car" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono-car" loading="lazy" src="build/img/icono_estacionamiento.svg"
                    alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono-car" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p>4</p>
            </li>
        </ul>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Blanditiis at, ea voluptatibus reprehenderit sequi saepe cum quisquam necessitatibus
            minus facere exercitationem vel eius suscipit. Alias modi commodi nihil necessitatibus ullam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet totam sed, laboriosam non
            inventore at quisquam, delectus, beatae nesciunt harum quidem fugiat magni?
        </p>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem in suscipit architecto
            Impedit quisquam dolor dolore, ea consectetur dolorem pariatur ullam rem s
            Eaque, aliquam in, et consequatur necessitatibus tempora exercitationem
        </p>


    </div>

</main>
<!--fin de main-->

<?php 
incluirTemplete('footer');
?>