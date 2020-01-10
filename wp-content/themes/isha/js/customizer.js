/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			jQuery( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			jQuery( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				jQuery( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				jQuery( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				jQuery( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	//Update site link color in real time...
	wp.customize( 'overlay_bg_color', function( value ) {
		value.bind( function( newval ) {
			jQuery('.overlay').append('<style>.overlay:before{background:'+ newval + '!important;}</style>');
		} );
	});

	wp.customize( 'header_bg_color', function( value ) {
		value.bind( function( newval ) {
			jQuery('.header').css('background', newval );
		} );
	});

} )( jQuery );
