import './bootstrap';

/* Cargar imagenes y fuentes en vite */
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

/* Añade la clase dark a la etiqueta html para el modo escuro */
document.getElementById('night-mode-toggle').addEventListener('click', function () {
  document.documentElement.classList.toggle('dark');
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


/* Acordeon-opiniones */
document.querySelectorAll('.accordion .contentrBx').forEach(contentrBx => {
  const label = contentrBx.querySelector('.label');
  const content = contentrBx.querySelector('.content');
  const plusSign = contentrBx.querySelector('.plus-sign');
  const minusSign = contentrBx.querySelector('.minus-sign');

  label.addEventListener('click', function() {
      const isActive = contentrBx.classList.contains('active');

      document.querySelectorAll('.accordion .contentrBx').forEach(otherContentrBx => {
          if (otherContentrBx !== contentrBx) {
              otherContentrBx.classList.remove('active');
              otherContentrBx.querySelector('.content').style.maxHeight = null;
              otherContentrBx.querySelector('.plus-sign').classList.remove('hidden');
              otherContentrBx.querySelector('.minus-sign').classList.add('hidden');
          }
      });

      if (isActive) {
          contentrBx.classList.remove('active');
          content.style.maxHeight = null;
          plusSign.classList.remove('hidden');
          minusSign.classList.add('hidden');
      } else {
          contentrBx.classList.add('active');
          content.style.maxHeight = content.scrollHeight + 'px';
          plusSign.classList.add('hidden');
          minusSign.classList.remove('hidden');
      }
  });
});

//Header Responsive
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.getElementById("nav-menu");

  menuToggle.addEventListener("click", function () {
      navMenu.classList.toggle("hidden");
      navMenu.classList.toggle("flex");
  });
});