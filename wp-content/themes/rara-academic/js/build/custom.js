jQuery(document).ready( function($) {
	var rtl, mrtl;
    if( rara_academic_data.rtl == '1' ){
        rtl = true;
        mrtl = false;
    }else{
        rtl = false;
        mrtl = true;
    }

    $("#lightSlider").owlCarousel({
        items       : 1,
        margin: 0,
        dots      : true,
        nav: true,
        currentPagerPosition : 'middle',
        mouseDrag : false,
        loop   : true,
        rtl        : rtl
    });
    
    /* Masonry for faq */
    if( $('.page-template-template-home').length > 0 ){
        $('.services .row').imagesLoaded(function(){ 
            $('.services .row').masonry({
                itemSelector: '.col-3',
                isOriginLeft: mrtl
            }); 
        });
    }

    //mobile-menu
    var winWidth = $(window).width();
    if(winWidth < 1025){
        $('.menu-opener').click(function(){
            $('body').addClass('menu-open');

            $('.btn-close-menu').click(function(){
                $('body').removeClass('menu-open');
            });

            $('.overlay').click(function(){
                $('body').removeClass('menu-open');
            });

        });

        $('.main-navigation').prepend('<div class="btn-close-menu">Close Menu</div>');

        $('.main-navigation ul .menu-item-has-children').append('<div class="angle-down"></div>');

        $('.main-navigation ul li .angle-down').click(function(){
            $(this).prev().slideToggle();
            $(this).toggleClass('active');
        });
    }
});