<footer class="footer contenedor">
        <hr>

        <div class="contenido-footer">
            <?php
                $args = array (
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );

                wp_nav_menu($args);
            ?>

            <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>   <!--get_bloginfo('name') //imprime el titulo del sitio:  https://developer.wordpress.org/reference/functions/get_bloginfo/-->
        </div>
    </footer>

    <?php wp_footer(); ?>  <!--//Este código imprime la barra de edición que tiene cada página https://developer.wordpress.org/reference/functions/wp_footer/-->
</body>
</html>