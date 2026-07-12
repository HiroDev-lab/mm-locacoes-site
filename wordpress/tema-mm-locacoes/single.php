<?php get_header(); ?>

  <!-- ===== ARTIGO (layout da LP) ===== -->
  <?php while (have_posts()) : the_post(); $cat = mm_primeira_categoria(); ?>
  <section class="post-artigo">
    <div class="coluna-artigo">
      <span class="tag-post reveal"><?php echo esc_html($cat['nome']); ?></span>
      <h1 class="reveal" style="--atraso:.1s"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>

    <div class="container">
      <div class="chips-artigo">
        <span class="chip-dif reveal" style="--atraso:0s">Poltronas higienizadas</span>
        <span class="chip-dif reveal" style="--atraso:.08s">Entrega rápida</span>
        <span class="chip-dif reveal" style="--atraso:.16s">Instalação inclusa</span>
        <span class="chip-dif reveal" style="--atraso:.24s">Atendimento humanizado</span>
        <span class="chip-dif reveal" style="--atraso:.32s">Modelos elétricos</span>
      </div>
    </div>
  </section>
  <?php endwhile; ?>

<?php get_footer(); ?>
