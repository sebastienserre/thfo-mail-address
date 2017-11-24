<?php

	/*
	Plugin Name: THFO Mail-address
	Plugin URI: http://ww.thivinfo.com
	Description: (Mu-)Plugin to change default wordpress@example.com
	Version: 1.1.0
	Author: sebastienserre
	Author URI: https://www.paypal.me/sebastienserre
	License: GPL2
	*/

	add_filter( 'wp_mail_from', 'thfo_chg_mail' );

	function thfo_chg_mail() {

		/**
		 * Change this PHP Constant to change the part before the @ in the e-mail address
		 */
		define( 'MAIL_CONTACT', 'contact' );

		/**
		 * Change this PHP Constant to customize the domain of the mail (if different from WP Install for example)
		 */
		define( 'MAIL_DOMAIN', '' );

		if ( defined( 'MAIL_DOMAIN' ) && empty( MAIL_DOMAIN ) ) {

			$sitename = strtolower( $_SERVER['SERVER_NAME'] );
			$www      = strpos( $sitename, '//www.' );


			if ( $www ) {
				$sitename = substr( $sitename, 4 );
			}


			if ( $_SERVER['HTTPS'] && $www ) {
				$sitename = substr( $sitename, 5 );
			}
		} else {
			$sitename = MAIL_DOMAIN;
		}


		$from_email = MAIL_CONTACT . '@' . $sitename;

		var_dump($from_email); die;
		return $from_email;
	}

	add_filter( 'wp_mail_from_name', 'thfo_chg_from' );
	function thfo_chg_from() {
		$from_name = get_bloginfo( 'name' );

		return $from_name;
	}