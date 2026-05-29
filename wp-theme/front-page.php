<?php
// ============================================
// JOYAS KM - front-page.php
// ============================================
get_header();
?>

<!-- ========== HERO ========== -->
<section id="hero">
  <div class="hero-left">
    <p class="hero-tag">Mas de 16 anos de tradicion · Santiago, Chile</p>
    <h1 class="hero-title">
      Joyeria en<br>
      <em>Oro y Plata</em>
    </h1>
    <p class="hero-sub">Detalles unicos para momentos inolvidables</p>
    <div class="hero-ctas">
      <a href="<?php echo esc_url( home_url( '/tienda/' ) ); ?>" class="btn-primary">Ver Coleccion</a>
      <a href="<?php echo esc_url( home_url( '/argollas_de_matrimonio' ) ); ?>" class="btn-outline">Argollas de Matrimonio</a>
    </div>
  </div>
  <div class="hero-right">
    <img
      src="https://joyaskm.cl/wp-content/uploads/2026/02/hero-1.new_.webp"
      alt="Joyeria en oro y plata - anillos y pulseras artesanales Joyas KM Santiago"
      class="hero-foto"
      width="800"
      height="417"
      fetchpriority="high"
    />
  </div>
</section>

<!-- ========== CATEGORÍAS ========== -->
<section id="categorias">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-tag">Explorar</p>
        <h2 class="section-title">Nuestra Coleccion</h2>
      </div>
      <a href="<?php echo esc_url( home_url( '/tienda/' ) ); ?>" class="section-link">Ver todo →</a>
    </div>
    <div class="cats-grid">

      <article class="cat-card">
        <a href="<?php echo esc_url( home_url( '/anillos_oro' ) ); ?>" class="cat-link">
          <div class="cat-img-wrap">
            <img src="https://joyaskm.cl/wp-content/uploads/2026/05/categoria-anillos-oro-joyaskm.webp" alt="Coleccion de anillos oro 18K Joyas KM Santiago" loading="lazy" class="cat-img" />
          </div>
          <div class="cat-info">
            <h3 class="cat-name">Anillos</h3>
            <p class="cat-mat">Oro 18K · Plata 925</p>
          </div>
        </a>
      </article>

      <article class="cat-card">
        <a href="<?php echo esc_url( home_url( '/aros_oro/' ) ); ?>" class="cat-link">
          <div class="cat-img-wrap">
            <img src="https://joyaskm.cl/wp-content/uploads/2026/05/categoria-aros-oro-joyaskm-1.webp" alt="Coleccion de aros oro 18K Joyas KM Santiago" loading="lazy" class="cat-img" />
          </div>
          <div class="cat-info">
            <h3 class="cat-name">Aros</h3>
            <p class="cat-mat">Oro 18K · Plata 925</p>
          </div>
        </a>
      </article>

      <article class="cat-card">
        <a href="<?php echo esc_url( home_url( '/argollas_de_matrimonio' ) ); ?>" class="cat-link">
          <div class="cat-img-wrap">
            <img src="https://joyaskm.cl/wp-content/uploads/2026/05/Coleccion-de-argollas-de-matrimonio-oro-18K-Joyas-KM-Santiago.webp" alt="Coleccion de argollas de matrimonio oro 18K Joyas KM Santiago" loading="lazy" class="cat-img" />
          </div>
          <div class="cat-info">
            <h3 class="cat-name">Argollas de Matrimonio</h3>
            <p class="cat-mat">Oro 18K · Plata 925</p>
          </div>
        </a>
      </article>

      <article class="cat-card">
        <a href="<?php echo esc_url( home_url( '/pulseras_oro' ) ); ?>" class="cat-link">
          <div class="cat-img-wrap">
            <img src="https://joyaskm.cl/wp-content/uploads/2026/05/Coleccion-de-pulseras-oro-18K-Joyas-KM-Santiago.webp" alt="Coleccion de pulseras oro 18K Joyas KM Santiago" loading="lazy" class="cat-img" />
          </div>
          <div class="cat-info">
            <h3 class="cat-name">Pulseras</h3>
            <p class="cat-mat">Oro 18K · Plata 925</p>
          </div>
        </a>
      </article>

      <article class="cat-card">
        <a href="<?php echo esc_url( home_url( '/conjunto_oro' ) ); ?>" class="cat-link">
          <div class="cat-img-wrap">
            <img src="https://joyaskm.cl/wp-content/uploads/2026/05/categoria-conjuntos-oro-joyaskm.webp" alt="Coleccion de conjuntos y cadenas oro 18K Joyas KM Santiago" loading="lazy" class="cat-img" />
          </div>
          <div class="cat-info">
            <h3 class="cat-name">Conjuntos y Cadenas</h3>
            <p class="cat-mat">Oro 18K · Plata 925</p>
          </div>
        </a>
      </article>

      <article class="cat-card">
        <a href="<?php echo esc_url( home_url( '/relojes/' ) ); ?>" class="cat-link">
          <div class="cat-img-wrap">
            <img src="https://joyaskm.cl/wp-content/uploads/2026/05/categoria-relojes-casio-joyaskm.webp" alt="Coleccion de relojes Casio dama y caballero Joyas KM Santiago" loading="lazy" class="cat-img" />
          </div>
          <div class="cat-info">
            <h3 class="cat-name">Relojes</h3>
            <p class="cat-mat">Casio · Clasicos</p>
          </div>
        </a>
      </article>

    </div>
  </div>
