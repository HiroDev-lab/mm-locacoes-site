<?php
get_header();

/** Link de um post pelo slug (ou null se não existir). */
function mm_link_post($slug) {
    $p = get_page_by_path($slug, OBJECT, 'post');
    return ($p && $p->post_status === 'publish') ? get_permalink($p) : null;
}

$link_escolher   = mm_link_post('como-escolher-poltrona-reclinavel-pos-operatorio');
$link_beneficios = mm_link_post('beneficios-poltrona-eletrica-lift-pos-operatorio');
$link_exercicios = mm_link_post('exercicios-leves-sentado-na-poltrona');

$slugs_lp = ['como-escolher-poltrona-reclinavel-pos-operatorio', 'beneficios-poltrona-eletrica-lift-pos-operatorio', 'exercicios-leves-sentado-na-poltrona'];

$seta = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F37021" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>';
$img  = 'https://mmlocacoespoltronas.com.br/assets/img';
?>

  <!-- ===== HERO DO BLOG (layout da LP) ===== -->
  <section class="blog-hero">
    <div class="container">
      <h1 class="reveal">Conteúdos que ajudam você a ter uma <span class="destaque">recuperação mais confortável</span></h1>
      <p class="reveal" style="--atraso:.12s">Encontre dicas, orientações e informações sobre pós-operatório, recuperação domiciliar, mobilidade e aluguel de poltronas reclináveis.</p>
      <div class="foto-destaque reveal reveal-zoom" style="--atraso:.2s">
        <img src="<?php echo $img; ?>/poltrona-reclinavel-sala.png" alt="Poltrona reclinável elétrica em sala de estar aconchegante">
      </div>
      <div class="categorias reveal" style="--atraso:.3s">
        <button class="chip ativo" data-categoria="todos">Todos</button>
        <button class="chip" data-categoria="pos-operatorio">Pós-Operatório</button>
        <button class="chip" data-categoria="dicas-de-saude">Dicas de Saúde</button>
        <button class="chip" data-categoria="mobilidade">Mobilidade</button>
        <button class="chip" data-categoria="guias-do-cuidador">Guias do Cuidador</button>
      </div>
    </div>
  </section>

  <!-- ===== LISTA DE POSTS (cards idênticos à LP) ===== -->
  <section class="blog-lista">
    <div class="container">
      <div class="grid-blog">
        <article class="card-blog reveal" data-categoria="pos-operatorio" style="--atraso:0s">
          <span class="tag">Pós-Operatório</span>
          <div class="thumb"><img src="<?php echo $img; ?>/poltrona-reclinavel-sala.png" alt="Poltrona reclinável confortável em sala de estar"></div>
          <h3>Como escolher a poltrona ideal para o pós-operatório</h3>
          <p class="resumo">Entender suas necessidades de mobilidade e conforto é o primeiro passo para uma recuperação tranquila.</p>
          <div class="rodape-card">
            <span class="data">09/07/2026</span>
            <?php if ($link_escolher) : ?>
            <a class="ler-mais" href="<?php echo esc_url($link_escolher); ?>">Ler mais <?php echo $seta; ?></a>
            <?php else : ?>
            <span class="ler-mais" title="Em breve">Ler mais <?php echo $seta; ?></span>
            <?php endif; ?>
          </div>
        </article>

        <article class="card-blog reveal" data-categoria="dicas-de-saude" style="--atraso:.1s">
          <span class="tag">Dicas de Saúde</span>
          <div class="thumb"><img src="<?php echo $img; ?>/recuperacao-pos-operatorio.png" alt="Mãe descansando em poltrona reclinável no pós-parto"></div>
          <h3>Pós-parto: por que uma poltrona reclinável pode ajudar</h3>
          <p class="resumo">O conforto nos primeiros dias em casa com o bebê faz toda a diferença para a recuperação da mãe.</p>
          <div class="rodape-card">
            <span class="data">09/07/2026</span>
            <span class="ler-mais" title="Em breve">Ler mais <?php echo $seta; ?></span>
          </div>
        </article>

        <article class="card-blog reveal" data-categoria="mobilidade" style="--atraso:.2s">
          <span class="tag">Mobilidade</span>
          <div class="thumb"><img src="<?php echo $img; ?>/idosa-poltrona-reclinavel.png" alt="Idosa lendo confortavelmente em poltrona elétrica lift"></div>
          <h3>5 Benefícios da poltrona elétrica lift para idosos</h3>
          <p class="resumo">Mobilidade e independência são fundamentais para a qualidade de vida na terceira idade.</p>
          <div class="rodape-card">
            <span class="data">09/07/2026</span>
            <?php if ($link_beneficios) : ?>
            <a class="ler-mais" href="<?php echo esc_url($link_beneficios); ?>">Ler mais <?php echo $seta; ?></a>
            <?php else : ?>
            <span class="ler-mais" title="Em breve">Ler mais <?php echo $seta; ?></span>
            <?php endif; ?>
          </div>
        </article>

        <article class="card-blog reveal" data-categoria="mobilidade" style="--atraso:0s">
          <span class="tag">Mobilidade</span>
          <div class="thumb"><img src="<?php echo $img; ?>/poltrona-eletrica-convencional.png" alt="Poltrona reclinável elétrica convencional reclinada" style="object-fit:contain;background:#FDE3D2;padding:12px"></div>
          <h3>5 Exercícios leves para fazer sentado na poltrona</h3>
          <p class="resumo">Manter a circulação ativa é vital. Confira movimentos recomendados por fisioterapeutas para pacientes.</p>
          <div class="rodape-card">
            <span class="data">09/07/2026</span>
            <?php if ($link_exercicios) : ?>
            <a class="ler-mais" href="<?php echo esc_url($link_exercicios); ?>">Ler mais <?php echo $seta; ?></a>
            <?php else : ?>
            <span class="ler-mais" title="Em breve">Ler mais <?php echo $seta; ?></span>
            <?php endif; ?>
          </div>
        </article>

        <article class="card-blog reveal" data-categoria="dicas-de-saude" style="--atraso:.1s">
          <span class="tag">Dicas de Saúde</span>
          <div class="thumb"><img src="<?php echo $img; ?>/hero-paciente-poltrona-reclinavel.png" alt="Paciente em posição elevada na poltrona reclinável"></div>
          <h3>A importância da ergonomia no pós-parto imediato</h3>
          <p class="resumo">Saiba como uma posição elevada pode facilitar a amamentação e reduzir as dores nas costas após o parto.</p>
          <div class="rodape-card">
            <span class="data">09/07/2026</span>
            <span class="ler-mais" title="Em breve">Ler mais <?php echo $seta; ?></span>
          </div>
        </article>

        <article class="card-blog reveal" data-categoria="guias-do-cuidador" style="--atraso:.2s">
          <span class="tag">Guias do Cuidador</span>
          <div class="thumb"><img src="<?php echo $img; ?>/poltrona-eletrica-lift.png" alt="Poltrona elétrica lift preparada para recuperação em casa" style="object-fit:contain;background:#FDE3D2;padding:12px"></div>
          <h3>Checklist: Preparando a casa para uma cirurgia de coluna</h3>
          <p class="resumo">O que você precisa organizar no quarto e na sala para garantir segurança total após o procedimento cirúrgico.</p>
          <div class="rodape-card">
            <span class="data">09/07/2026</span>
            <span class="ler-mais" title="Em breve">Ler mais <?php echo $seta; ?></span>
          </div>
        </article>

        <?php
        // Posts novos criados no WordPress (além dos 3 da LP) entram aqui automaticamente
        $extras = new WP_Query([
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
        ]);
        $i = 0;
        while ($extras->have_posts()) : $extras->the_post();
            if (in_array(get_post_field('post_name'), $slugs_lp, true)) { continue; }
            $cat = mm_primeira_categoria();
        ?>
        <article class="card-blog reveal" data-categoria="<?php echo esc_attr($cat['slug']); ?>" style="--atraso:<?php echo esc_attr(($i % 3) * 0.1); ?>s">
          <span class="tag"><?php echo esc_html($cat['nome']); ?></span>
          <div class="thumb">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large', ['alt' => the_title_attribute(['echo' => false])]); ?>
            <?php else : ?>
              <img src="<?php echo $img; ?>/poltrona-reclinavel-sala.png" alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>
          </div>
          <h3><?php the_title(); ?></h3>
          <p class="resumo"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22, '…')); ?></p>
          <div class="rodape-card">
            <span class="data"><?php echo esc_html(get_the_date('d/m/Y')); ?></span>
            <a class="ler-mais" href="<?php the_permalink(); ?>">Ler mais <?php echo $seta; ?></a>
          </div>
        </article>
        <?php $i++; endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
