/* M&M Locações — interações do site */

(function () {
  'use strict';

  /* ---------- Menu mobile ---------- */
  var hamburger = document.getElementById('hamburger');
  var navLinks = document.getElementById('navLinks');

  if (hamburger && navLinks) {
    hamburger.addEventListener('click', function () {
      var aberto = navLinks.classList.toggle('aberto');
      hamburger.classList.toggle('aberto', aberto);
      hamburger.setAttribute('aria-expanded', aberto ? 'true' : 'false');
    });

    navLinks.addEventListener('click', function (e) {
      if (e.target.tagName === 'A') {
        navLinks.classList.remove('aberto');
        hamburger.classList.remove('aberto');
        hamburger.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ---------- Navbar com sombra ao rolar ---------- */
  var navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      navbar.classList.toggle('rolada', window.scrollY > 30);
    }, { passive: true });
  }

  /* ---------- Reveal ao rolar ---------- */
  var reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entradas) {
      entradas.forEach(function (entrada) {
        if (entrada.isIntersecting) {
          entrada.target.classList.add('visivel');
          observer.unobserve(entrada.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(function (el) { observer.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('visivel'); });
  }

  /* ---------- Modal de unidades (WhatsApp) ---------- */
  var modal = document.getElementById('modalUnidade');

  function abrirModal() {
    if (!modal) return;
    modal.classList.add('aberto');
    document.body.style.overflow = 'hidden';
  }

  function fecharModal() {
    if (!modal) return;
    modal.classList.remove('aberto');
    document.body.style.overflow = '';
  }

  document.querySelectorAll('.abrir-modal').forEach(function (btn) {
    btn.addEventListener('click', abrirModal);
  });

  if (modal) {
    modal.querySelector('.modal-fechar').addEventListener('click', fecharModal);
    modal.addEventListener('click', function (e) {
      if (e.target === modal) fecharModal();
    });
    modal.querySelectorAll('.opcao-unidade').forEach(function (opcao) {
      opcao.addEventListener('click', function () {
        setTimeout(fecharModal, 300);
      });
    });
  }

  /* ---------- Lightbox de vídeo ---------- */
  var lightbox = document.getElementById('lightbox');
  var lightboxVideo = document.getElementById('lightboxVideo');

  function abrirLightbox(src) {
    if (!lightbox || !lightboxVideo) return;
    lightboxVideo.src = src;
    lightbox.classList.add('aberto');
    document.body.style.overflow = 'hidden';
    lightboxVideo.play().catch(function () {});
  }

  function fecharLightbox() {
    if (!lightbox || !lightboxVideo) return;
    lightboxVideo.pause();
    lightboxVideo.removeAttribute('src');
    lightboxVideo.load();
    lightbox.classList.remove('aberto');
    document.body.style.overflow = '';
  }

  document.querySelectorAll('[data-video]').forEach(function (card) {
    card.addEventListener('click', function () {
      abrirLightbox(card.getAttribute('data-video'));
    });
    card.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        abrirLightbox(card.getAttribute('data-video'));
      }
    });
  });

  if (lightbox) {
    lightbox.querySelector('.lightbox-fechar').addEventListener('click', fecharLightbox);
    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox) fecharLightbox();
    });
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      fecharModal();
      fecharLightbox();
    }
  });

  /* ---------- Filtro de categorias do blog ---------- */
  var chips = document.querySelectorAll('.chip[data-categoria]');
  var posts = document.querySelectorAll('.card-blog[data-categoria]');

  chips.forEach(function (chip) {
    chip.addEventListener('click', function () {
      chips.forEach(function (c) { c.classList.remove('ativo'); });
      chip.classList.add('ativo');
      var categoria = chip.getAttribute('data-categoria');

      posts.forEach(function (post) {
        var corresponde = categoria === 'todos' || post.getAttribute('data-categoria') === categoria;
        post.classList.toggle('oculto', !corresponde);
        if (corresponde) {
          post.classList.remove('visivel');
          void post.offsetWidth;
          post.classList.add('visivel');
        }
      });
    });
  });
})();
