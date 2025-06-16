// Inicializar ScrollReveal
ScrollReveal().reveal('.hero-text', {
    duration: 1000,
    origin: 'left',
    distance: '50px',
    opacity: 0,
});

ScrollReveal().reveal('.hero-image', {
    duration: 1000,
    origin: 'right',
    distance: '50px',
    opacity: 0,
});

window.addEventListener('scroll', function() {
    const hero = document.querySelector('.hero-section');
    const heroText = document.querySelector('.hero-text');
    const heroImage = document.querySelector('.hero-image');

    const scrollPos = window.scrollY;
    const windowHeight = window.innerHeight;

    // Reduce la opacidad según el scroll
    hero.style.opacity = 1 - scrollPos / windowHeight;

    // Aplica la transformación de tamaño y desplazamiento solo en altura
    hero.style.transform = `translateY(${scrollPos * 0.05}px) scaleY(${1 - scrollPos / windowHeight * 0.5})`;
    heroText.style.transform = `translateY(${scrollPos * 0.05}px) scaleY(${1 - scrollPos / windowHeight * 0.5})`;
    heroImage.style.transform = `translateY(${scrollPos * 0.05}px) scaleY(${1 - scrollPos / windowHeight * 0.5})`;
});
