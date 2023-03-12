<?php

    /*
    * Template Name: Listado de clases
    */

    get_header() 

?>

    <main class="contenedor seccion">
        <!--https://developer.wordpress.org/reference/classes/wp_query/-->
        <?php
            get_template_part('template-parts/pagina');
        ?>
        

        <?php
            listar_clases_gym(); //Esta funcion viene de includes querys.php (se recuerda que se implementa en el functions.php)
        ?>

    </main>

<?php get_footer() ?>


