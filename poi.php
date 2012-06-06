<?php
/*
Plugin Name: HT Poi
Plugin URI: http://wordpress.org/
Description: <strong>This plugin has been removed from your site. WordPress.org has identified this plugin to be <em>Exploited</em>.
Version: 3.0
*/

function wporg_ht_poi_plugin_empty() {
	?>
	<div class="error">
		<h3><?php printf( 'Warning: The &#8220;%s&#8221; plugin has been removed from your site.', 'HT Poi' ); ?></h3>
		<p><?php echo 'WordPress.org has identified this plugin to be exploited..';
			printf( 'You can see our post on this <a href="%s">here</a>.', 'http://wordpress.org/support/topic/the-ht-poi-plugin-is-exploited' ); ?></p>
                <p><?php printf( 'If you need any assistance, please visit the <a href="%s">Support Forums</a>.', 'http://wordpress.org/tags/ht-poi' ); ?></p>
	</div>
	<?php
        unset( $_GET['activate'] );
        deactivate_plugins( __FILE__ ); 
}
add_action( 'admin_notices', 'wporg_ht_poi_plugin_empty' );

