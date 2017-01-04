function ellipsizeTextBox(className) {
    var el = document.querySelectorAll(className);
    var time = 0;
    
    for (var i = 0; i < el.length; i++)(function(currentElement){
        setTimeout(function(){
            var wordArray = currentElement.innerHTML.split(' ');
            while(currentElement.scrollHeight > currentElement.offsetHeight) {
                wordArray.pop();
                currentElement.innerHTML = wordArray.join(' ') + '...';
            }

            time += 100;
        }, time);
    })(el[i]);
        
    
    
    
    console.log('truncating')
}

window.addEventListener('DOMContentLoaded', function(){
    ellipsizeTextBox('.js-truncate-text');
}, false);