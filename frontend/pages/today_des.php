<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Seguimiento de Ventas</title>
  <style>
    
  </style>
</head>
<body>

  <div class="left">
    <h2>Registro de Ventas</h2>

    <div class="field">
      <label for="producto">Producto:</label>
      <select id="producto" onchange="actualizarPrecio()">
        <option value="">-- Selecciona un producto --</option>
      </select>
    </div>

    <div class="field">
      <label for="precio">Precio:</label>
      <input type="number" id="precio" readonly>
    </div>

    <div class="field">
      <label for="cantidad">Cantidad:</label>
      <input type="number" id="cantidad" min="1" value="1">
    </div>

    <button onclick="agregarVenta()">Agregar Venta</button>

    <h3>Ventas del Día</h3>
    <ul id="listaVentas"></ul>
  </div>

  <div class="right">
    <!-- Aquí irá la calculadora -->
  </div>

  <script>
    // Puedes editar esta lista como gustes
    const productos = [
      { nombre: "Samsung Galaxy A10", precio: 1500 },
      { nombre: "iPhone 11", precio: 4500 },
      { nombre: "Motorola G10", precio: 1700 },
      { nombre: "Xiaomi Redmi 9", precio: 1900 }
    ];

    const ventas = [];

    window.onload = function() {
      const cmb = document.getElementById("producto");
      productos.forEach((producto, index) => {
        let option = document.createElement("option");
        option.value = index;
        option.textContent = producto.nombre;
        cmb.appendChild(option);
      });
    }

    function actualizarPrecio() {
      const idx = document.getElementById("producto").value;
      if (idx !== "") {
        document.getElementById("precio").value = productos[idx].precio;
      } else {
        document.getElementById("precio").value = "";
      }
    }

    function agregarVenta() {
      const idx = document.getElementById("producto").value;
      const cantidad = parseInt(document.getElementById("cantidad").value);

      if (idx === "" || isNaN(cantidad) || cantidad <= 0) {
        alert("Por favor selecciona un producto y una cantidad válida.");
        return;
      }

      const producto = productos[idx];
      const venta = {
        producto: producto.nombre,
        precioUnitario: producto.precio,
        cantidad: cantidad,
        total: producto.precio * cantidad
      };

      ventas.push(venta);
      actualizarListaVentas();
      enviarJSON();
    }

    function actualizarListaVentas() {
      const lista = document.getElementById("listaVentas");
      lista.innerHTML = "";

      ventas.forEach((venta, index) => {
        const item = document.createElement("li");
        item.textContent = `${venta.producto} - ${venta.cantidad} x $${venta.precioUnitario} = $${venta.total}`;
        lista.appendChild(item);
      });
    }

    function enviarJSON() {
      const jsonVentas = JSON.stringify(ventas, null, 2);
      
      // Simulación de envío: lo puedes ver en consola
      console.log("JSON enviado a carpeta virtual:");
      console.log(jsonVentas);

      // Si vas a usar un backend en el futuro, aquí puedes usar fetch/AJAX
    }
  </script>

</body>
</html>
