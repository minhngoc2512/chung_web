<?php 
/**
 * Notice Section
 * 
 * @package Rara_Academic
*/ 

$section_title   = get_theme_mod( 'rara_academic_notice_section_title' );
$section_content = get_theme_mod( 'rara_academic_notice_section_description' );
$button_label    = get_theme_mod( 'rara_academic_notice_section_button_label' );
$button_link     = get_theme_mod( 'rara_academic_notice_section_button_link' );

if( $section_title || $section_content || $button_label || $button_link ){
?>     

<section class="notice">
    <div class="container">
        <div class="row">
			
			<?php
            
                if( $section_title ) echo '<h2>' . esc_html( $section_title ) . '</h2>';
            
                if( $section_content ) echo '<div class="col-one">' . wpautop( wp_kses_post( $section_content ) ) . '</div>';
                
                if( $button_label && $button_link ){
                    echo '<div class="col-two">';
                    echo '<a href="' . esc_url( $button_link ) . '" class="learn-more" target="_blank">' . esc_html( $button_label ) . '</a>';
                    echo '</div>';        
                }
				
			?>
		
		</div>
    </div>
</section>    

<?php
}