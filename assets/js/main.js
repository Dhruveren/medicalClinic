 document.addEventListener('DOMContentLoaded', function () {
    // Only apply hover dropdown on desktop
    const dropdowns = document.querySelectorAll('.navbar .dropdown');
    if (window.innerWidth >= 992) {
      dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
          const menu = dropdown.querySelector('.dropdown-menu');
          if (menu) menu.classList.add('show');
        });
        dropdown.addEventListener('mouseleave', () => {
          const menu = dropdown.querySelector('.dropdown-menu');
          if (menu) menu.classList.remove('show');
        });
      });
    }
  });