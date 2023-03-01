<?php

    /*
    * Template Name: Plantilla de galerìa 
    */

    get_header()
?>


<main class="contenedor seccion">
    
    <?php

        while( have_posts() ): the_post();               
        
            the_title('<h1 class="text-center text-primary">','</h1>');  // Muestra el titulo de cada página https://developer.wordpress.org/reference/functions/the_title/
        
            // obtener la galeria
            $galeria = get_post_gallery( get_the_ID(), false );

            // Obtener los id's en un array
            $galeria_imagenes_ID = explode(",", $galeria['ids']); //explode crea arreglos de un string en este caso el primer parametro es la coma en el string cada dato lo separa una coma 


            ?>
                <ul class="galeria-imagenes">
                    <?php 
                        foreach($galeria_imagenes_ID as $id) {
                            $imagen_grande = wp_get_attachment_image_src($id, 'large')[0];   // esta funcion toma uno de los id de la imagen y retorna su ubucacion  https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/
                            $imagen_full = wp_get_attachment_image_src($id, 'full')[0];

                            ?>
                                <li>
                                    <a data-lightbox="galeria" href="<?php echo $imagen_full; ?>">
                                        <img src="<?php echo $imagen_grande; ?>" alt="imagen galeria"/>
                                    </a>
                                </li>
                            <?php 
                        }
                    ?>
                </ul>

            <?php 
        
        endwhile;

    ?>

</main>



<?php  
    get_footer();
?>