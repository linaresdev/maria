<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/


## SHOW ? HIDDEN ADMIN TOOL BAR
show_admin_bar(false);

if( class_exists("Mail"))
{
	Mail::tag("sendmail");

	// if( Mail::start() ) {
		
	// 	// Mail::from("info@iipec.net", "IIPEC");
	// 	// Mail::subject("Envio de correo empresarial");
	// 	// Mail::to("rlinareslf@gmail.com");
	// 	//Mail::sendHtml("<h1> Ramon Linares </h1>");
		

	// }
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
