$(function(){
    "use strict";
    
    var $menu = $('.js--main-nav');
    
    $('.js--trigger-menu-mobile')
    .on('click', function(){
        if( $(this).hasClass('is--active') ){
            $(this).text('Menu');
        }else{
            $(this).text('Fechar');
        }
        
        $(this).add($menu).toggleClass('is--active');
        return false;
    });
});