</section>

<!-- ========== BANNER ARGOLLAS ========== -->
<section id="banner-argollas">
  <div class="banner-content">
    <p class="banner-tag">Coleccion especial</p>
    <h2 class="banner-title">Argollas de<br>Matrimonio</h2>
    <p class="banner-text">Fabricadas a mano en oro 18K o plata 925. Grabado interior personalizado sin costo adicional.</p>
    <a href="<?php echo esc_url( home_url( '/argollas_de_matrimonio' ) ); ?>" class="btn-banner">Ver Catalogo Completo</a>
  </div>
  <div class="banner-img-col">
    <img src="https://joyaskm.cl/wp-content/uploads/2020/08/Anillos2.jpg" alt="Argollas de matrimonio oro 18K" loading="lazy" class="banner-img" />
  </div>
</section>

<!-- ========== BANNER RELOJES ========== -->
<section id="banner-relojes">
  <div class="banner-img-col">
    <img src="https://joyaskm.cl/wp-content/uploads/2026/05/banner-relojes-casio-joyaskm.webp" alt="Relojes Casio dama y caballero Joyas KM Santiago" loading="lazy" class="banner-img" />
  </div>
  <div class="banner-content">
    <p class="banner-tag">Coleccion especial</p>
    <h2 class="banner-title">Relojes</h2>
    <p class="banner-text">Elegancia en tu muñeca. Seleccion de relojes clasicos para hombre y mujer, perfectos para cada ocasion.</p>
    <a href="<?php echo esc_url( home_url( '/relojes/' ) ); ?>" class="btn-banner">Ver Catalogo Completo</a>
  </div>
</section>

