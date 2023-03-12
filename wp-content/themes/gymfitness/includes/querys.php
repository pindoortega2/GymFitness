<?php

    function listar_clases_gym($cantidad = -1) {
        ?>

            <ul class="listado-grid">
                <?php
                
                    $args = array(
                        'post_type' => 'gymfitness_clases',
                        'posts_per_page' => $cantidad 
                    );        

                    // The Query
                    $the_query = new WP_Query( $args );

                        // The Loop
                        if ( $the_query->have_posts() ) {                        
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                ?>                
                            <li class="card">
                                <?php the_post_thumbnail() ?>
                                <div class="contenido">
                                    <a href="<?php the_permalink() ?>">
                                        <h3><?php the_title() ?></h3>
                                        <?php 
                                            $hora_inicio = get_field('hora_inicio');
                                            $hora_fin = get_field('hora_final');
                                            $dias = get_field('dias_clases');
                                        ?>

                                        <p><?php echo $dias . " " . $hora_inicio . " - " . $hora_fin ?></p> 
                                        
                                    </a>
                                </div>
                            </li>                          
                        <?php      
                            }                                            
                        }                                                        
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>   
            </ul> 


        <?php

    }




    function listar_profesionales() {
        ?>

        <ul class="listado-grid instructores">
            <?php
            
                $args = array(
                    'post_type' => 'instructores',                    
                );        

                // The Query
                $instructores = new WP_Query( $args );

                    // The Loop
                    if ( $instructores->have_posts() ) {                        
                        while ( $instructores->have_posts() ) {
                            $instructores->the_post();
            ?>                
                            <li class="instructor">
                                <?php the_post_thumbnail('large') ?>
                                    <div class="contenido text-center">
                                        
                                        <h3><?php the_title() ?></h3>
                                        <h5><?php the_content() ?></h5>

                                        <div class="especialidades">
                                            <?php
                                                $esp = get_field('especialidad');

                                                foreach ($esp as $e) {
                                                    ?>
                                                        <span class="etiqueta"><?php echo esc_html($e) ?></span>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                            
                                        
                                    </div>
                            </li>                          
                                <?php      
                        }                                            
                    }                                                        
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>   
        </ul> 


    <?php
    }