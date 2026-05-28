// ============================================
// JOYAS KM - carrito.js
// ============================================

document.addEventListener('DOMContentLoaded', () => {

  // ---- TARIFAS CHILEXPRESS POR REGION ----
  const tarifasEnvio = {
    rm:   { nombre: 'Region Metropolitana', precio: 3990 },
    v:    { nombre: 'Region de Valparaiso', precio: 4990 },
    vi:   { nombre: 'Region del Libertador', precio: 4990 },
    vii:  { nombre: 'Region del Maule', precio: 4990 },
    viii: { nombre: 'Region del Biobio', precio: 4990 },
    ix:   { nombre: 'Region de La Araucania', precio: 5990 },
    x:    { nombre: 'Region de Los Lagos', precio: 5990 },
    xiv:  { nombre: 'Region de Los Rios', precio: 5990 },
    xi:   { nombre: 'Region de Aysen', precio: 7990 },
    xii:  { nombre: 'Region de Magallanes', precio: 7990 },
    i:    { nombre: 'Region de Tarapaca', precio: 5990 },
    ii:   { nombre: 'Region de Antofagasta', precio: 5990 },
    iii:  { nombre: 'Region de Atacama', precio: 5990 },
    iv:   { nombre: 'Region de Coquimbo', precio: 4990 },
    xv:   { nombre: 'Region de Arica', precio: 6990 }
  };

  // ---- FORMATO PRECIO ----
  const formatPrecio = (num) => {
    return '$' + num.toLocaleString('es-CL');
  };

  // ---- CALCULAR ENVIO ----
  const btnCalcular = document.getElementById('btn-calcular-envio');
  const selectRegion = document.getElementById('envio-region');
  const resultadoEnvio = document.getElementById('envio-resultado');
  const lineaEnvio = document.getElementById('linea-envio');
  const costoEnvioSpan = document.getElementById('costo-envio');

  let costoEnvioActual = 0;

  if (btnCalcular) {
    btnCalcular.addEventListener('click', () => {
      const region = selectRegion.value;

      if (!region) {
        resultadoEnvio.className = 'envio-resultado visible con-costo';
        resultadoEnvio.textContent = 'Por favor selecciona tu region.';
        return;
      }

      const tarifa = tarifasEnvio[region];
      costoEnvioActual = tarifa.precio;

      resultadoEnvio.className = 'envio-resultado visible con-costo';
      resultadoEnvio.innerHTML = `
        Envio a <strong>${tarifa.nombre}</strong><br>
        Costo: <strong>${formatPrecio(tarifa.precio)}</strong><br>
        <small>Despacho a sucursal Chilexpress mas cercana · 2 a 5 dias habiles</small>
      `;

      lineaEnvio.style.display = 'flex';
      costoEnvioSpan.textContent = formatPrecio(costoEnvioActual);
      actualizarTotal();
    });
  }

  // ---- CALCULAR SUBTOTAL ----
  const calcularSubtotal = () => {
    let subtotal = 0;
    document.querySelectorAll('.carrito-item').forEach(item => {
      const precio = parseInt(item.dataset.precio) || 0;
      const qty = parseInt(item.querySelector('.qty-val').textContent) || 1;
      subtotal += precio * qty;
    });
    return subtotal;
  };

  // ---- ACTUALIZAR TOTALES ----
  const actualizarTotal = () => {
    const subtotal = calcularSubtotal();
    const total = subtotal + costoEnvioActual;
    document.getElementById('subtotal').textContent = formatPrecio(subtotal);
    document.getElementById('total').textContent = formatPrecio(total);
    actualizarContador();
  };

  // ---- ACTUALIZAR CONTADOR ----
  const actualizarContador = () => {
    const count = document.querySelectorAll('.carrito-item').length;
    const contador = document.getElementById('carrito-count');
    if (contador) {
      contador.textContent = count === 1 ? '1 producto' : `${count} productos`;
    }
  };

  // ---- BOTONES CANTIDAD ----
  document.querySelectorAll('.carrito-item').forEach(item => {

    const btnMinus = item.querySelector('.qty-minus');
    const btnPlus = item.querySelector('.qty-plus');
    const qtyVal = item.querySelector('.qty-val');

    if (btnMinus) {
      btnMinus.addEventListener('click', () => {
        let qty = parseInt(qtyVal.textContent);
        if (qty > 1) {
          qtyVal.textContent = qty - 1;
          actualizarTotal();
        }
      });
    }

    if (btnPlus) {
      btnPlus.addEventListener('click', () => {
        let qty = parseInt(qtyVal.textContent);
        qtyVal.textContent = qty + 1;
        actualizarTotal();
      });
    }

    // ---- BOTON ELIMINAR ----
    const btnRemove = item.querySelector('.item-remove');
    if (btnRemove) {
      btnRemove.addEventListener('click', () => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-20px)';
        item.style.transition = 'all 0.3s ease';
        setTimeout(() => {
          item.remove();
          actualizarTotal();
          // Si no quedan productos mostrar mensaje
          const items = document.querySelectorAll('.carrito-item');
          if (items.length === 0) {
            const carritoLeft = document.querySelector('.carrito-left');
            carritoLeft.innerHTML = `
              <div class="carrito-vacio">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#e8e4dd" stroke-width="1"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                <h2>Tu carrito esta vacio</h2>
                <p>Agrega productos desde nuestra tienda</p>
                <a href="https://joyaskm.cl/tienda/" class="btn-ir-tienda">Ver Coleccion</a>
              </div>
            `;
          }
        }, 300);
      });
    }
  });

  // ---- VALIDAR TALLAS AL FINALIZAR ----
  const btnCheckout = document.getElementById('btn-checkout');
  const alertaTalla = document.getElementById('talla-alerta');

  if (btnCheckout) {
    btnCheckout.addEventListener('click', () => {
      let tallasOk = true;

      document.querySelectorAll('.carrito-item').forEach(item => {
        const select = item.querySelector('.talla-select');
        if (select && select.value === '') {
          tallasOk = false;
          select.classList.add('talla-requerida');
          select.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else if (select) {
          select.classList.remove('talla-requerida');
        }
      });

      if (!tallasOk) {
        alertaTalla.classList.add('visible');
        return;
      }

      alertaTalla.classList.remove('visible');
      // Redirigir al checkout de WooCommerce
      window.location.href = 'https://joyaskm.cl/finalizar-compra/';
    });
  }

  // ---- QUITAR ERROR AL SELECCIONAR TALLA ----
  document.querySelectorAll('.talla-select').forEach(select => {
    select.addEventListener('change', () => {
      select.classList.remove('talla-requerida');
      const hayError = Array.from(
        document.querySelectorAll('.talla-select')
      ).some(s => s.value === '');

      if (!hayError && alertaTalla) {
        alertaTalla.classList.remove('visible');
      }
    });
  });

  // ---- INIT ----
  actualizarTotal();

});