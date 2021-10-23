 <?php

    function init_template()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');

        register_nav_menus(
            array(
                'top_menu' => 'Menú Principal'
            )
        );
    }
    add_action('after_setup_theme', 'init_template');

    function assets()
    {
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css', '', '5.0', 'all');
        wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap', '', '1.0', 'all');

        wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.0', 'all');

        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js', '', '2.9.1', true);
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js', array('jquery', 'popper'), '5.0', true);

        wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', '', '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'assets');

    function sidebar()
    {
        register_sidebar(array(
            'name' => 'Pie de página',
            'id' => 'footer',
            'description' => 'Zona de widgets para pie de página',
            'before_title' => '<p>',
            'after_title' => '</p>',
            'before_widget' => '<div id ="%1$s" class="%2$s"> ',
            'after_title' => '</div>',
        ));
    }
    add_action('widgets_init', 'sidebar');

    function productos_type()
    {
        $labels = array(
            'name' => 'Productos',
            'singular_name' => 'Producto',
            'menu_name' => 'Productos',
        );
        $args = array(
            'label' => 'Productos',
            'description' => 'Productos de Platzi',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-cart',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true, //Gutenberg

        );
        register_post_type('producto', $args);
    }
    add_action('init', 'productos_type');

    function pgRegisterTax()
    {
        $args = array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Categorias de Productos',
                'singular_name' => 'Categoria de Productos',
            ),
            'show_in_nav_menu' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'categoria-productos')
        );
        register_taxonomy('categoria-productos', array('producto'), $args);
    }
    add_action('init', 'pgRegisterTax');
