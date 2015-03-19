/**
 * scripts.js
 *
 * General site scripts
 */

jQuery( document ).ready( function( $ ) {

    //Navigation
    $(document).on('click', '.menu-toggle, .menu-close', function() {
        $('.main-navigation').toggleClass('toggled');
    });

});
