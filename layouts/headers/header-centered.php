<nav class="center-align">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">ogtheme</a>
    </div>
</nav>
<nav class="center-align">
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="hide-on-med-and-down">
            <li><a href="/index.php">Home</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Portfolio<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Blog<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="/components.php">Components</a></li>
            <li><a href="/charts.php">Charts</a></li>
            <li><a href="/events.php">Events</a></li>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="/portfolio/grid-2-columns.php">2 Column Grid</a></li>
                <li><a href="/portfolio/masonry-3-columns.php">3 Column Masonry</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="/blog/blog-single-column.php">Single Column</a></li>
                <li><a href="/blog/blog-masonry-2-columns.php">2 Column Masonry</a></li>
            </ul>
            <li>
                <select id="theme-switcher">
                    <option value="">Default</option>
                    <option value="/css/themes/red.css">Red</option>
                    <option value="/css/themes/blue.css">Blue</option>
                    <option value="/css/themes/green.css">Green</option>
                    <option value="/css/themes/purple.css">Purple</option>
                </select>
            </li>
            <li>
                <div class="switch">
                    <label>
                        Light
                        <input type="checkbox" id="dark-mode-toggle">
                        <span class="lever"></span>
                        Dark
                    </label>
                </div>
            </li>
        </ul>
    </div>
</nav>
