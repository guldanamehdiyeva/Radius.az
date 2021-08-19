const __menuToggleMobileActions = () => {
    if($('.bg-land-header').length) {
        $('body').toggleClass('overflow-h h-100-vh');
    }

    $('.hamburger').toggleClass('is-active');
    $('.js-menu-mobile').toggleClass('left-0');
    $('#js-overlay-body').toggleClass('d-none');
};


console.log('hello');