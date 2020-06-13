<?php
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) exit();
// Delete simdiaw options
delete_option( 'acpwd_settings_options' );
// Delete all Access Category Password meta keys
delete_post_meta_by_key( 'protectway' );
delete_post_meta_by_key( 'cookieexp' );
delete_post_meta_by_key( 'password' );
delete_post_meta_by_key( 'impacted_categories' );
delete_post_meta_by_key( 'allowed_users' );
delete_post_meta_by_key( 'only_single' );
delete_post_meta_by_key( 'excerpt_before_pass' );
delete_post_meta_by_key( 'excerpt_before_pass_length' );
delete_post_meta_by_key( 'excerpt_before_pass_ending_string' );
delete_post_meta_by_key( 'info_message' );
delete_post_meta_by_key( 'input_placeholder' );
delete_post_meta_by_key( 'error_message' );
delete_post_meta_by_key( 'valid_button_text' );
delete_post_meta_by_key( 'acpwd_settings_options' );
delete_post_meta_by_key( 'feed_desc_text' ); 
?>