import './bootstrap';

/* Cargar imagenes y fuentes en vite */
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

document.getElementById('night-mode-toggle').addEventListener('click', function () {
  document.documentElement.classList.toggle('dark');
});


/* Acordeon-opiniones */
document.addEventListener('DOMContentLoaded', function () {
  const accordions = document.querySelectorAll('.accordion .p-5');

  accordions.forEach(acc => {
      acc.addEventListener('click', function () {
          const content = this.nextElementSibling;
          content.classList.toggle('hidden');
          this.querySelector('svg').classList.toggle('rotate-180');
      });
  });
});

/* Js Cursos */
function filterCourses() {
  const category = document.getElementById('category').value;
  const difficulty = document.getElementById('difficulty').value;
  const duration = document.getElementById('duration').value;
  const price = document.getElementById('price').value;
  const rating = document.getElementById('rating').value;

  document.querySelectorAll('.course-card').forEach(card => {
    let show = true;

    if (category !== 'all' && !card.classList.contains(category)) show = false;
    if (difficulty !== 'all' && !card.classList.contains(difficulty)) show = false;
    if (duration !== 'all' && !card.classList.contains(duration)) show = false;
    if (price !== 'all' && !card.classList.contains(price)) show = false;
    if (rating !== 'all' && !card.classList.contains(rating)) show = false;

    card.style.display = show ? 'block' : 'none';
  });
}

/*Opiniones */
document.querySelectorAll('.accordion .contentrBx .label').forEach(label => {
    label.addEventListener('click', function() {
        const contentrBx = this.parentElement;
        
        // Toggle the active class on the clicked item
        contentrBx.classList.toggle('active');
    });
});