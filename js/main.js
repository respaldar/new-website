function toggleSubmenu(element) {
  // Cerrar todos los submenús abiertos antes de abrir uno nuevo
  const submenu = element.nextElementSibling;

  if (submenu.classList.contains("submenu-open")) {
    // Si el submenú ya está abierto, ciérralo
    submenu.classList.remove("submenu-open");
  } else {
    // Cierra otros submenús y abre el actual
    closeAllSubmenus();
    submenu.classList.add("submenu-open");
  }
}

function closeAllSubmenus() {
  // Seleccionar todos los submenús abiertos
  const openSubmenus = document.querySelectorAll(".submenu-open");

  // Cerrar todos los submenús abiertos eliminando la clase 'submenu-open'
  openSubmenus.forEach((submenu) => {
    submenu.classList.remove("submenu-open");
  });
}

// Añadir un event listener para cerrar el submenú al hacer clic fuera
document.addEventListener("click", function (event) {
  const isClickInside = document
    .querySelector(".submenu")
    .contains(event.target);
  const isClickOnToggle = event.target.closest(".relative.group");

  // Si el clic es fuera del submenú y no es el título del submenú, cierra todos los submenús
  if (!isClickInside && !isClickOnToggle) {
    closeAllSubmenus();
  }
});

// MENU MOBILE
document.getElementById("menu-button").addEventListener("click", function () {
  const nav = document.getElementById("mobile-nav");
  nav.classList.toggle("open"); // Alternar clase 'open' para mostrar/ocultar el menú
});

// Cerrar el menú al hacer clic fuera de él
document.addEventListener("click", function (event) {
  const nav = document.getElementById("mobile-nav");
  const button = document.getElementById("menu-button");

  if (!nav.contains(event.target) && !button.contains(event.target)) {
    nav.classList.remove("open"); // Cerrar el menú
    const submenus = nav.querySelectorAll(".submenu");
    submenus.forEach((submenu) => submenu.classList.remove("open")); // Cerrar submenús
  }
});

// Manejo de submenús
const submenuToggles = document.querySelectorAll(".submenu-toggle");

submenuToggles.forEach((toggle) => {
  toggle.addEventListener("click", function (event) {
    event.preventDefault(); // Evitar el comportamiento por defecto
    const submenu = this.nextElementSibling; // Obtener el submenú correspondiente
    const chevron = this.querySelector(".chevron"); // Obtener el chevron
    const title = this; // El enlace con el título del submenú

    // Alternar la clase 'open' del submenú
    submenu.classList.toggle("open");

    // Cambiar el color del título del submenú
    if (submenu.classList.contains("open")) {
      title.style.color = "#009045"; // Cambiar el color a verde
      chevron.style.transform = "rotate(180deg)"; // Rota el chevron 180 grados
    } else {
      title.style.color = "#fff"; // Volver al color blanco
      chevron.style.transform = "rotate(0deg)"; // Restaurar la rotación del chevron
    }
  });
});
