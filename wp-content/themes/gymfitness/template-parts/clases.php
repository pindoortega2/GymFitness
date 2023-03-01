<?php

    while( have_posts() ): the_post();       
        the_title('<h1 class="text-center text-primary">','</h1>');  // Muestra el titulo de cada página https://developer.wordpress.org/reference/functions/the_title/
        if(has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }
?> 

        <?php 
            $hora_inicio = get_field('hora_inicio');
            $hora_fin = get_field('hora_final');
            $dias = get_field('dias_clases');
        ?>

        <p class="informacion-clase"><?php echo $dias . " " . $hora_inicio . " - " . $hora_fin ?></p> 
        <?php 
        the_content();

    endwhile;
    ?>    