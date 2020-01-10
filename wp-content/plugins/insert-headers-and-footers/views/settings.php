<div class="wrap">
    <h2><?php echo $this->plugin->displayName; ?> &raquo; <?php esc_html_e( 'Settings', 'insert-headers-and-footers' ); ?></h2>

    <?php
    if ( isset( $this->message ) ) {
        ?>
        <div class="updated fade"><p><?php echo $this->message; ?></p></div>
        <?php
    }
    if ( isset( $this->errorMessage ) ) {
        ?>
        <div class="error fade"><p><?php echo $this->errorMessage; ?></p></div>
        <?php
    }
    ?>

    <div id="poststuff">
    	<div id="post-body" class="metabox-holder columns-2">
    		<!-- Content -->
    		<div id="post-body-content">
				<div id="normal-sortables" class="meta-box-sortables ui-sortable">
	                <div class="postbox">
	                    <h3 class="hndle"><?php esc_html_e( 'Settings', 'insert-headers-and-footers' ); ?></h3>

	                    <div class="inside">
		                    <form action="options-general.php?page=<?php echo $this->plugin->name; ?>" method="post">
		                    	<p>
		                    		<label for="ihaf_insert_header"><strong><?php esc_html_e( 'Scripts in Header', 'insert-headers-and-footers' ); ?></strong></label>
		                    		<textarea name="ihaf_insert_header" id="ihaf_insert_header" class="widefat" rows="8" style="font-family:Courier New;"><?php echo $this->settings['ihaf_insert_header']; ?></textarea>
		                    		<?php esc_html_e( 'These scripts will be printed in the <code>&lt;head&gt;</code> section.', 'insert-headers-and-footers' ); ?>
		                    	</p>
		                    	<p>
		                    		<label for="ihaf_insert_footer"><strong><?php esc_html_e( 'Scripts in Footer', 'insert-headers-and-footers' ); ?></strong></label>
		                    		<textarea name="ihaf_insert_footer" id="ihaf_insert_footer" class="widefat" rows="8" style="font-family:Courier New;"><?php echo $this->settings['ihaf_insert_footer']; ?></textarea>
		                    		<?php esc_html_e( 'These scripts will be printed above the <code>&lt;/body&gt;</code> tag.', 'insert-headers-and-footers' ); ?>
		                    	</p>
		                    	<?php wp_nonce_field( $this->plugin->name, $this->plugin->name . '_nonce' ); ?>
		                    	<p>
									<input name="submit" type="submit" name="Submit" class="button button-primary" value="<?php esc_html_e( 'Save', 'insert-headers-and-footers' ); ?>" />
								</p>
						    </form>
	                    </div>
	                </div>
	                <!-- /postbox -->
				</div>
				<!-- /normal-sortables -->
    		</div>
    		<!-- /post-body-content -->

    		<!-- Sidebar -->
    		<div id="postbox-container-1" class="postbox-container">
    			<?php require_once( $this->plugin->folder . '/views/sidebar.php' ); ?>
    		</div>
    		<!-- /postbox-container -->
    	</div>
	</div>
</div>