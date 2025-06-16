<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../includes/header.php'; ?> 
    <link href="../styles/header_styles.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/styles.css" rel="stylesheet"> 
    <!-- Scripts  Firebase -->
    <script type="module" src="../scripts/firebase.js"></script>
    <script type="module" src="../scripts/script.js"></script>
    <!-- Otros Scripts (Como efectos)-->
    <script type="module" src="../scripts/counter.js"></script>
    <script type="module" src="../scripts/carrusel.js"></script>
</head>

<body>
    <!-- Sección Hero -->
<section id="hero" class="hero-section" style="background: url('../assets/images/hero-bg.jpg') no-repeat center center;">
    <div class="container-top d-flex align-items-center justify-content-between py-5">
        <!-- Contenido a la izquierda -->
        <div class="hero-text">
            <h1 class="display-4 font-weight-bold">¡Adquiere tu próximo smartphone aquí!</h1>
            <p class="lead">Alisson Store es la mejor tienda para adquirir tu smartphone y accesorios de la mejor calidad y precio.</p>
            <a href="#about" class="btn btn-primary">Saber Más</a>
            <a href="../pages/index.php#download" class="btn btn-secondary">Comprar</a>
        </div>
        <!-- Imagen a la derecha -->
        <div class="hero-image">
            <img id="heroImage" src="../assets/images/herocell.png" alt="Imagen de Alaina" class="img-fluid">
        </div>
    </div>
</section>

    <!-- Sección Sobre Alaina -->
    <section id="about" class="about-section py-5">
        <div class="about-container">
            </br>
            <h2 class="about-title">Encuéntranos</h2>
            <hr class="separator">
            <div class="about-content">
                <img src="../assets/images/buscar.jpg" alt="Descripción de la imagen" class="about-image">
                <div class="about-text">
                    <p>En nuestra tienda encuentras los modelos más recientes de las ultimas marcas, así como también algunos modelos antiguos para quienes buscan uno en específico, estos pueden variar según la sucursal. Encuéntranos en:</p>
                    <p>Ubicaciones.</p>
                <ul>
                    <li><strong>Cto. Loma Nte. 8961, Loma Dorada Delegación C, 45418 Tonalá, Jal.</strong> De todo tipo. </li>
                    <li><strong>C. Nueva Escocia 1885, Providencia 5a Secc, 44638 Guadalajara, Jal.</strong> Especial enfoque en marca Apple.</li>
                </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Estadísticas -->
    <section id="stats" class="stats-section bg-light py-5">
        <div class="stats-section">
        <div class="image-container">
            <img src="../assets/images/stadistic.jpg" alt="App Image">
            <div class="play-button">
                <i class="fas fa-play-circle"></i>
            </div>
        </div>
        <div class="stats-container">
            <div class="stat-box">
                <i class="fas fa-download"></i>
                <h3><span class="counter" data-target="56">0</span></h3>
                <p>Teléfonos vendidos en el mes</p>
            </div>
            <div class="stat-box">
                <i class="fas fa-trophy"></i>
                <h3><span class="counter" data-target="327">0</span></h3>
                <p>Teléfonos vendidos en el año</p>
            </div>
            <div class="stat-box">
                <i class="fas fa-users"></i>
                <h3><span class="counter" data-target="1366">0</span></h3>
                <p>Visitas al sitio</p>
            </div>
            <div class="stat-box">
                <i class="fas fa-thumbs-up"></i>
                <h3><span class="counter" data-target="44">0</span></h3>
                <p>Reseñas positivas.</p>
            </div>
        </div>
    </div>
    </section>
    <!-- Sección de Capturas de Pantalla -->
    <section id="screenshots" class="screenshots-section py-5">
        </br>
        <h2 class="sh-title">Fotos de muestra.</h2>
        <hr class="separator-2">
        <div class="carousel">
            <button class="arrow left" onclick="moveSlide(-1)">&#10094;</button>
        <div class="slides-container">
            <div class="slide current">
                <img src="../assets/images/screenshots/img1.jpeg" alt="Screenshot 1">
            </div>
            <div class="slide">
                <img src="../assets/images/screenshots/img2.jpeg" alt="Screenshot 2">
            </div>
            <div class="slide">
                <img src="../assets/images/screenshots/img3.jpeg" alt="Screenshot 3">
            </div>
            </div>
            <button class="arrow right" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </section>
