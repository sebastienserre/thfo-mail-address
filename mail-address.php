<?php

/*
Plugin Name: mail-adress
Plugin URI: http://ww.thivinfo.com
Description: Mu-Plugin to change default wordpress@example.com
Version: 1.0
Author: sebastienserre
Author URI: http://ww.thivinfo.com
License: GPL2
*/

add_filter('wp_mail_from','thfo_chg_mail');

function thfo_chg_mail(){
	$sitename = strtolower( $_SERVER['SERVER_NAME'] );
//	$sitename = substr($sitename, 4); // need to uncomment if www. present
	$from_email = 'contact@' . $sitename;
	return $from_email;
}

add_filter('wp_mail_from_name','thfo_chg_from');
function thfo_chg_from(){
	$from_name = get_bloginfo('name');
	return $from_name;
}