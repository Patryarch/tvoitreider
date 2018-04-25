<?php
define (‘WPCF7_LOAD_JS’, true );
remove_action( 'wp_head', 'wp_enqueue_scripts');
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

show_admin_bar(false);

add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );

//======================================================================
// Adding password field to wpcf7
// http://smallenvelop.com/how-to-get-password-fields-in-contact-form-7/
//======================================================================
function cfp($atts, $content = null) {
    extract(shortcode_atts(array( "id" => "", "title" => "", "pwd" => "" ), $atts));

    if(empty($id) || empty($title)) return "";

    $cf7 = do_shortcode('[contact-form-7 id="91" title="Contact form"]');

    $pwd = explode(',', $pwd);
    foreach($pwd as $p) {
        $p = trim($p);

        $cf7 = preg_replace('/<input type="text" name="' . $p . '"/usi', '<input type="password" name="' . $p . '"', $cf7);
    }

    return $cf7;
}
add_shortcode('cfp', 'cfp');

add_action( 'wpcf7_before_send_mail', 'CF7_pre_send' );
 
function CF7_pre_send($WPCF7_ContactForm) {
	$wpcf7      = WPCF7_ContactForm::get_current();
   $output = "";
   $output .= "Name: " . $_POST['your-name'];
   $output .= "Email: " . $_POST['email'];
 $output .= "password: " . $_POST['password'];
 
 file_put_contents("cf7outputtest.txt", $wpcf7);
}
