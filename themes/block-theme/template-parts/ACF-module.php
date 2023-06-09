<?php

function capitaine_register_acf_block_types() {

    acf_register_block_type( array(
        'name'              => 'plugin',
        'title'             => 'Extension',
        'description'       => "Présentation d'une extension WordPress",
        'render_template'   => 'blocks/plugin.php',
        'category'          => 'formatting', 
        'icon'              => 'admin-plugins', 
        'keywords'          => array( 'plugin', 'extension', 'add-on' ),
        'enqueue_assets'    => function() {
        	wp_enqueue_style( 
                'capitaine-blocks', 
                get_template_directory_uri() . '/css/blocks.css' 
            );
        }
    ) );
}

add_action( 'acf/init', 'capitaine_register_acf_block_types' );