<?php
/*
Plugin name: Modo Oscuro
Description: Activa el modo escuro en el tema
Version: 1.0
Author: Sebastian Castillo
*/
function estilos_plugin(){
    $estilos_url = plugin_dir_url(__FILE__);


    wp_enqueue_style( 'estilos_plugin', $estilos_url."/assets/css/estilos.css", '', '1.0','all');
}




add_action('wp_enqueue_scripts','estilos_plugin');