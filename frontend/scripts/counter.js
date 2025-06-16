const counters = document.querySelectorAll('.counter');
const speed = 60;
let hasStarted = false; // pa q solo se ejecute una vez

const updateCount = (counter) => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;
    const increment = target / speed;

    if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(() => updateCount(counter), 20);
    } else {
        counter.innerText = target;
    }
};

const handleIntersection = (entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !hasStarted) {
            counters.forEach(counter => updateCount(counter));
            hasStarted = true; // Evitar que la animación se ejecute más de una vez
        }
    });
};


const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.5 // ajustar la visibilidad
});

// observar la sección
const statsSection = document.querySelector('#stats');
observer.observe(statsSection);
