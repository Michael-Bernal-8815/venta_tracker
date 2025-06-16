let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function updateSlides() {
    slides.forEach((slide, index) => {
        if (index === currentSlide) {
            slide.classList.add('current');
        } else {
            slide.classList.remove('current');
        }
    });
}

window.moveSlide = function(direction) { // Asignamos la función al objeto window
    currentSlide += direction;
    if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    } else if (currentSlide >= slides.length) {
        currentSlide = 0;
    }
    updateSlides();
};

setInterval(() => {
    moveSlide(1);
}, 5000); // Cambia de imagen cada 5 segundos

// Actualiza los slides inicialmente
updateSlides();
