<?php 
/**
 * Keenshot related post 
 */

function keenshot_related_posts_list( $status, $post_type = 'post' ){

    global $post;
    $args = array(
        'post_type'           => $post_type,
        'posts_status'        => 'publish',
        'ignore_sticky_posts' => true
    );
    
    switch( $status ){

        case 'related':
        $args['posts_per_page'] = 6;
        $args['post__not_in']   = array( $post->ID );
        $args['orderby']        = 'rand';
        $title                  = esc_attr(get_theme_mod( 'related_post_title', __( 'You may also like...', 'keenshot' ) ));
        $class                  = 'related-posts';
        $image_size             = 'keenshot-related';        
        $cats                   = get_the_category( $post->ID );        
        if( $cats ){
            $c = array();
            foreach( $cats as $cat ){
                $c[] = $cat->term_id; 
            }
            $args['category__in'] = $c;
        }        
        break;
    }
    
    $qry = new WP_Query( $args );
    
    if( $qry->have_posts() ){ ?>    
        <div class="<?php echo esc_attr( $class ); ?>">
    		<?php 
            if( $title ){
                if( $status == 'latest' ) echo '<header class="section-header">';
                echo '<h2 class="section-title">' . esc_html( $title ) . '</h2>'; 
                if( $status == 'latest' ) echo '</header>';   		  
    		}  
            ?>
			<div class="post-holder">
                <?php while( $qry->have_posts() ){ $qry->the_post(); ?>
                <div class="col">
    				<a href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php
                            if( has_post_thumbnail() ){
                                the_post_thumbnail('small',array('class'=> 'related-post'));
                            }
                        ?>
                    </a>
                    <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
    			</div>
    			<?php } ?>
            </div><!-- .post-holder -->
    	</div>
        <?php
    wp_reset_postdata();
       }
    }


/**
 * Keenshot Custom Image Size
 */
add_image_size( 'custom-size', 260, 250 );

/**
 * Keenshot Comment Section
 */

function keenshot_get_post_navigation()
{
    if (get_comment_pages_count() > 1 && get_option('page_comments')):
        locate_template( '/sections/comments-nav.php', TRUE, TRUE );
    endif;
}

/**
 * Keenshot Pagination
 */

function keenshot_post_pagination() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    if ( $paged >= 1 )
        $links[] = $paged;
 
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="pagination"><ul>' . "\n";
 
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", esc_url(get_previous_posts_link(),'keenshot') );

    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", esc_html($class,'keenshot'), esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li></li>';
    }
 
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", esc_html($class,'keenshot'), esc_url( get_pagenum_link( $link ) ), esc_html($link,'keenshot') );
    }
 
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li></li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", esc_html($class,'keenshot'), esc_url( get_pagenum_link( $max ) ), esc_html($max,'keenshot') );
    }
 
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", esc_url(get_next_posts_link(),'keenshot') );
 
    echo '</ul></div>' . "\n";
 
}

function keenshot_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="search-form-wraper">
    <input type="text" placeholder="Search Here" value="' . get_search_query() . '" name="s" id="s" />
    <button id="searchsubmit" type="submit"><span class="fa fa-search"></button>
    </div>
    </form>';
    return $form;
}

add_filter( 'get_search_form', 'keenshot_search_form', 100 );

/**
 * Keenshot Custom Header Text Color 
 */
function keenshot_get_header_text_color(){ ?>

    <style type="text/css">
        .header .navbar .navigation .nav.navbar-nav li a{
            color:#<?php echo esc_attr(get_header_textcolor()); ?>;      
          }
    </style>
    <?php 
    
   }
add_action('wp_head','keenshot_get_header_text_color');
