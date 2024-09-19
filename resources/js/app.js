import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';

/* Cargar imagenes y fuentes en vite */
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

document.addEventListener('DOMContentLoaded', () => {
  const darkModeToggle = document.getElementById('dark-mode-toggle');
  const html = document.documentElement; // Cambia a document.documentElement

  // Función para aplicar el modo oscuro
  const applyDarkMode = (isDarkMode) => {
    if (isDarkMode) {
      html.classList.add('dark'); // Cambia a html
    } else {
      html.classList.remove('dark'); // Cambia a html
    }
  };

  // Verifica la preferencia guardada en localStorage
  const darkMode = localStorage.getItem('dark-mode') === 'true';
  applyDarkMode(darkMode);

  // Maneja el cambio de modo oscuro
  if (darkModeToggle) {
    darkModeToggle.addEventListener('click', () => {
      const isDarkMode = !html.classList.contains('dark'); // Cambia a html
      applyDarkMode(isDarkMode);
      localStorage.setItem('dark-mode', isDarkMode);
    });
  }
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

  label.addEventListener('click', function () {
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

// Script para mantener el foco activo en el módulo seleccionado
const links = document.querySelectorAll('aside nav ul li a');

links.forEach(link => {
    link.addEventListener('click', function(event) {
        // Elimina el estilo activo de todos los enlaces
        links.forEach(l => l.classList.remove('bg-gray-700'));

        // Agrega el estilo activo solo al enlace seleccionado
        link.classList.add('bg-gray-700');
    });
});

// Script para el menú hamburguesa
const menuToggle = document.getElementById('menuToggle');
const sidebar = document.getElementById('sidebar');
const sidebarText = document.querySelectorAll('.sidebar-text');
const sidebarTitle = document.getElementById('sidebarTitle');

menuToggle.addEventListener('click', () => {
    // Alterna entre mostrar/ocultar los textos de los elementos del sidebar
    sidebar.classList.toggle('w-64'); // Cambia el ancho del sidebar
    sidebarText.forEach(text => text.classList.toggle('hidden')); // Muestra/Oculta los textos
    sidebarTitle.classList.toggle('hidden'); // Muestra/Oculta el título del sidebar

    // Actualiza el estado aria-expanded
    const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', !isExpanded);
});