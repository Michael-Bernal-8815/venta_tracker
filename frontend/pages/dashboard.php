<!-- HTML ACTUALIZADO -->
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
        <nav class="nav flex-column p-3 border-right bg-light" style="width: 250px;">
            <img src="../assets/images/user-avatar.png" alt="Usuario" class="img-fluid rounded-circle mb-3" style="width: 80px;">
            <strong class="text-center">Administrador</strong>
            <p class="text-center">a20300077@ceti.mx</p>
            <a id="seguimiento-btn" class="nav-link" href="#">Seguimiento de hoy</a>
            <a class="nav-link" href="#">Ignorar por ahora</a>
            <a class="nav-link" href="#">Usuarios</a>
            <a class="nav-link" href="#">Ignorar por ahora</a>
        </nav>

        <section class="panel-contents flex-grow-1 p-4">
            <!-- Contenido -->
            <div class="content-area">
                <h1 class="text-center text-white">Bienvenido al Dashboard</h1>
                <div id="content"></div>
            </div>
        </section>
    </div>
</section>

<script>
document.getElementById('seguimiento-btn').addEventListener('click', function () {
    const modelos = {
        "iPhone 13": 18000,
        "Samsung Galaxy S21": 15000,
        "Xiaomi Redmi Note 12": 7000,
        "Motorola G73": 6500
    };

    const formHtml = `
        <div class="card p-4">
            <h4>Registrar venta</h4>
            <form id="ventaForm">
                <div class="form-group">
                    <label for="producto">Producto</label>
                    <select class="form-control" id="producto" name="producto">
                        ${Object.keys(modelos).map(m => `<option value="${m}">${m}</option>`).join('')}
                    </select>
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <select class="form-control" id="precio" name="precio" disabled>
                        ${Object.values(modelos).map(p => `<option value="${p}">${p} MXN</option>`).join('')}
                    </select>
                </div>

                <div class="form-group">
                    <label for="unidades">Unidades</label>
                    <input type="number" class="form-control" id="unidades" name="unidades" min="1" value="1" required>
                </div>

                <div class="form-group">
                    <label for="metodo">Método de pago</label>
                    <select class="form-control" id="metodo" name="metodo">
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta">Tarjeta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Total a pagar: <strong id="total"></strong></label>
                </div>

                <button type="submit" class="btn btn-primary">Guardar venta</button>
            </form>
        </div>
    `;

    document.getElementById('content').innerHTML = formHtml;

    const producto = document.getElementById('producto');
    const precio = document.getElementById('precio');
    const unidades = document.getElementById('unidades');
    const total = document.getElementById('total');

    function actualizarPrecioYTotal() {
        const selected = producto.value;
        const precioUnitario = modelos[selected];
        const cantidad = parseInt(unidades.value) || 1;
        precio.innerHTML = `<option>${precioUnitario} MXN</option>`;
        total.innerText = (precioUnitario * cantidad) + ' MXN';
    }

    producto.addEventListener('change', actualizarPrecioYTotal);
    unidades.addEventListener('input', actualizarPrecioYTotal);
    actualizarPrecioYTotal();

    document.getElementById('ventaForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const datos = {
            producto: producto.value,
            precio: modelos[producto.value],
            unidades: parseInt(unidades.value),
            metodo_pago: document.getElementById('metodo').value,
            fecha: new Date().toISOString().split('T')[0]
        };

        fetch('../scripts/guardar_venta.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(datos)
        })
        .then(res => res.ok ? alert('Venta guardada correctamente') : alert('Error al guardar venta'))
        .catch(err => console.error('Error:', err));
    });
});
</script>

<script src="../scripts/header.js" defer></script>
<link href="../styles/dashboard_styles.css" rel="stylesheet">
</body>
</html>
