const productos = [
  { nombre: "Samsung Galaxy A10", precio: 1500 },
  { nombre: "iPhone 11", precio: 4500 },
  { nombre: "Motorola G10", precio: 1700 },
  { nombre: "Xiaomi Redmi 9", precio: 1900 }
];

const ventas = [];

function inicializarCombobox() {
  const cmb = document.getElementById("producto");
  if (!cmb) return; // Evita error si no está aún

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
  if (!lista) return;

  lista.innerHTML = "";

  ventas.forEach((venta) => {
    const item = document.createElement("li");
    item.textContent = `${venta.producto} - ${venta.cantidad} x $${venta.precioUnitario} = $${venta.total}`;
    lista.appendChild(item);
  });
}

function enviarJSON() {
  const jsonVentas = JSON.stringify(ventas, null, 2);
  console.log("JSON enviado a carpeta virtual:");
  console.log(jsonVentas);
}
