<?php
/* Template Name: Privacy Policy — Y2K Neon */
get_header(); ?>

<main class="privacy-y2k">
  <header class="privacy-hero">
    <h1>Privacy Policy</h1>
    <p class="updated">Last updated: <?php echo get_the_modified_time('F j, Y'); ?></p>
  </header>

  <div class="privacy-grid">
    <aside class="privacy-toc" id="toc"><h3>On this page</h3><nav><ol></ol></nav></aside>
    <article class="privacy-content" id="content">
      <?php the_content(); ?>
    </article>
  </div>
</main>

<?php get_footer();

/* --- tiny TOC builder from H2/H3 --- */
?>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const content = document.querySelector('#content');
  const headings = content.querySelectorAll('h2, h3');
  const tocList = document.querySelector('#toc ol');
  headings.forEach((h, i) => {
    const id = h.id || ('sec-' + (i+1));
    h.id = id;
    const li = document.createElement('li');
    li.className = h.tagName === 'H3' ? 'sub' : '';
    li.innerHTML = `<a href="#${id}">${h.textContent}</a>`;
    tocList.appendChild(li);
  });
});
</script>
