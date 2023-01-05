<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
 
// Send Email
function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '97aef3ab9f5659';
  $phpmailer->Password = '97767e48d7f77b';
}

add_action('phpmailer_init', 'mailtrap');
