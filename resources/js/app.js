import './bootstrap';

/* Cargar imagenes y fuentes en vite */
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

document.getElementById('night-mode-toggle').addEventListener('click', function () {
  document.documentElement.classList.toggle('dark');
});
