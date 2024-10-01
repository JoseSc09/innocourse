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


// Hacer que las funciones estén disponibles globalmente
window.openModal = function (route) {
    const modal = document.getElementById('deleteModal');
    const deleteForm = document.getElementById('deleteForm');

    if (modal && deleteForm) {
        // Mostrar el modal
        modal.style.display = 'flex';

        // Cambiar la acción del formulario para incluir el ID del usuario
        deleteForm.action = route;
    }
}

window.closeModal = function () {
    const modal = document.getElementById('deleteModal');
    if (modal) {
        // Ocultar el modal
        modal.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Acordeón
    const buttons = document.querySelectorAll('.toggle-section');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const sectionId = this.getAttribute('data-section');
            const sectionContent = document.getElementById(sectionId);

            // Alternar entre mostrar y ocultar el contenido con una transición suave
            if (sectionContent.style.maxHeight) {
                sectionContent.style.maxHeight = null;
            } else {
                sectionContent.style.maxHeight = sectionContent.scrollHeight + "px";
            }
        });
    });

    // Modal
    const openModalButtons = document.querySelectorAll('.open-modal');
    const modal = document.getElementById('lessonModal');
    const modalTitle = document.getElementById('modalLessonTitle');
    const modalImage = document.getElementById('modalLessonImage');
    const closeModal = document.getElementById('closeModal');

    openModalButtons.forEach(button => {
        button.addEventListener('click', function () {
            const lessonTitle = this.getAttribute('data-lesson');
            const lessonImageUrl = this.getAttribute('data-content');

            // Mostrar el modal con la información de la lección
            modalTitle.textContent = lessonTitle;
            modalImage.src = lessonImageUrl;
            modal.classList.remove('hidden');
            modal.style.display = 'flex';  // Establecer display en flex para centrar el modal
        });
    });

    if (closeModal) {
        closeModal.addEventListener('click', function () {
            modal.classList.add('hidden');
            modal.style.display = 'none';  // Ocultar el modal al cerrar
        });
    }

    // Cerrar modal al hacer clic fuera del contenido modal
    window.addEventListener('click', function (event) {
        if (event.target == modal) {
            modal.classList.add('hidden');
            modal.style.display = 'none';  // Ocultar el modal al cerrar
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const sectionsContainer = document.querySelector('#sections-container');
    let sectionIndex = document.querySelectorAll('.section').length;
    const sectionsToDeleteInput = document.getElementById('sections_to_delete');
    const lessonsToDeleteInput = document.getElementById('lessons_to_delete');
    let sectionsToDelete = [];
    let lessonsToDelete = [];

    // Función para agregar una nueva sección
    const addSection = () => {
        const sectionHTML = `
            <div class="mb-4 section border-b-2 dark:border-gray-500 border-gray-400">
                <div class="mb-2">
                    <label for="sections[${sectionIndex}][section_name]"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la Sección</label>
                    <input type="text" name="sections[${sectionIndex}][section_name]" id="sections[${sectionIndex}][section_name]"
                        class="block w-full p-2.5 border rounded-lg text-sm text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-600 border-gray-300 dark:border-gray-500">
                </div>
                <div class="lessons-container"></div>
                <button type="button"
                    class="add-lesson py-2.5 text-sm px-5 mb-2.5 text-white bg-yellow-500 hover:bg-yellow-600 font-medium rounded-lg dark:bg-yellow-500 dark:hover:bg-yellow-600">Agregar Lección</button>
                <button type="button" class="delete-section py-2 px-3 mt-2 text-red-600 hover:text-red-700">Eliminar Sección</button>
            </div>
        `;
        sectionsContainer.insertAdjacentHTML('beforeend', sectionHTML);
        sectionIndex++;
    };

    // Función para agregar una nueva lección
    const addLesson = (event) => {
        const lessonsContainer = event.target.previousElementSibling;
        const lessonIndex = lessonsContainer.querySelectorAll('.flex').length;

        const lessonHTML = `
            <div class="flex gap-8 my-2 items-center">
                <label for="sections[${sectionIndex}][lessons][${lessonIndex}][lesson_name]"
                    class="block min-w-16 text-sm font-medium text-gray-900 dark:text-white">Lección</label>
                <input type="text" name="sections[${sectionIndex}][lessons][${lessonIndex}][lesson_name]"
                    id="sections[${sectionIndex}][lessons][${lessonIndex}][lesson_name]"
                    class="block w-full p-2.5 border rounded-lg text-sm text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-600 border-gray-300 dark:border-gray-500">
                <button type="button" class="delete-lesson py-2 px-3 text-red-600 hover:text-red-700">Eliminar</button>
            </div>
        `;
        lessonsContainer.insertAdjacentHTML('beforeend', lessonHTML);
    };

    // Función para eliminar una sección
    const deleteSection = (event) => {
        const sectionDiv = event.target.closest('.section');
        const sectionId = sectionDiv.getAttribute('data-section-id');
        if (sectionId) {
            sectionsToDelete.push(sectionId);
            sectionsToDeleteInput.value = sectionsToDelete.join(',');
        }
        sectionDiv.remove();
    };

    // Función para eliminar una lección
    const deleteLesson = (event) => {
        const lessonDiv = event.target.closest('.flex');
        const lessonId = lessonDiv.getAttribute('data-lesson-id');
        if (lessonId) {
            lessonsToDelete.push(lessonId);
            lessonsToDeleteInput.value = lessonsToDelete.join(',');
        }
        lessonDiv.remove();
    };

    // Event listeners
    const addSectionButton = document.querySelector('#add-section');
    if (addSectionButton) {
        addSectionButton.addEventListener('click', addSection);
    }
    if (sectionsContainer) {
        sectionsContainer.addEventListener('click', (event) => {
            if (event.target.classList.contains('add-lesson')) {
                addLesson(event);
            } else if (event.target.classList.contains('delete-section')) {
                deleteSection(event);
            } else if (event.target.classList.contains('delete-lesson')) {
                deleteLesson(event);
            }
        });
    }
});