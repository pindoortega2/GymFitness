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
        <ul class="listado-grid">
            <?php
            
                $args = array(
                    'post_type' => 'gymfitness_clases'
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
    </main>

<?php get_footer() ?>


