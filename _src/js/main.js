$(function(){
    "use strict";
});
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
window.addEventListener('DOMContentLoaded', function(){
    
    var body = document.querySelector('body');
    var openMenu = document.querySelector('.js-header__open-secondary');
    var drop = document.querySelector('.c-header__secondary-drop');

    openMenu.addEventListener('click', function(){
        drop.classList.add('js--active');
        
        setTimeout(function(){
           body.addEventListener('click', whenMenuOpened, false);
        }, 0);
        
        
    },false);
    
    
    function whenMenuOpened(e){
        var elem = e.target.closest('.c-header__secondary-drop');
        
        if( !elem ){
            drop.classList.remove('js--active');
        }
        
        body.removeEventListener('click', whenMenuOpened, false);
    }
    
}, false);

(function (ELEMENT) {
	if (typeof ELEMENT.matches != 'function') {
		ELEMENT.matches = ELEMENT.msMatchesSelector || ELEMENT.mozMatchesSelector || ELEMENT.webkitMatchesSelector ||
			function (selector) {
				var element = this,
						elements = (element.document || element.ownerDocument).querySelectorAll(selector),
						index = 0;

				while (elements[index] && elements[index] !== element) ++index;

				return !!elements[index];
			};
	}

	if (typeof ELEMENT.closest != 'function') ELEMENT.closest = function (selector) {
		var node = this;

		while (node && node.nodeType != 11) {
			if (node.matches(selector)) return node;
			else node = node.parentElement;
		}

		return null;
	};
})(Element.prototype);
$(document).ready(function(){
    $('.m-banner-main').slick({
        arrows: false,
        dots: true
    });
});
//function ellipsizeTextBox(className) {
//    var el = document.querySelectorAll(className);
//    var time = 0;
//    
//    for (var i = 0; i < el.length; i++)(function(currentElement){
//        setTimeout(function(){
//            var wordArray = currentElement.innerHTML.split(' ');
//            while(currentElement.scrollHeight > currentElement.offsetHeight) {
//                wordArray.pop();
//                currentElement.innerHTML = wordArray.join(' ') + '...';
//            }
//
//            time += 100;
//        }, time);
//    })(el[i]);
//}

window.addEventListener('DOMContentLoaded', function(){
    //ellipsizeTextBox('.js-truncate-text');
}, false);