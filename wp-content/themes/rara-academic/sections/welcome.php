<?php   
/**
 * Welcome Section
 * 
 *  @package Rara_Academic
*/

$welcome_post = get_theme_mod( 'rara_academic_welcome_post' );
$read_more    = get_theme_mod( 'rara_academic_welcome_read_more', __( 'Read More', 'rara-academic' ) );

$qry = new WP_Query( "p=$welcome_post" );        
        
if( $welcome_post && $qry->have_posts() ){
    while( $qry->have_posts() ){
        $qry->the_post(); ?>
        <section class="welcome-section">
            <div class="container">
				<div class="row">
                <?php 
				    if(has_post_thumbnail()){
                        echo '<div class="col-2">';
                            the_post_thumbnail( 'rara-academic-welcome' );
                        echo '</div>';
					}
                    ?>
					<div class="col-2">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<?php the_excerpt();
                        if( $read_more ){ ?>
    						<a href="<?php the_permalink(); ?>" class="watch-link">
    						   <?php echo esc_html( $read_more ); ?>
    						</a>
                        <?php } ?>
					</div>
				</div>
			</div>
        </section>
        <?php 
    }
    wp_reset_postdata(); 
}                