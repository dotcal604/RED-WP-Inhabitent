jQuery(document).ready(function($) {

    $('.main-navigation').find('.search-field').hide();

    $('.search-submit-hideShow').on('click', function() {
        $('.main-navigation').find('.search-field').animate({'width': 'toggle'});
        $('.main-navigation').find('.search-field').focus();
        return false;
    });

    $('.search-field').on('')

    $('.main-navigation').find('.search-field').on('focusout', function () {
        if(!$(this).find('.search-field').val()) {
            $('.main-navigation').find('.search-field').animate({'width': 'toggle'});
        } 
    });

});