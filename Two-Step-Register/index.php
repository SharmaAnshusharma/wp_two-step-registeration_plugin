<?php
/*Plugin Name: Two Step Registeration
Plugin URI:
Author: Anshu Sharma
version:1.1
description:This is two step registeration form*/

/*Add CSS Files*/

   /*Add Css Files*/
 	wp_enqueue_style('bootstrap-grid',plugins_url('Two-Step-Register','' ) .'/css/bootstrap-grid.css');
	wp_enqueue_style('bootstrap-grid.min',plugins_url('Two-Step-Register','' ).'/css/bootstrap-grid.min.css');
	wp_enqueue_style('bootstrap-reboot',plugins_url('Two-Step-Register','' ).'/css/bootstrap-reboot.css');
	wp_enqueue_style('bootstrap-reboot.min',plugins_url('Two-Step-Register','' ).'/css/bootstrap-reboot.min.css');
	wp_enqueue_style('bootstrap',plugins_url('Two-Step-Register','' ).'/css/bootstrap.css');

	/*Add js Files*/

	wp_enqueue_script('bootstrap.bundle',plugins_url('Two-Step-Register','' ).'/js/bootstrap.bundle.js');
	wp_enqueue_script('bootstrap.bundle.min',plugins_url('Two-Step-Register','' ).'/js/bootstrap.bundle.min.js');
	wp_enqueue_script('bootstrap',plugins_url('Two-Step-Register','' ).'/js/bootstrap.js');
	wp_enqueue_script('bootstrap.min',plugins_url('Two-Step-Register','' ).'/js/bootstrap.min.js');
	wp_enqueue_script('jquery',plugins_url('Two-Step-Register','' ).'/js/jquery.js');

define('CUSTOM_PLUGIN_DIR',plugin_dir_path(__FILE__));

function wp_plugin_menu()
{
	add_menu_page("Register","Register","manage_options","wp-register-step-1-slug","callback_function_menu");
	add_menu_page("","","manage_options","wp-register-step-2-slug","callback_function_step_2");

}
add_action("admin_menu","wp_plugin_menu");

function callback_function_menu()
{
	include_once CUSTOM_PLUGIN_DIR. '/templates/step-1.php';
}
function callback_function_step_2()
{
	include_once CUSTOM_PLUGIN_DIR . '/templates/step-2.php';
}

wp_enqueue_script("jQuery");
function firstStep()
{
	session_start();
	$_SESSION['user_data'] = $_POST;
	if (!empty($_SESSION['user_data'])) {
		echo json_encode(array('status'=>'OK','data'=>$_SESSION['user_data']));
		wp_die();
	}
}
add_action("wp_ajax_secondStep","secondStep");

function secondStep(){
	global $wpdb;
	session_start();
	$Qualification =  $_POST['Qualification'];

	$query = $wpdb->insert('wp_register',
		array(
			"Name"=>$_SESSION['user_data']['name'],
			"Email"=>$_SESSION['user_data']['email'],
			"Mobile"=>$_SESSION['user_data']['mobile'],
			"Address"=>$_SESSION['user_data']['Address'],
			"Qualification"=>$Qualification
		)
	);	

	if($query== true)
	{
		echo "Data Inserted Successfully!";
	}
	else
	{
		echo "Faild To Insert Data";
	}
	wp_die();
}
add_action("wp_ajax_firstStep","firstStep");




?>



