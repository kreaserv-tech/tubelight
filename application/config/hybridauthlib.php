<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config =
	array(
		// set on "base_url" the relative url that point to HybridAuth Endpoint
		'base_url' => '/hauth/endpoint',
		"providers" => array (
			"OpenID" => array (
				"enabled" => true
			),

			"Yahoo" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" ),
			),

			"AOL"  => array (
				"enabled" => true
			),

			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "199580801575-i70c3ctc7v48uqeeng6k4tg9oi8aupqv.apps.googleusercontent.com", "secret" => "P1CzamJ_NyeV7cek5j-eTP6t" ),
			),

			"Facebook" => array (
				"enabled" 		 => true,
				"keys"    		 => array ( "id" => "451881528501437", "secret" => "2d23015e4e98d23f3ca3fac700e7044e" ),
				// "trustForwarded" => true,
				// "scope"          => "email, username, user_birthday, user_hometown", // optional

			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "NgRUEFC0s8NYn0utcOy1RcFqs", "secret" => "YyC4Q3ZOXf8BRUdtOUu3v29FBBvk8LQoZAtDr1p4EOVr7Cx1kv" )
			),

			// windows live
			"Live" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"MySpace" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"LinkedIn" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"Foursquare" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => (ENVIRONMENT == 'development'),

		"debug_file" => APPPATH.'/logs/hybridauth.log',
	);


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */