<?php
// ============================================
// JOYAS KM - index.php
// Fallback obligatorio WordPress
// ============================================
get_header();
?>

<div class="container" style="max-width:1200px; margin:0 auto; padding:80px 24px;">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
    <?php the_posts_navigation(); ?>
  <?php else : ?>
    <p>No se encontró contenido.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>