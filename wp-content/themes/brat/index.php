<?php get_header(); ?>

<main id="primary" class="site-main">
  <div class="fitz-container">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <article <?php post_class(); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-content"><?php the_content(); ?></div>
      </article>
    <?php endwhile; else: ?>
      <p><?php esc_html_e('No content found.', 'brat'); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>

