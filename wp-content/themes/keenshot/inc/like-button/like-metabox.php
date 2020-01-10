<?php

/*******************************
 * Add / show metabox
*******************************/

function keenshot_add_like_metabox() {

   $keenshot_show_on = array('post');
   if(in_array(get_post_type(), $keenshot_show_on)){

      add_meta_box(
         'like_metabox',
         'Likes',
         'keenshot_render_like_metabox',
         get_post_type(),
         'side',
         'low'
      );

   }

}

add_action('add_meta_boxes', 'keenshot_add_like_metabox');



/*******************************
 * Render the metabox
*******************************/

function keenshot_render_like_metabox(){
   global $post;
   $keenshot_likers = get_post_meta($post->ID, '_likers', true);
   $keenshot_likes_count = get_post_meta($post->ID, '_likes_count', true);

   wp_nonce_field(__FILE__, 'wp_nonce');
   ?>
   <p>
      <label for="likers"><?php esc_html_e('IP address array of the likers:', 'keenshot'); ?></label>
      <textarea name="_likers" id="likers" class="widefat"><?php echo esc_html($keenshot_likers,'keenshot'); ?></textarea>
   </p>
   <p>
      <label for="likes_count"><?php esc_html_e('Likes count:', 'keenshot'); ?></label>
      <input type="text" name="_likes_count" id="likes_count" class="widefat" value="<?php echo esc_attr($keenshot_likes_count,'keenshot'); ?>" />
   </p>
   <?php
}

/*******************************
 * Save the metabox
*******************************/

function keenshot_save_like_metabox(){
   global $post;
   error_reporting(0);

   if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;

   if(wp_verify_nonce(isset($_POST['wp_nonce']), __FILE__)){
      if(isset($_POST['_likers']) || isset($_POST['_likes_count'])){
        
         update_post_meta($post->ID, '_likers', sanitize_text_field( wp_unslash( $_POST['_likers'] )));
         
         update_post_meta($post->ID, '_likes_count', sanitize_text_field( wp_unslash( $_POST['_likes_count'] )));
      }
   }
}

add_action('save_post', 'keenshot_save_like_metabox');
?>