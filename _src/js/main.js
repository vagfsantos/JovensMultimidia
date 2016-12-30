
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