import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
/* Cargar imagenes y fuentes en vite */
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
// DarkMode
document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const html = document.documentElement; // Cambia a document.documentElement

    // Función para aplicar el modo oscuro
    const applyDarkMode = (isDarkMode) => {
        if (isDarkMode) {
            html.classList.add('dark'); // Cambia a html
            darkModeToggle.classList.add('active');
        } else {
            html.classList.remove('dark'); // Cambia a html
            darkModeToggle.classList.remove('active');

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

// User Avatar
const userMenuButton = document.getElementById('user-menu-button');
const userDropdown = document.getElementById('user-dropdown');
userMenuButton.addEventListener('click', function () {
    const isExpanded = userMenuButton.getAttribute('aria-expanded') === 'true';
    userMenuButton.setAttribute('aria-expanded', !isExpanded);
    userDropdown.classList.toggle('hidden');
});
window.addEventListener('click', function (event) {
    // Si el clic no fue en el botón ni en el menú, ocultar el menú
    if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
        userDropdown.classList.add('hidden');
    }
});

//Users Dropdown SideBar
const buttonDropdownUsersSidebar = document.getElementById('button-dropdown-users-sidebar');
const dropdownUsersSideBar = document.getElementById('dropdown-users-side-bar');
buttonDropdownUsersSidebar.addEventListener('click', function () {
    dropdownUsersSideBar.classList.toggle('hidden');
});

//hamburder button SideBar
const hamburderButton = document.getElementById('hamburder-button');
const sidebar = document.getElementById('sidebar');
hamburderButton.addEventListener('click', function () {
    sidebar.classList.toggle('translate-x-0');
});

// Input Change Avatar User
const input = document.getElementById('image');
const fileNameDisplay = document.getElementById('file_name');
if (input) {
    input.addEventListener('change', function () {
        if (input.files.length > 0) {
            const fileName = input.files[0].name;
            fileNameDisplay.textContent = `Archivo seleccionado: ${fileName}`;
        } else {
            fileNameDisplay.textContent = "No se ha seleccionado ningún archivo";
        }
    });
}
