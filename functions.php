<?php
/**
* @package WordPress
*/
function wpbootstrap_scripts_with_jquery(){
	//Register the script like this for a theme:
	wp_register_script('custom-script', get_template_directory_uri().'/bootstrap/js/bootstrap.js', array('jquery'));

	//For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_script', 'wpbootstrap_scripts_with_jquery');
/* 
** 启动侧边栏小插件
*/
if( function_exists('register_sidebar')){
	register_sidebar(array(
		'before_widget'=>' ',
		'after_widget'=>' ',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',
	));
}
/*
** 添加后台自定义菜单功能 
*/
add_theme_support('nav_menus');
?>
