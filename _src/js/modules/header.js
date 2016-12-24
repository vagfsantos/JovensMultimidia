window.addEventListener('DOMContentLoaded', function(){
    
    var body = document.querySelector('body');
    var openMenu = document.querySelector('.js-header__open-secondary');
    var drop = document.querySelector('.c-header__secondary-drop');

    openMenu.addEventListener('click', function(){
        drop.classList.toggle('js--active');
        
        body.removeEventListener('click', whenMenuOpened, false);
        
        setTimeout(function(){
           body.addEventListener('click', whenMenuOpened, false);
        }, 0);
        
    },false);
    
    
    function whenMenuOpened(e){
        var elem = e.target.closest('.c-header__secondary-drop');
        
        if( !elem ){
            drop.classList.toggle('js--active');
        }
    }
    
}, false);
