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
