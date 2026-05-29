<?php
// ============================================
// JOYAS KM - page-carrito.php
// Template Name: Carrito
// ============================================
get_header();
?>

<div class="carrito-wrapper">

  <div class="carrito-left">
    <div class="carrito-header">
      <h1 class="carrito-title">Tu Carrito</h1>
      <span class="carrito-count" id="carrito-count">3 productos</span>
    </div>

    <div class="carrito-item" data-id="1" data-precio="529900">
      <div class="item-img-wrap">
        <img src="https://joyaskm.cl/wp-content/uploads/2025/04/Anillo-Catalina-Oro18K-300x300.webp" alt="Anillo Catalina" class="item-img" loading="lazy" />
      </div>
      <div class="item-info">
        <p class="item-material">Oro 18K</p>
        <h3 class="item-name">Anillo Catalina con Piedra Cuadrada</h3>
        <p class="item-precio">$529.900</p>
        <div class="item-talla">
          <label class="talla-label">Talla del dedo:</label>
          <select class="talla-select">
            <option value="">Seleccionar talla</option>
            <?php
            $tallas = array(
              8=>47, 9=>49, 10=>51, 11=>52, 12=>54, 13=>55,
              14=>57, 15=>58, 16=>60, 17=>62, 18=>63, 19=>65,
              20=>67, 21=>68, 22=>70, 23=>71, 24=>73, 25=>75,
              26=>76, 27=>78, 28=>80, 29=>81, 30=>83
            );
            foreach ( $tallas as $num => $circ ) :
            ?>
            <option value="<?php echo esc_attr( $num ); ?>"><?php echo esc_html( $num . ' - ' . $circ . 'mm' ); ?></option>
            <?php endforeach; ?>
          </select>
          <a href="<?php echo esc_url( home_url( '/#guia-tallas' ) ); ?>" class="talla-ayuda" target="_blank">No se mi talla</a>
        </div>
      </div>
      <div class="item-actions">
        <div class="item-qty">
          <button class="qty-btn qty-minus">-</button>
          <span class="qty-val">1</span>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <button class="item-remove">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4h6v2"/></svg>
        </button>
      </div>
    </div>

  </div>

  <div class="carrito-right">
    <div class="envio-calc">
      <h3 class="resumen-title">Calcular Envio</h3>
      <p class="envio-desc">Ingresa tu region para calcular el costo de envio por Chilexpress.</p>
      <select class="envio-select" id="envio-region">
        <option value="">Selecciona tu region</option>
        <option value="rm">Region Metropolitana</option>
        <option value="v">Region de Valparaiso</option>
        <option value="vi">Region del Libertador</option>
        <option value="vii">Region del Maule</option>
        <option value="viii">Region del Biobio</option>
        <option value="ix">Region de La Araucania</option>
        <option value="x">Region de Los Lagos</option>
        <option value="xi">Region de Aysen</option>
        <option value="xii">Region de Magallanes</option>
        <option value="i">Region de Tarapaca</option>
        <option value="ii">Region de Antofagasta</option>
        <option value="iii">Region de Atacama</option>
        <option value="iv">Region de Coquimbo</option>
        <option value="xiv">Region de Los Rios</option>
        <option value="xv">Region de Arica</option>
      </select>
      <button class="btn-calcular" id="btn-calcular-envio">Calcular</button>
      <div class="envio-resultado" id="envio-resultado"></div>
    </div>

    <div class="resumen-box">
      <h3 class="resumen-title">Resumen del Pedido</h3>
      <div class="resumen-linea">
        <span>Subtotal</span>
        <span id="subtotal">$529.900</span>
      </div>
      <div class="resumen-linea" id="linea-envio" style="display:none">
        <span>Envio Chilexpress</span>
        <span id="costo-envio">$0</span>
      </div>
      <div class="resumen-linea resumen-total">
        <span>Total</span>
        <span id="total">$529.900</span>
      </div>
      <div class="talla-alerta" id="talla-alerta">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        Recuerda seleccionar la talla para cada anillo o argolla antes de continuar.
      </div>
      <button class="btn-checkout" id="btn-checkout">Finalizar Compra</button>
      <p class="resumen-nota">Pagos seguros con Transbank - Webpay Plus</p>
    </div>
  </div>

</div>

<?php get_footer(); ?>