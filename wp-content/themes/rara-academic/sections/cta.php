<?php 
/**
 * CTA Section
 * 
 * @package Rara_Academic
*/ 

$section_title   = get_theme_mod( 'rara_academic_cta_section_title' );
$section_content = get_theme_mod( 'rara_academic_cta_section_description' );
$button_label    = get_theme_mod( 'rara_academic_cta_section_button_label' );
$button_link     = get_theme_mod( 'rara_academic_cta_section_button_link' );

if( $section_title || $section_content || $button_label || $button_link ){
?>     

<section class="viewer-section">
    <div class="container">
        
        <div class="text">
			
			<?php
            
                if( $section_title ) echo '<h6 class="apply-title">' . esc_html( $section_title ) . '</h6>';
            
                if( $section_content ) echo wpautop( wp_kses_post( $section_content ) );
              	
			?>
		
		</div>
        
        <?php
        
            if( $button_label && $button_link ){
                echo '<a href="' . esc_url( $button_link ) . '" class="apply" target="_blank">' . esc_html( $button_label ) . '</a>';                        
            }
            
        ?>
        
    </div>
</section>    

<?php
}