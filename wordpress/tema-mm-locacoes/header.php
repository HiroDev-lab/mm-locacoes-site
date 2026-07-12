<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://mmlocacoespoltronas.com.br/assets/img/favicon.svg" type="image/svg+xml">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ===== NAVBAR (idêntica ao site principal) ===== -->
  <header class="navbar" id="navbar">
    <div class="container">
      <nav class="navbar-pill">
        <a href="https://mmlocacoespoltronas.com.br/" class="logo" aria-label="M&M Locações — Início">
          <img src="https://mmlocacoespoltronas.com.br/assets/img/logo-mm-branco.png" alt="M&M Locação de Poltronas Reclináveis">
        </a>
        <ul class="nav-links" id="navLinks">
          <li><a href="https://mmlocacoespoltronas.com.br/#nossas-poltronas">Nossas Poltronas</a></li>
          <li><a href="https://mmlocacoespoltronas.com.br/#como-funciona">Como Funciona</a></li>
          <li><a href="https://mmlocacoespoltronas.com.br/sobre-nos">Sobre Nós</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="ativo">Blog</a></li>
        </ul>
        <button class="hamburger" id="hamburger" aria-label="Abrir menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </nav>
    </div>
  </header>
