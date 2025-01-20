document.addEventListener("DOMContentLoaded", function() {
    /**
     * A reference to the DOM element with the ID 'loader'.
     * @type {HTMLElement}
     */
    var loader = document.getElementById('loader');
    loader.style.transition = 'opacity 1.5s ease';

    window.addEventListener('load', function() {
        loader.style.opacity = '0';
        setTimeout(function() {
            loader.style.display = 'none';
        }, 1500); 
    });
});