<!-- ========== PRODUCTOS RECIENTES ========== -->
<section id="productos-recientes">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-tag">Nuevos</p>
        <h2 class="section-title">Recien Agregados</h2>
      </div>
      <a href="<?php echo esc_url( home_url( '/tienda/' ) ); ?>" class="section-link">Ver todos →</a>
    </div>
    <div class="products-grid">
      <?php
      $args = array(
          'post_type'      => 'product',
          'posts_per_page' => 6,
          'orderby'        => 'date',
          'order'          => 'DESC',
      );
      $productos = new WP_Query( $args );
      if ( $productos->have_posts() ) :
          while ( $productos->have_posts() ) : $productos->the_post();
              global $product;
              ?>
              <article class="product-card">
                <a href="<?php the_permalink(); ?>" class="product-link">
                  <div class="product-img-wrap">
                    <?php if ( $product->is_on_sale() ) : ?>
                      <span class="badge-oferta">Oferta</span>
                    <?php endif; ?>
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail( 'medium', array( 'class' => 'product-img', 'loading' => 'lazy' ) ); ?>
                    <?php endif; ?>
                  </div>
                  <div class="product-info">
                    <h3 class="product-name"><?php the_title(); ?></h3>
                    <?php
                    $product = wc_get_product( get_the_ID() );
                    if ( $product ) :
                    ?>
                    <p class="product-price"><?php echo $product->get_price_html(); ?></p>
                    <?php endif; ?>
                  </div>
                </a>
              </article>
              <?php
          endwhile;
          wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>

<!-- ========== GUÍA DE TALLAS ========== -->
<section id="guia-tallas">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-tag">Nuevo</p>
        <h2 class="section-title">Guia de Tallas</h2>
      </div>
    </div>
    <div class="tallas-grid">
      <div class="tallas-tabla-col">
        <table class="tallas-table">
          <thead>
            <tr>
              <th>Talla Chile</th>
              <th>Circunferencia</th>
              <th>Diametro</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tallas = array(
              array(8,47,15.0), array(9,49,15.6), array(10,51,16.2),
              array(11,52,16.6), array(12,54,17.2), array(13,55,17.5),
              array(14,57,18.2), array(15,58,18.5), array(16,60,19.1),
              array(17,62,19.7), array(18,63,20.1), array(19,65,20.7),
              array(20,67,21.3), array(21,68,21.6), array(22,70,22.3),
              array(23,71,22.6), array(24,73,23.2), array(25,75,23.9),
              array(26,76,24.2), array(27,78,24.8), array(28,80,25.5),
              array(29,81,25.8), array(30,83,26.4),
            );
            foreach ( $tallas as $t ) :
            ?>
            <tr>
              <td><?php echo esc_html( $t[0] ); ?></td>
              <td><?php echo esc_html( $t[1] ); ?> mm</td>
              <td><?php echo esc_html( $t[2] ); ?> mm</td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="tallas-nota">
          <p class="tallas-nota-title">Primera rectificacion sin costo</p>
          <p>Si el anillo no queda perfecto, la primera rectificacion de talla no tiene costo. Escribenos por WhatsApp antes de hacer el pedido.</p>
          <a href="https://wa.me/56945460876" class="btn-banner" target="_blank" rel="noopener">Consultar por WhatsApp</a>
        </div>
      </div>
      <div class="tallas-guia-col">
        <h3 class="tallas-guia-title">Como medir tu dedo</h3>
        <div class="tallas-steps">
          <div class="tallas-step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4>Usa un papel o hilo</h4>
              <p>Envuelve el papel o hilo alrededor de la base del dedo donde usaras el anillo.</p>
            </div>
          </div>
          <div class="tallas-step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4>Marca el punto de union</h4>
              <p> Apuntadonde se juntan los extremos con un lapiz.</p>
            </div>
          </div>
          <div class="tallas-step">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4>Mide con regla</h4>
              <p>Extiende el papel y mide en milimetros. Esa es tu circunferencia.</p>
            </div>
          </div>
          <div class="tallas-step">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4>Busca en la tabla</h4>
              <p>Encuentra tu medida en la columna Circunferencia y listo. Si tienes dudas escribenos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== CUIDADOS ========== -->
