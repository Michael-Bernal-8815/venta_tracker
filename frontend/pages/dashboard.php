<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/header_styles.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <section class="vh-100 d-flex">
        <div class="container-custom d-flex">
            <!-- Menú Lateral -->
            <nav class="nav flex-column">
                <img src="../assets/images/user-avatar.png" alt="Usuario" class="img-fluid rounded-circle mb-3" style="width: 80px;">
                <strong class="text-center">Administrador</strong>
                <p class="text-center">a20300077@ceti.mx</p>
                <a class="nav-link" href="#" onclick="loadContent('today_des.php', this)">Seguimiento de hoy</a>  <!-- Este es el que estamos haciendo. -->
                <a class="nav-link" href="#" onclick="loadContent('', this)">Ignorar por ahora</a>
                <a class="nav-link" href="https://console.firebase.google.com/project/bdalaina-8ed75/authentication/users">Usuarios</a>
                <a class="nav-link" href="#" onclick="loadContent('', this)">Ignorar por ahora</a>
            </nav>
        <section class="panel-contents">
            <!-- Contenido -->
                <div class="content-area flex-grow-1">
                    <h1 class="text-center" style= color: #FFFFFF !important;>Bienvenido al Dashboard</h1>
                    <div id="content"></div> <!-- Aquí se cargará el contenido -->
                </div>
            </div>
        </section>
    </section>

    <script src="../scripts/header.js" defer></script>
    <script>

    function loadContent(page, link) {
        fetch(page)
            .then(response => response.text())
            .then(data => {
                document.getElementById('content').innerHTML = data;

                // Remover clase 'active' de todos los enlaces
                const links = document.querySelectorAll('.nav-link');
                links.forEach(link => link.classList.remove('active'));

                // Agregar clase 'active' al enlace actual
                link.classList.add('active');
            })
            .catch(error => {
                document.getElementById('content').innerHTML = '<p>Error al cargar el contenido.</p>';
            });
        }

    </script>
</body>
    <link href="../styles/dashboard_styles.css" rel="stylesheet">
</html>
