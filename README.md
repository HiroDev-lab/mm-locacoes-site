<div align="center">

# M&M Locações — Site institucional + Blog WordPress

**Site em produção:** [mmlocacoespoltronas.com.br](https://mmlocacoespoltronas.com.br) · **Blog:** [/blog](https://mmlocacoespoltronas.com.br/blog/)

Site institucional de locação de poltronas reclináveis para pós-operatório (Goiânia e Brasília), construído fielmente a partir das LPs do designer — do zero ao deploy, com arquitetura híbrida **estático + WordPress**.

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![WordPress](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)

</div>

---

## 🏗️ Arquitetura

```
mmlocacoespoltronas.com.br
├── /            ← Home (HTML/CSS/JS puros — zero frameworks, zero build)
├── /sobre-nos   ← Página institucional (estática, URL limpa via .htaccess)
└── /blog/       ← WordPress com TEMA PRÓPRIO que replica a LP pixel a pixel
```

O diferencial está no blog: em vez de um tema pronto, o WordPress roda um **tema clássico sob medida** (`wordpress/tema-mm-locacoes/`) que **reutiliza o mesmo `style.css` e `main.js` do site estático**. Resultado: identidade visual 100% consistente entre site e blog, e o cliente publica artigos pelo wp-admin sem tocar em código.

## ✨ Destaques técnicos

- **Zero dependências no front**: 1 arquivo CSS (variáveis, Grid, Flexbox, `clamp()`), 1 arquivo JS vanilla (IIFE) com menu mobile, animações de scroll via `IntersectionObserver`, modal de WhatsApp, lightbox de vídeo e filtro de categorias do blog — sem nenhuma biblioteca.
- **URLs limpas + SEO**: `.htaccess` com rewrite de extensões (`/sobre-nos`), redirecionamentos 301 da migração do blog e versionamento de assets (`style.css?v=2`) para invalidação de cache no LiteSpeed.
- **Tema WordPress enxuto** (6 arquivos PHP): a listagem do blog renderiza os cards exatos da LP com links dinâmicos por slug (`mm_link_post()`), e posts novos criados no wp-admin entram automaticamente no grid — com etiqueta de categoria, imagem destacada e resumo.
- **Migração automatizada**: os artigos foram migrados do estático para o WordPress via **API REST** (senha de aplicação + PowerShell) — categorias, biblioteca de mídia e posts criados por script.
- **Responsivo de verdade**: 3 breakpoints (1024/820/560px), testado em produção em viewport mobile.
- **Acessibilidade**: navegação por teclado no lightbox/modal, `aria-labels`, `prefers-reduced-motion` desativa todas as animações.

## 📁 Estrutura do repositório

```
site/                        # Site estático publicado na raiz do servidor
├── index.html               # Home — 11 seções (hero, poltronas, como funciona, depoimentos em vídeo...)
├── sobre-nos.html
├── .htaccess                # URLs limpas + 301s
├── css/style.css            # TODO o CSS do projeto (compartilhado com o tema WP)
├── js/main.js               # TODO o JS (menu, reveal, modal, lightbox, filtro)
└── assets/img|video/        # Fotos e depoimentos em vídeo (MP4/H.264)

wordpress/tema-mm-locacoes/  # Tema WordPress do blog
├── functions.php            # Enfileira o CSS/JS do site principal (o "truque" da consistência)
├── header.php / footer.php  # Navbar/footer idênticos ao site + modal + lightbox
├── index.php                # Listagem: cards da LP + loop de posts novos
├── single.php               # Página de artigo no layout da LP
└── style.css                # Ajustes finos (imagens do editor no padrão da LP etc.)
```

## 🎨 Identidade visual

Fonte **Poppins** · Laranja `#F37021` · degradês `#FFA067 → #F37021` · cards creme com raios generosos e sombras suaves — implementados como variáveis CSS no `:root`.

---

<div align="center">
<sub>Design UX/UI: <a href="https://www.behance.net/tuliohenrique1">Túlio Henrique</a> · Desenvolvimento: <a href="https://github.com/HiroDev-lab">Hiro</a></sub>
</div>
