<?php get_header() ?>      

    <section class="bienvenida seccion contenedor text-center">
        <h2 class="text-primary">
            <?php the_field('encabezado_bienvenida') ?>
        </h2>
        <p><?php the_field('texto_bienvenida') ?></p>
    </section>

    <section class="areas">

        <div class="area">
            <?php
                $area1 = get_field('area_1'); 
            ?>

            <img src="<?php echo $area1['imagen']['sizes']['medium_large'] ?> ">
            <p><?php echo $area1['texto']?></p>
            
        </div>

        <div class="area">
            <?php
                $area2 = get_field('area_2'); 
            ?>
            
            <img src="<?php echo $area2['imagen']['sizes']['medium_large'] ?> ">
            <p><?php echo $area2['texto']?></p>
            
        </div>

        <div class="area">
            <?php
                $area3 = get_field('area_3'); 
            ?>
            
            <img src="<?php echo $area3['imagen']['sizes']['medium_large'] ?> ">
            <p><?php echo $area3['texto']?></p>
            
        </div>

        <div class="area">
            <?php
                $area4 = get_field('area_4'); 
            ?>
            
            <img src="<?php echo $area4['imagen']['sizes']['medium_large'] ?> ">
            <p><?php echo $area4['texto']?></p>
            
        </div>

    </section>

    <main class="contenedor seccion">
           <h2 class="text-center text-primary">Nuestras Clases</h2> 

           <?php listar_clases_gym(4) ?>

           <div class="contenedor-boton"> <!-- esc_url da una seguridad de escape para la url (get_permalink permite ingresar el link de alguna direccion) (get_page_by_title -> permite colocar el nombre de una página )-->
                <a class="boton boton-primario" href="<?php echo esc_url(get_permalink(get_page_by_title('Nuestras Clases'))); ?>">Ver Todas las Clases</a>
           </div>

    </main>

    <section class="contenedor section">
        <h2 class="text-center text-primary">Todos nuestros profesionales</h2>
        <p class="text-center"> Instructores Profesionales que te ayudaran a lograr tus objetivos</p>
        <?php listar_profesionales() ?>
    </section>

    <!--Este codigo es de ejemplo no tomar en cuenta-->


<?php get_footer() ?>

