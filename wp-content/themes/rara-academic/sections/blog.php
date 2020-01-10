<?php 
/**
 * Blog Section
 * 
 * @package Rara_Academic
*/   
   
$section_title   = get_theme_mod( 'rara_academic_blog_section_title' );
$section_content = get_theme_mod( 'rara_academic_blog_section_description' );

$qry = new WP_Query( array( 
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => 3,
            'ignore_sticky_posts' => true
        ) );
        
if( $section_title || $section_content || $qry->have_posts() ){ 
?>

<section class="latest-news">
    <div class="container">
    	<?php   
    	    
            if( $section_title ) echo '<h2 class="section-title">' . esc_html( $section_title ) . '</h2>';  
            
            if( $section_content ) echo wpautop( wp_kses_post( $section_content ) );
	    
            if( $qry->have_posts() ): ?>
		
    			<div class="row">
    			
    				<?php while( $qry->have_posts() ){ $qry->the_post(); ?>
    					
    					<div class="col-3">
    						<article class="post">
    							
    							<?php if( has_post_thumbnail() ){ ?>
    						        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
    						          <?php the_post_thumbnail( 'rara-academic-courses-blog' ); ?>
    						        </a>
    				            <?php } ?>
    							
    							<header class="entry-header">
    								<div class="entry-meta">
    									<span class="posted-on"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a></span>
    								</div>
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                                    </h2>
    							</header>
    							
    							<div class="entry-footer">
    								<span class="name"><a href="<?php the_permalink(); ?>"><?php printf( esc_html_x('By %s', 'post author', 'rara-academic'), esc_html( get_the_author())); ?></a></span>
    							</div>
    						
    						</article>
    					</div>
    				
    				<?php }
                    wp_reset_postdata(); ?>
    			</div>
                <?php 
    	    endif;
         ?>
    </div>
</section>

<?php
}