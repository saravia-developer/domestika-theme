<?php

/**
 * ACTION'S HOOK
 */

/**
 * Summary of domestika_admin_head
 * @return void
 */
// function domestika_admin_head() {
//   echo "<h1>HOLA-HOLA-HOLA-HOLA-HOLA-HOLA-HOLA-HOLA</h1>";
// }

// add_action('admin_head', 'domestika_admin_head', 10);
/**
 * Summary of domestika_admin_head_2
 * @return void
 */
// function domestika_admin_head_2() {
//   echo "<h1>ADIOS-ADIOS-ADIOS-ADIOS-ADIOS-ADIOS-ADIOS-ADIOS</h1>";
// }

// add_action('admin_head', 'domestika_admin_head_2', 5);

/**
 * FILTER'S HOOK
 */

// function domestika_the_title( $title, $post_id ) {
//   $page_about_the_test_id = 1725;
//   if( $post_id === $page_about_the_test_id ) {
//     return $title . " ---- OK";
//   }
//   return $title;
// }
// add_filter('the_title', 'domestika_the_title', 10, 2);

function domestika_setup_theme() {
  
  // HTML5 para  los formularios de búsqueda, comentarios, galerias...
  $supports = [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ];
  add_theme_support('html5', $supports);

  // Soporte para etiqueta <title> dentro de <head>
  add_theme_support('title-tag');

  // Soporte para imágenes destacadas
  add_theme_support( 'post-thumbnails');

  // Soporte para Feed automático para posts y comentarios
  add_theme_support( 'automatic-feed-links');

  // Anchura del contenido. Sirve especialmente para vídeos embebidos.
  $GLOBALS['content-width'] = 1130;

  load_theme_textdomain( 'domestika', get_template_directory() . '/languages' );  
}

add_action( 'after_setup_theme', 'domestika_setup_theme' );

function domestika_enqueue_scripts() {

  wp_enqueue_style('domestika-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'domestika_enqueue_scripts');

function registerdcms_insertar_js() {

  if(!is_home()) return;

  // Esta función permite registrar un archivo JS ( script ) que se encuentra en tu proyecto para ser usado posteriormente 
  wp_register_script('dcms_miscript', get_template_directory_uri() . '/js/script.js', array('jquery'), 1, true);

  // Esta función permite ejecutar un archivo JS ( script ) que se encuentra registrado
  wp_enqueue_script('dcms_miscript');

  // Esta función de Wordpress permite pasar datos de PHP a JS
  wp_localize_script('dcms_miscript', 'dcms_vars', ['ajaxurl' => admin_url('admin-ajax.php')]);
}

add_action('wp_enqueue_scripts', 'registerdcms_insertar_js');


/**
 * 
 * Comentar que lo que añadiremos al add_action es un hook personalizado,
 * esto es la concatenación de la frase 'wp_ajax_nopriv_' y de 'wp_ajax_'
 * con el nombre que agregaste en la propiedad "action" de la propiedad de "data" de tu objeto que le
 * esas dando como argumento a AJAX en tu archivo Javascript
 * 
 * Ejemplo:
 * 
 * $.ajax({
 *  url: admin_url('admin-ajax.php'), # url del archivo ajax en tu proyecto wordpress'
 *  type: 'post', # Tipo de método
 *  data: {
 *    action: 'dcms_ajax_readmore, # palabra clave con la que se concatenarán las frases 'wp_ajax_nopriv_' y 'wp_ajax_'
 *    // Más datos personalizados que le quieras agregar al objeto y se pueda usar en PHP
 *  },
 *  success: function(resultado) {
 *    alert(resultado);
 *  }
 * 
 * })
 * 
 * */  
add_action('wp_ajax_nopriv_dcms_ajax_readmore', 'dcms_enviar_contenido');
add_action('wp_ajax_dcms_ajax_readmore', 'dcms_enviar_contenido');

function dcms_enviar_contenido() {

  // $test = absint(  );
  $test = $_POST['test'];

  // echo "<script>console.log(". $test .")</script>";
  echo $test;

  die();
}