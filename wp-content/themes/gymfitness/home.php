<?php get_header() ?>      

        <!--Este archivo se encuentra todas las entradas o  post q se ingreso en el custom post ty entrada-->

        <main class="contenedor seccion">
            <ul class="listado-grid">
                <?php
                    while (have_posts()): the_post();
                        get_template_part('template-parts/blog');
                    endwhile;
                ?>
            </ul>
        </main>


<?php get_footer() ?>


