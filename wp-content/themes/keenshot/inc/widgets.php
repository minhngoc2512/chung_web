<?php
/**
 * Keenshot Widget Areas
 * 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package Keenshot
 */

function keenshot_widgets_init(){    
    $sidebars = array(
        'sidebar'   => array(
            'name'        => __( 'Sidebar', 'keenshot' ),
            'id'          => 'sidebar', 
            'description' => __( 'Manage your sidebar widgets','keenshot')
        ),

        'instagram'   => array(
            'name'        => __( 'Footer', 'keenshot' ),
            'id'          => 'instagram', 
            'description' => __( 'Manage your instagram photo', 'keenshot' ),
            'before_widget' => '<div class="widgets">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title">
            <h3>',
            'after_title'  =>  '</h3>
            <div class="stylish-border"></div>
        </div>',
        ),
        'woocommerce-sidebar'   => array(
            'name'        => __( 'Woocommerce Sidebar', 'keenshot' ),
            'id'          => 'woocommerce-sidebar', 
            'description' => __( 'Manage your sidebar widgets','keenshot')
        ),
    );

    $i=0;
    foreach( $sidebars as $sidebar ){
        $i++;
        if ( class_exists( 'WooCommerce' ) ) {
            $check = 1;
           
            if($i == 3){
                if($check == 1){
                    register_sidebar( array(
                        'name'          => esc_html( $sidebar['name'] ),
                        'id'            => esc_attr( $sidebar['id'] ),
                        'description'   => esc_html( $sidebar['description'] )
                    ) );
                    break;
                }
            }
        }   
            if($i == 3)  break;

            register_sidebar( array(
                'name'          => esc_html( $sidebar['name'] ),
                'id'            => esc_attr( $sidebar['id'] ),
                'description'   => esc_html( $sidebar['description'] )
            ) );
        }
    
}
add_action( 'widgets_init', 'keenshot_widgets_init' );