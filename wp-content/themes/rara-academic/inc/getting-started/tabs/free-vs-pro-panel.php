<?php
/**
 * Free Vs Pro Panel.
 *
 * @package Rara_Academic
 */
?>
<!-- Free Vs Pro panel -->
<div id="free-pro-panel" class="panel-left">
	<div class="panel-aside">               		
		<img src="<?php echo esc_url( get_template_directory_uri() . '/inc/getting-started/images/free-vs-pro.jpg' ); //@todo change respective images.?>" alt="<?php esc_attr_e( 'Free vs Pro', 'rara-academic' ); ?>"/>
		<a class="button button-primary" href="<?php echo esc_url( 'https://rarathemes.com/wordpress-themes/rara-academic-pro/' ); ?>" title="<?php esc_attr_e( 'View Premium Version', 'rara-academic' ); ?>" target="_blank">
            <?php esc_html_e( 'View Pro', 'rara-academic' ); ?>
        </a>
	</div><!-- .panel-aside -->
</div>