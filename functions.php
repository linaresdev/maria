<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/


## POST TYPE
// add_action('init', function(){
// 	$args = array(
//         'labels' => array(
//             'name' => 'Portafolios',
//             'singular_name' => 'portafolio',
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'show_in_rest' => true,
//         'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
//     );

// 	register_post_type( 'portafolio', $args );
// });



## SHOW ? HIDDEN ADMIN TOOL BAR
show_admin_bar(false);

if( class_exists("Mail"))
{
	Mail::makePost("contactFromPage", function($app) 
	{
		$name 		= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$email 		= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$phone 		= filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
		$message 	= filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
		$message 	= filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
		
		$app->registerMail([
			"name" 		=> $name,
			"subject" 	=> "Solicitud de servicio de $name",
			"email" 	=> $email,
			"phone" 	=> $phone,
			"message" 	=> $message,
		]);

		if( $app->start() ) {
			$app->from("info@iipec.net", "INPROER");
			$app->subject("Solicitud de servicio");
			$app->to($email);
			$app->sendHtml('<p>Solicitud recivida!</p> <p>Le estaremos asignando un agente a la menor brevedad posible.</p>');
		}

		## Regresa a casa
		## wp_redirect( $_SERVER["HTTP_REFERER"], 301 ); exit();
		add_action('template_redirect', function(){
			wp_redirect( home_url("solicitud-de-servicio-enviada"), 301 ); exit();
		});
	});
}


## LOGIN
add_filter( 'login_headerurl', function(){
	return home_url();
});
add_filter( 'login_headertext', function(){
	return 'INPROER';
});

add_action( 'login_redirect', function(){
	return home_url();
});


## HELPERS
if( !function_exists("maria_asset_css") )
{
	function maria_asset_css($path=null)
	{
		return get_template_directory_uri()."/assets/css/".trim($path, '/');
	}
}
if( !function_exists("maria_asset_js") )
{
	function maria_asset_js($path=null)
	{
		return get_template_directory_uri()."/assets/js/".trim($path, '/');
	}
}


## STYLE && JS 
function mariamentor_styles()
{
	wp_enqueue_style(
		'bootstrap.css', maria_asset_css("bootstrap.min.css"), array(), "5.3.3"
	);
	wp_enqueue_style(
		'mdi', maria_asset_css("materialdesignicons.min.css"), array(), "5.3.3"
	);
	wp_enqueue_style(
		'layout', maria_asset_css("layout.css"), array(), "1.0"
	);
	wp_enqueue_script(
		"layout.js", maria_asset_js("layout.js"), array('jquery'), "1.0"
	);
	wp_enqueue_script(
		"bootstrap.js", maria_asset_js("bootstrap.bundle.min.js"), array('jquery'), "1.0"
	);
}

add_action('wp_enqueue_scripts', "mariamentor_styles");
