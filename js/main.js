document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {});

    const themeSwitcher = document.getElementById('theme-switcher');
    const themeStylesheet = document.getElementById('theme-stylesheet');
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeStylesheet = document.getElementById('dark-mode-stylesheet');

    if (themeSwitcher) {
        themeSwitcher.addEventListener('change', function() {
            themeStylesheet.href = this.value;
        });
    }

    if (darkModeToggle) {
        darkModeToggle.addEventListener('change', function() {
            darkModeStylesheet.disabled = !this.checked;
        });
    }
});
