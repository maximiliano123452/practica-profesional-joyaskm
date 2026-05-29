<?php
// ============================================
// JOYAS KM - header.php
// ============================================
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header">
  <div class="header-inner">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <img
          src="https://joyaskm.cl/wp-content/uploads/2025/04/LogoLimpio.png"
          alt="<?php bloginfo( 'name' ); ?>"
          class="logo-img"
          width="180"
          height="59"
        />
      <?php endif; ?>
    </a>

    <nav id="main-nav" aria-label="<?php esc_attr_e( 'Menú principal', 'joyaskm' ); ?>">
      <?php
      wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav-list',
          'container'      => false,
          'fallback_cb'    => false,
          'walker'         => new Joyaskm_Nav_Walker(),
      ));
      ?>
    </nav>

    <div class="header-actions">
      <a href="https://wa.me/56945460876" class="btn-wa" target="_blank" rel="noopener">
        WhatsApp
      </a>
      <a href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/carrito/' ) ); ?>" class="cart-icon" aria-label="<?php esc_attr_e( 'Ver carrito', 'joyaskm' ); ?>">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
          <line x1="3" y1="6" x2="21" y2="6"/>
          <path d="M16 10a4 4 0 01-8 0"/>
        </svg>
        <?php if ( function_exists( 'WC' ) && WC()->cart ) : ?>
          <?php $count = WC()->cart->get_cart_contents_count(); ?>
          <?php if ( $count > 0 ) : ?>
            <span class="cart-count"><?php echo esc_html( $count ); ?></span>
          <?php endif; ?>
        <?php endif; ?>
      </a>
      <button class="menu-toggle" aria-label="<?php esc_attr_e( 'Abrir menú', 'joyaskm' ); ?>" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>
</header>

<main id="main-content">