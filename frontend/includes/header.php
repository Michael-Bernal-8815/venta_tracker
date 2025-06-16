<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/header_styles.css" rel="stylesheet">
    <script async src="https://cse.google.com/cse.js?cx=063f29de0e83c4622"></script>
    <div class="header-container">
        <div class="logo">
            <a href="https://alaina.group8a.site/index.php">
                <img src="../assets/images/logo.png" alt="Alaina icon">
                <img src="../assets/images/alaina_title.png" alt="Alaina text" height="30">
            </a>
            <div class="menu-toggle" onclick="toggleMenu()">
                <img src="../assets/images/menu_icon.png" alt="Menu" height="30">
            </div>
        </div>
        <nav class="navigation">
            <a href="../pages/index.php#about">Sobre nosotros</a>
            <a href="../pages/index.php#stats">Estadísticas</a>
            <a href="../pages/index.php#screenshots">Fotos</a>
            <a href="../pages/index.php#faq">FAQ</a>
            <a href="../pages/index.php#contact">Contáctanos</a>
        </nav>

        <div class="action-buttons">
            <div class="search-container">
                <span class="search-icon" onclick="toggleSearch()">
                    <img src="../assets/images/lupa_search.png" alt="Buscar" class="lupa_s">
                </span>
                <form id="search-form" action="search_results.php" method="get" onsubmit="return validateSearch()">
                    <input type="text" name="q" class="search-input" placeholder="Buscar" spellcheck="false" required>
                    <span class="close-icon" onclick="clearSearch()">×</span>
                </form>
            </div>
            <span class="language-icon">
                <a href="../pages/index.php#footer" class="world_le_link">
                    <img src="../assets/images/world_len.png" alt="world_le" class="world_le">
                </a>
            </span>

            <script>
                const user = JSON.parse(localStorage.getItem('user'));
                const logoutButton = `<button class="btn-ingresar" id="logout-button">Salir</button>`;
                const dashboardButton = `<button class="btn-descargar" onclick="location.href='dashboard.php'">Dashboard</button>`;
                const downloadButton = `<button class="btn-descargar" onclick="location.href='../pages/index.php#download'">Comprar</button>`;
                const loginButton = `<button class="btn-ingresar" onclick="location.href='../pages/login.php'">Ingresar</button>`;

                if (user) {
                    document.write(logoutButton);
                    document.write(user.role === 'admin' ? dashboardButton : downloadButton);
                } else {
                    document.write(loginButton);
                    document.write(downloadButton);
                }
            </script>
        </div>
    </div>

    <div class="mobile-menu">
        <nav class="mobile-navigation">
            <a href="../pages/index.php#about">Sobre la App</a>
            <a href="../pages/index.php#stats">Estadísticas</a>
            <a href="../pages/index.php#screenshots">Capturas</a>
            <a href="../pages/index.php#faq">FAQ</a>
            <a href="../pages/index.php#contact">Contáctanos</a>

            <div class="search-container">
                <span class="search-icon" onclick="toggleSearch()">
                    <img src="../assets/images/lupa_search.png" alt="Buscar" class="lupa_s">
                </span>
                <form id="search-form" action="search_results.php" method="get" onsubmit="return validateSearch()">
                    <input type="text" name="q" class="search-input" placeholder="Buscar" spellcheck="false" required>
                    <span class="close-icon" onclick="clearSearch()">×</span>
                </form>
            </div>
            <div class="mobile-action-buttons">
                <span class="language-icon">
                    <img src="../assets/images/world_len.png" alt="world_le" class="world_le">
                </span>
                <script>
                    if (user) {
                        document.write(logoutButton);
                        document.write(user.role === 'admin' ? dashboardButton : downloadButton);
                    } else {
                        document.write(loginButton);
                        document.write(downloadButton);
                    }
                </script>
            </div>
        </nav>
    </div>
</header>

<script src="../scripts/header.js" defer></script>
