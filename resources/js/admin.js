import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
/* Cargar imagenes y fuentes en vite */
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
// Script para mantener el foco activo en el módulo seleccionado
const links = document.querySelectorAll('aside nav ul li a');

links.forEach(link => {
    link.addEventListener('click', function (event) {
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

//Sidebar
document.querySelector("[data-collapse-toggle='dropdown-users']").addEventListener("click", function () {
    const dropdown = document.getElementById("dropdown-users");
    dropdown.classList.toggle("hidden");
});