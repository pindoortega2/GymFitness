<?php

    // Includes
    require get_template_directory() . '/includes/widgets.php';
    require get_template_directory() . '/includes/querys.php';


    //Esta funcion es para crear el menu y añadir la ubicacion del menu por ejemplo este es el menu principal se puede crear tambien el menu del pie de pagina etc
    function gymfitness_menus() {
        register_nav_menus( array(
            'menu-principal' => __('Menu Principal', 'gymfitness')
        ) );
    }
    add_action('init', 'gymfitness_menus');


    //Con esta función puedo agregar los estilos que yo crea necesario por ejemplo el principal style.css
    function gymfitness_scripts_styles() {        
        
        // Archivos CSS            
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0' );
        wp_enqueue_style('estilos', get_template_directory_uri() . '/normalize.css', array('style'), '8.0.2' );
        wp_enqueue_style('ligthBox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '11.0.2');
        //Con el siguiente código es posible evitar el cache de la hoja de estilos, y así recargar normal: para producción hay que crear la versión 1.0.0
        //wp_enqueue_style( 'gymfitness-styles', get_stylesheet_uri(), [], filemtime( get_stylesheet_directory() . '/style.css' ), 'all');

        //ARCHIVOS JS
        //wp_enqueue_script(jquery);  LLAMOS A JQUERY
        wp_enqueue_script('lightBox', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '11.0.2', true); //true quiere decir que se va a imprimir en el footer  => array(jquery) llamamos a jquery
    }     
    add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');    

    
    //Función para activar las imagenes destacadas de cada página creada
    function gymfitness_setup() {
        // activa la opcion de imagenes Destacadas https://developer.wordpress.org/reference/functions/add_theme_support/
        add_theme_support('post-thumbnails');
        //Titulos para SEO https://developer.wordpress.org/reference/functions/add_theme_support/
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'gymfitness_setup');

    
    // Definir zona de widgets
    function gymfitness_widgets() {
        register_sidebar( array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        ) );

        register_sidebar( array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar_2',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        ) );
    }
    add_action('widgets_init', 'gymfitness_widgets');


    //CREANDO MIS SHORECODE

    function gymfitness_ubicacion_shortcode() {

        ?>
        <div class="mapa">
            <?php
                if(is_page('contacto')) {
                    the_field('mapa');
                }
            ?>
        </div>

        <h2 class="text-center text-primary"><?php the_field('texto_contacto') ?></h2>
        <?php    
        $maps_shorecode = the_field('short_code_maps_contact');
        echo do_shortcode($maps_shorecode);        

    }
    add_shortcode('gymfytness_ubicacion', 'gymfitness_ubicacion_shortcode');