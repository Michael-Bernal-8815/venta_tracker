<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/header_styles.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/login_styles.css" rel="stylesheet">
    <title>Iniciar Sesión</title>

    <!-- Importa los scripts de Firebase para autenticación -->
    <script type="module" src="../scripts/firebase.js"></script>
    <script type="module" src="../scripts/auth.js"></script> <!-- Este archivo manejará la lógica de autenticación -->
</head>

<header>
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
            <h5>login<a href="../pages/index.php#"> para volver haz click aqui. <wbr></a></h5>
        </nav>
    </div>

    <div class="mobile-menu">
        <nav class="navigation">
            <h5>Solo para administradores. Para volver haz click <a href="../pages/index.php#">(Aqui)</a></h5>
        </nav>
    </div>

</header>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom d-flex justify-content-center align-items-center">
            <div class="container-custom">
                <div class="image-container d-flex justify-content-center align-items-center">
                    <img src="../assets/images/login_draw1.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="form-container">
                    <form id="login-form"> <!-- Añadido id para el formulario -->
                        <div class="text-center mb-3">
                            <p class="lead fw-normal mb-0">Inicia sesión con</p>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <button type="button" class="btn btn-google btn-social mx-1">
                                <img src="../assets/images/google-icon-PNG.png" alt="Google Icon" class="social-icon2">
                            </button>
                            <button type="button" class="btn btn-facebook btn-social mx-1">
                                <img src="../assets/images/facebook-icon-PNG.png" alt="Facebook Icon" class="social-icon2">
                            </button>
                            <button type="button" class="btn btn-twitter btn-social mx-1">
                                <img src="../assets/images/twitter-icon-PNG.png" alt="Twitter Icon" class="social-icon2">
                            </button>
                        </div>

                        <div class="divider">
                            <p>O</p>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg" placeholder="Ingresa un correo válido" required />
                            <label class="form-label" for="email"> &nbsp Correo electrónico</label> <!-- Cambiado el for -->
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg" placeholder="Ingresa tu contraseña" required />
                            <label class="form-label" for="password"> &nbsp Contraseña</label> <!-- Cambiado el for -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" id="rememberMe" />
                                <label class="form-check-label" for="rememberMe">Recuérdame</label>
                            </div>
                            <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar sesión</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes cuenta? <a href="../pages/register.php" class="link-danger">Regístrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="../scripts/header.js" defer></script>
</body>
</html>