<section id="cuidados">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-tag">Consejos</p>
        <h2 class="section-title">Cuidado de tus Joyas</h2>
      </div>
    </div>
    <div class="cuidados-grid">
      <div class="cuidado-card">
        <div class="cuidado-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3>Limpieza</h3>
        <p>Limpia con un pano suave y agua tibia con jabon neutro. Evita productos abrasivos.</p>
      </div>
      <div class="cuidado-card">
        <div class="cuidado-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
        </div>
        <h3>Almacenamiento</h3>
        <p>Guarda cada joya por separado en su caja o bolsa de tela.</p>
      </div>
      <div class="cuidado-card">
        <div class="cuidado-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        </div>
        <h3>Evitar contacto</h3>
        <p>Retira tus joyas antes de usar perfumes, cremas, cloro o hacer deporte.</p>
      </div>
      <div class="cuidado-card">
        <div class="cuidado-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <h3>Plata 925</h3>
        <p>La plata se oxida con el tiempo. Guardala en bolsas hermeticas.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== MANTENIMIENTO ========== -->
<section id="mantenimiento">
  <div class="mant-inner">
    <div class="mant-content">
      <p class="section-tag">Servicio exclusivo</p>
      <h2 class="section-title">Mantenimiento Profesional</h2>
      <p class="mant-desc">Tus joyas merecen cuidado experto. Nuestro servicio las devuelve a su estado original.</p>
      <div class="mant-servicios">
        <div class="mant-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Limpieza profunda con ultrasonido</span>
        </div>
        <div class="mant-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Pulido y restauracion del brillo original</span>
        </div>
        <div class="mant-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Revision y ajuste de engastes y piedras</span>
        </div>
        <div class="mant-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Rectificacion de talla incluida</span>
        </div>
      </div>
      <div class="mant-precios">
        <div class="mant-precio-card">
          <p class="mant-precio-label">Mantenimiento basico</p>
          <p class="mant-precio-val">$15.000</p>
          <p class="mant-precio-desc">Limpieza y pulido</p>
        </div>
        <div class="mant-precio-card mant-precio-featured">
          <p class="mant-precio-badge">Mas popular</p>
          <p class="mant-precio-label">Mantenimiento completo</p>
          <p class="mant-precio-val">$29.000</p>
          <p class="mant-precio-desc">Limpieza + pulido + revision engastes</p>
        </div>
        <div class="mant-precio-card">
          <p class="mant-precio-label">Mantenimiento premium</p>
          <p class="mant-precio-val">$49.000</p>
          <p class="mant-precio-desc">Todo incluido</p>
        </div>
      </div>
      <a href="https://wa.me/56945460876" class="btn-banner" target="_blank" rel="noopener">Agendar por WhatsApp</a>
    </div>
  </div>
</section>

<!-- ========== NOSOTROS ========== -->
<section id="nosotros">
  <div class="nosotros-img-col">
    <img src="https://joyaskm.cl/wp-content/uploads/2026/02/joyeria-scaled.new_.webp" alt="Interior tienda Joyas KM - Mall Arauco Estacion Santiago" loading="lazy" class="nosotros-img" />
  </div>
  <div class="nosotros-content-col">
    <p class="section-tag">Nuestra historia</p>
    <h2 class="section-title">Mas de 16 anos creando momentos inolvidables</h2>
    <p class="nosotros-text">Somos una joyeria familiar establecida con mas de 16 anos de experiencia en el rubro, con productos y disenos de primera calidad.</p>
    <p class="nosotros-text">Hacemos despachos a todo Chile por Chilexpress y tambien puedes retirar directamente en tienda, en el Mall Arauco Estacion, Local 1065.</p>
    <div class="nosotros-valores">
      <div class="nosotros-valor">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
        <span>Garantia indefinida en materiales</span>
      </div>
      <div class="nosotros-valor">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
        <span>Envios Chilexpress a todo Chile</span>
      </div>
      <div class="nosotros-valor">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
        <span>Fabricacion artesanal en Santiago</span>
      </div>
      <div class="nosotros-valor">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>
        <span>Solo oro 18K y plata 925 originales</span>
      </div>
    </div>
    <div class="nosotros-founder">
      <div class="founder-avatar">MN</div>
      <div class="founder-info">
        <strong>Maximiliano Negrete</strong>
        <span>Fundador · Joyas KM</span>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>