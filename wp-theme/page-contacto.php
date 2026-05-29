<?php
// ============================================
// JOYAS KM - page-contacto.php
// Template Name: Contacto
// ============================================
get_header();
?>

<!-- ========== HERO CONTACTO ========== -->
<section class="contacto-hero">
  <div class="contacto-hero-bg" style="background-image: url('https://joyaskm.cl/wp-content/uploads/2025/04/Shop-hero.jpg')"></div>
  <div class="contacto-hero-overlay"></div>
  <div class="contacto-hero-content">
    <p class="section-tag">Estamos para ayudarte</p>
    <h1 class="contacto-hero-title">Contactanos</h1>
    <p class="contacto-hero-sub">Respondemos en menos de 2 horas en horario de atencion</p>
  </div>
</section>

<!-- ========== CANALES ========== -->
<section class="contacto-canales">
  <div class="canales-grid">

    <a href="https://wa.me/56945460876" class="canal-card canal-wa" target="_blank" rel="noopener">
      <div class="canal-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
      </div>
      <h3>WhatsApp</h3>
      <p>+56 9 4546 0876</p>
      <span class="canal-badge">Respuesta inmediata</span>
    </a>

    <a href="mailto:joyeriaskm@gmail.com" class="canal-card canal-email">
      <div class="canal-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      </div>
      <h3>Correo</h3>
      <p>joyeriaskm@gmail.com</p>
      <span class="canal-badge">Respuesta en 24 hrs</span>
    </a>

    <div class="canal-card canal-tienda">
      <div class="canal-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </div>
      <h3>Tienda Fisica</h3>
      <p>Mall Arauco Estacion Local 1065</p>
      <span class="canal-badge">Lun-Dom 10:00-19:00</span>
    </div>

  </div>
</section>

<!-- ========== FORMULARIO Y MAPA ========== -->
<section class="contacto-body">
  <div class="contacto-body-inner">

    <div class="contacto-form-col">
      <p class="section-tag">Escribenos</p>
      <h2 class="contacto-form-title">Envianos un mensaje</h2>
      <p class="contacto-form-desc">Completa el formulario y te responderemos a la brevedad.</p>

      <div class="contacto-form" id="contacto-form">
        <div class="form-row">
          <div class="form-group">
            <label class="form-label" for="nombre">Nombre completo</label>
            <input type="text" id="nombre" class="form-input" placeholder="Tu nombre" />
          </div>
          <div class="form-group">
            <label class="form-label" for="telefono">Telefono</label>
            <input type="tel" id="telefono" class="form-input" placeholder="+56 9 xxxx xxxx" />
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="email">Correo electronico</label>
          <input type="email" id="email" class="form-input" placeholder="tucorreo@gmail.com" />
        </div>
        <div class="form-group">
          <label class="form-label" for="tipo">Tipo de consulta</label>
          <select id="tipo" class="form-select">
            <option value="">Selecciona una opcion</option>
            <option value="compra">Consulta de compra</option>
            <option value="talla">Consulta de talla</option>
            <option value="mantenimiento">Servicio de mantenimiento</option>
            <option value="pedido">Estado de pedido</option>
            <option value="otro">Otro</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label" for="mensaje">Mensaje</label>
          <textarea id="mensaje" class="form-textarea" rows="5" placeholder="Cuentanos en que podemos ayudarte..."></textarea>
        </div>
        <button class="btn-enviar" id="btn-enviar">Enviar Mensaje</button>
        <div class="form-exito" id="form-exito">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
          Mensaje enviado. Te responderemos pronto.
        </div>
      </div>
    </div>

    <div class="contacto-info-col">
      <p class="section-tag">Ubicacion</p>
      <h2 class="contacto-form-title">Visitanos</h2>
      <div class="contacto-mapa">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.7!2d-70.6789!3d-33.4569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c4b9e9a7e9e3%3A0x1234567890abcdef!2sMall%20Arauco%20Estaci%C3%B3n!5e0!3m2!1ses!2scl!4v1234567890"
          width="100%"
          height="300"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Ubicacion Joyas KM - Mall Arauco Estacion"
        ></iframe>
      </div>
      <div class="contacto-info-items">
        <div class="info-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <div>
            <strong>Direccion</strong>
            <span>Mall Arauco Estacion, Local 1065<br>Estacion Central, Santiago</span>
          </div>
        </div>
        <div class="info-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <div>
            <strong>Horario</strong>
            <span>Lunes a Domingo<br>10:00 a 19:00 hrs</span>
          </div>
        </div>
        <div class="info-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
          <div>
            <strong>Medios de pago</strong>
            <span>Transbank · Webpay Plus<br>Transferencia bancaria</span>
          </div>
        </div>
        <div class="info-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
          <div>
            <strong>Envios</strong>
            <span>Chilexpress a todo Chile<br>2 a 5 dias habiles</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>