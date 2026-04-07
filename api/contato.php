<?php require __DIR__ . '/../inc/header.php'; ?>

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/acessibilidade.css">

<section class="page-hero">
  <div class="wrap">
    <h1>Contato & Endereço</h1>
    <p>Fale conosco e agende seu horário.</p>
  </div>
</section>


<section class="contato-grid wrap" id="contato">
  <form class="form" action="https://formspree.io/f/xdapbeyy" method="POST">
    <h2>Entre em contato conosco:</h2>
    
    <label>
      Nome
      <input type="text" name="name" required placeholder="Seu nome completo">
    </label>
    
    <label>
      E-mail
      <input type="email" name="email" required placeholder="voce@exemplo.com">
    </label>
    
    <label>
      Telefone
      <input type="tel" name="phone" placeholder="(xx) xxxxx-xxxx">
    </label>
    
    <label>
      Mensagem
      <textarea name="message" rows="5" required placeholder="Conte como posso ajudar"></textarea>
    </label>

    <input type="hidden" name="_next" value="https://bartirabravo.vercel.app/contato">
    
    <button class="btn" type="submit">Enviar</button>
  </form>

  <aside class="info">
    <h2>Informações</h2>
    <p><strong>Horário de funcionamento</strong><br>Segunda a sexta: 9:00 às 18:00</p>
    <p><strong>Telefone</strong><br>(11) 2975-2473</p>
    <p><strong>E-mail</strong><br><a href="mailto:bartirabravo@ginasticafacial.com.br">bartirabravo@ginasticafacial.com.br</a></p>
    <p><strong>Redes sociais</strong><br><a href="#">facebook.com/ginasticafacialbb</a></p>
  </aside>
</section>

<section class="mapa wrap" id="endereco">
  <h2>Endereço</h2>
  <p>Rua Senhor do Monte, 495, São Paulo, SP, Brazil</p>

  <div class="mapa-box" aria-label="Mapa">
    <div class="mapa-placeholder">
      <a href="https://www.google.com/maps/search/?api=1&query=Rua+Senhor+do+Monte,+495,+São+Paulo,+SP" target="_blank">
        <img src="IMG/maps.png" alt="Localização no Google Maps" loading="lazy">
      </a>
    </div>
  </div>
</section>


<section class="logo-completa">
  <div class="wrap narrow">
    <img class="logo_final" src="IMG/logo_completa.png" alt="Bartira Bravo — Ginástica Facial">
  </div>
</section>


  <!-- Botão de Acessibilidade -->
  <button id="btn-acessibilidade" aria-label="Abrir menu de acessibilidade">
    <img src="IMG/logo_acessibilidade.png" alt="Acessibilidade">
  </button>

  <div id="acessibilidade-menu" class="hidden">
      <button onclick="toggleContraste()"><span class="icon">🌓</span> Contraste</button>
      <button onclick="alterarFonte('+')"><span class="icon">🔠+</span> Aumentar Fonte</button>
      <button onclick="alterarFonte('-')"><span class="icon">🔠-</span> Reduzir Fonte</button>
      <button onclick="lerPagina()"><span class="icon">🔊</span> Ler Página</button>
  </div>

  <!-- VLibras -->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

  <script src="js/acessibilidade.js" defer></script>


<?php require __DIR__ . '/../inc/footer.php'; ?>