<!-- Sección Preguntas Frecuentes -->
<section id="faq" class="faq-section py-5">
    <div class="faq-container">
        </br>
        <h2 class="faq-title">Preguntas Frecuentes</h2>
        <hr class="separator">
        <div class="faq-content">
            <img src="../assets/images/home-screen.png" alt="Descripción de la imagen" class="faq-image">
            <div class="faq-questions">
                <div class="faq">
                    <button class="faq-question" onclick="toggleFAQ(this)">¿Como encuentro un celular?</button>
                    <div class="faq-answer">
                        <p>Usa la barra de busqueda que se encuentra en top arriba con el simbolo de la lupa.</p>
                    </div>
                </div>
                <div class="faq">
                    <button class="faq-question" onclick="toggleFAQ(this)">¿Qué es e-commerce?</button>
                    <div class="faq-answer">
                        <p>Es la compra y venta de bienes y servicios a través de internet. Implica la realización de transacciones comerciales online, donde clientes y vendedores interactúan digitalmente para adquirir productos o servicios. </p>
                    </div>
                </div>
                <div class="faq">
                    <button class="faq-question" onclick="toggleFAQ(this)">¿Donde se encuentra la tienda fisica?</button>
                    <div class="faq-answer">
                        <p>Consulta la seccion "Encuentranos".</p>
                    </div>
                </div>
                <div class="faq">
                    <button class="faq-question" onclick="toggleFAQ(this)">¿Como puedo efectuar los pagos?</button>
                    <div class="faq-answer">
                        <p>En el boton de compra usando Paypal o tarjeta, o asiste a una tienda fisica para pagar con efectivo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Sección Blogs Más Recientes -->
    <section id="recent-blogs" class="blogs-section py-5">
        <div class="container">
            <h2>Blogs Más Recientes</h2>
            <p>Aquí aparecerán los blogs recientes.</p>
        </div>
    </section>
    <!-- Sección Contáctanos -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <h2>Contáctanos</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Dirección de Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input type="text" class="form-control" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </br>
        <div class="col-lg-4">
            <div class="tm-contact-content">
                <div class="tm-contact-block">
                    <span class="tm-contact-block-icon">
                        <i class="zmdi zmdi-pin"></i>
                    </span>
                    <div class="tm-contact-block-content">
                        <h6>Address</h6>
                        <p>100 Santa Monica Boulevard Los Angeles, California</p>
                    </div>
                </div>
                <div class="tm-contact-block">
                    <span class="tm-contact-block-icon">
                        <i class="zmdi zmdi-phone-in-talk"></i>
                    </span>
                    <div class="tm-contact-block-content">
                        <h6>Telefonos</h6>
                        <p><a href="tel:+01234222555">(+01) - 234 222 555</a></p>
                        <p><a href="tel:+01234222666">(+01) - 234 333 666</a></p>
                    </div>
                </div>
                <div class="tm-contact-block">
                    <span class="tm-contact-block-icon">
                        <i class="zmdi zmdi-email"></i>
                    </span>
                    <div class="tm-contact-block-content">
                        <h6>Email</h6>
                        <p><a href="mailto:info@example.com">alissonstore@gmail.com</a></p>
                        <p><a href="mailto:info2@example.com">alissonstore@hotmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de Llamada a la Acción Final -->
    <section id="download" class="download-section text-center py-5">
        <div class="container">
            <h2>Compra ahora!</h2>
            <a href="#" class="btn btn-primary">Pasa por el a la tienda</a>
            <a href="#" class="btn btn-primary">Envienlo a mi casa</a>
        </div>
    </section>
    <?php include '../includes/footer.php'; ?> 
</body>
    <script src="https://unpkg.com/scrollreveal@4.0.9/dist/scrollreveal.js"></script>
    <script src="../scripts/scroll_reveal.js" defer></script>
    <script type="module" src="../scripts/toggleFaq.js"></script>
</html>
