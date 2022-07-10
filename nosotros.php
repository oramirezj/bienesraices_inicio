<?php
require 'includes/funciones.php';
incluirTemplete('header');
?>


<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp" />
                <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
                <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" />
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>
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
    </div>

</main>
<!--main-->

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Control de acceso, vigilancia las 24 horas del día, botones de emergencia, seguridad vecinal, sin
                duda su mejor opción</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Encuentre los mejores precios, tenemos muchas opciones que se pueden ajustar a sus presupuesto, haga
                la prueba y denos la oportunidad de darle información.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>La mejor atención tomando en cuenta lo más valioso que todos tenemos, nuestro tiempo. Respuestas
                agiles, solo tomando el tiempo necesario.</p>
        </div>
    </div>
</section>
<!--Secction iconos-->


<?php 
incluirTemplete('footer');
?>