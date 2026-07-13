/* M&M Locações — interações do site */

(function () {
  'use strict';

  /* ---------- Botão WhatsApp flutuante (injetado — vale p/ site estático E blog WP) ---------- */
  if (document.body && !document.querySelector('.zap-flutuante')) {
    var zapBtn = document.createElement('button');
    zapBtn.className = 'zap-flutuante abrir-modal';
    zapBtn.setAttribute('aria-label', 'Falar com a M&M pelo WhatsApp');
    zapBtn.innerHTML = '<svg width="30" height="30" viewBox="0 0 24 24" fill="#fff"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.4-3c-.3-.4 0-.5.2-.7l.4-.5c.1-.2.2-.3.3-.5v-.5c0-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.2s.9 2.5 1.1 2.7c.1.2 1.8 2.8 4.5 3.9.6.3 1.1.4 1.5.6.6.2 1.2.2 1.6.1.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2l-.3-.2z"/></svg>';
    document.body.appendChild(zapBtn);
  }

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
