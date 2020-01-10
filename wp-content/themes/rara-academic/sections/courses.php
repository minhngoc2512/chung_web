<?php 
/**
 * Courses Section
 * 
 *  @package Rara_Academic
*/

$section_title   = get_theme_mod( 'rara_academic_courses_section_title' );
$section_content = get_theme_mod( 'rara_academic_courses_section_description' );
$post_one        = get_theme_mod( 'rara_academic_popular_course_post_one' );
$post_two        = get_theme_mod( 'rara_academic_popular_course_post_two' );
$post_three      = get_theme_mod( 'rara_academic_popular_course_post_three' );

$course_posts = array( $post_one, $post_two, $post_three );
$course_posts = array_diff( array_unique( $course_posts ), array('') );     

if( $section_title || $section_content || $course_posts ){
?>

<section class="popular-courses">
    <div class="container">        
       
        <?php
        
            if( $section_title ) echo '<h2 class="section-title">' . esc_html( $section_title ) . '</h2>';  
            
            if( $section_content ) echo wpautop( wp_kses_post( $section_content ) );

			$qry = new WP_Query( array( 
                'post_type'           => 'post',
                'posts_per_page'      => -1,
                'post__in'            => $course_posts,
                'orderby'             => 'post__in',
                'ignore_sticky_posts' => true
            ) );

			if( $course_posts && $qry->have_posts() ){ ?>
				<div class="row">
	                <?php while( $qry->have_posts() ){ $qry->the_post(); ?>
							
						<div class="col-3">
							<article class="post">
								<?php 
								    if( has_post_thumbnail() ){ ?>
										<a href="<?php the_permalink(); ?>" class="post-thumbnail">
											  <?php the_post_thumbnail( 'rara-academic-courses-blog' ); ?>
										</a>
								<?php 
								    } ?>
									<header class="entry-header">
										<h3 class="entry-title">
										    <a href="<?php the_permalink(); ?>"><?php the_title() ;?></a>
										</h3>
									</header>

									<div class="entry-content">
										<?php the_excerpt(); ?>
									</div>	
							</article>
						</div>
						
					<?php } 
						wp_reset_postdata(); ?>
				</div>
			<?php } ?>
	</div>

</section>
    
<?php
}