  <!-- ===== FOOTER (idêntico ao blog.html da LP) ===== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="logo-footer">
          <img src="https://mmlocacoespoltronas.com.br/assets/img/logo-mm-branco.png" alt="M&M Locação de Poltronas Reclináveis">
        </div>
        <div class="sobre-texto">
          <p>Desde 2020, a M&M Locações de Poltronas Reclináveis oferece poltronas para pós-operatório em Goiânia, proporcionando mais conforto, segurança e autonomia durante a recuperação. Trabalhamos com equipamentos de alta qualidade, atendimento humanizado e entrega rápida para que o paciente tenha uma recuperação mais tranquila em casa.</p>
        </div>
        <div>
          <ul>
            <li><a href="https://mmlocacoespoltronas.com.br/#nossas-poltronas">Nossas poltronas</a></li>
            <li><a href="https://mmlocacoespoltronas.com.br/#como-funciona">Como funciona</a></li>
            <li><a href="https://mmlocacoespoltronas.com.br/sobre-nos">Sobre nós</a></li>
          </ul>
        </div>
        <div>
          <ul>
            <li><button class="abrir-modal" type="button">Contatos</button></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Blog</a></li>
          </ul>
        </div>
        <div>
          <h4>Rede sociais</h4>
          <div class="redes">
            <a href="https://www.instagram.com/mmlocacoespoltronas/" target="_blank" rel="noopener" aria-label="Instagram da M&M Locações">
              <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4.2"/><circle cx="17.5" cy="6.5" r="1" fill="#fff" stroke="none"/></svg>
            </a>
            <button class="abrir-modal" type="button" aria-label="WhatsApp — Goiânia e Brasília">
              <svg viewBox="0 0 24 24" fill="#fff"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.4-3c-.3-.4 0-.5.2-.7l.4-.5c.1-.2.2-.3.3-.5v-.5c0-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.2s.9 2.5 1.1 2.7c.1.2 1.8 2.8 4.5 3.9.6.3 1.1.4 1.5.6.6.2 1.2.2 1.6.1.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2l-.3-.2z"/></svg>
            </button>
          </div>
        </div>
      </div>
      <p class="copy">© 2026 M&M Locações de Poltronas Reclináveis — Goiânia e Brasília. Todos os direitos reservados.</p>
      <p class="creditos">
        <a href="https://www.behance.net/tuliohenrique1" target="_blank" rel="noopener">Design ux e ui | Túlio Henrique</a>
        <span>·</span>
        <a href="https://github.com/HiroDev-lab/HiroDev-lab" target="_blank" rel="noopener">Desenvolvido por Hiro</a>
      </p>
    </div>
  </footer>

  <!-- ===== MODAL WHATSAPP ===== -->
  <div class="modal-overlay" id="modalUnidade" role="dialog" aria-modal="true" aria-labelledby="tituloModal">
    <div class="modal-card">
      <button class="modal-fechar" aria-label="Fechar">✕</button>
      <h3 id="tituloModal">Escolha a unidade mais próxima</h3>
      <p>Você será atendido pelo WhatsApp da unidade escolhida.</p>
      <div class="opcoes-unidade">
        <a class="opcao-unidade" href="https://api.whatsapp.com/message/HBTGLJNVKJ6EF1?autoload=1&app_absent=0" target="_blank" rel="noopener">
          <span class="icone-zap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.4-3c-.3-.4 0-.5.2-.7l.4-.5c.1-.2.2-.3.3-.5v-.5c0-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.2s.9 2.5 1.1 2.7c.1.2 1.8 2.8 4.5 3.9.6.3 1.1.4 1.5.6.6.2 1.2.2 1.6.1.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2l-.3-.2z"/></svg>
          </span>
          <span><strong>Goiânia</strong><span>Atendimento via WhatsApp</span></span>
        </a>
        <a class="opcao-unidade" href="https://api.whatsapp.com/message/JJZ7I3YWM7LIC1?autoload=1&app_absent=0" target="_blank" rel="noopener">
          <span class="icone-zap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.4-3c-.3-.4 0-.5.2-.7l.4-.5c.1-.2.2-.3.3-.5v-.5c0-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.2s.9 2.5 1.1 2.7c.1.2 1.8 2.8 4.5 3.9.6.3 1.1.4 1.5.6.6.2 1.2.2 1.6.1.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2l-.3-.2z"/></svg>
          </span>
          <span><strong>Brasília</strong><span>Atendimento via WhatsApp</span></span>
        </a>
      </div>
    </div>
  </div>

  <!-- ===== LIGHTBOX VÍDEO ===== -->
  <div class="lightbox" id="lightbox">
    <button class="lightbox-fechar" aria-label="Fechar vídeo">✕</button>
    <video id="lightboxVideo" controls playsinline></video>
  </div>

<?php wp_footer(); ?>
</body>
</html>
