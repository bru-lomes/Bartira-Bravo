<?php require __DIR__ . '/inc/header.php'; ?>

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/acessibilidade.css">

<section class="page-hero">
  <div class="wrap">
    <h1>Contato & Endereço</h1>
    <p>Fale conosco e agende seu horário.</p>
  </div>
</section>

<section class="contato-grid wrap" id="contato">
  <form class="form" method="post" action="#">
    <h2>Entre em contato conosco</h2>
    <label>
      Nome
      <input type="text" name="nome" required placeholder="Seu nome completo">
    </label>
    <label>
      E-mail
      <input type="email" name="email" required placeholder="voce@exemplo.com">
    </label>
    <label>
      Telefone
      <input type="tel" name="telefone" placeholder="(xx) xxxxx-xxxx">
    </label>
    <label>
      Mensagem
      <textarea name="mensagem" rows="5" placeholder="Conte como posso ajudar"></textarea>
    </label>
    <button class="btn" type="submit">Enviar</button>
    <p class="form-note">Ou escreva para <a href="mailto:bartirabravo@ginasticafacial.com.br">bartirabravo@ginasticafacial.com.br</a></p>
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

  <!-- espaço reservado para mapa/iframe -->
  <div class="mapa-box" aria-label="Mapa">
    <!-- substitua por um iframe do Google Maps quando quiser -->
    <div class="mapa-placeholder">
      <a href="https://maps.app.goo.gl/bwQMhNPtgEb88zoi6">
        <img src="IMG/maps.png" alt="Imagem da localização no Mapa (By Google Maps)" loading="lazy">
      </a>
    </div>
  </div>
</section>


<section class="logo-completa">
  <div class="wrap narrow">
    <img class="logo_final" src="IMG/logo_completa.png" alt="Bartira Bravo — Ginástica Facial">
  </div>
</section>


<!-- Barra Flutuante de Acessibilidade -->
  <div id="acessibilidade-barra" aria-label="Barra de acessibilidade">
    <button onclick="toggleContraste()" title="Ativar alto contraste">🌓 Contraste</button>
    <button onclick="alterarFonte('+')" title="Aumentar fonte">🔠+</button>
    <button onclick="alterarFonte('-')" title="Reduzir fonte">🔠-</button>
    <button onclick="lerPagina()" title="Ler conteúdo em voz alta">🔊 Leitura</button>
    <button onclick="document.getElementById('in').scrollIntoView()" title="Ir para conteúdo">📄 Ir ao conteúdo</button>
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


<?php require __DIR__ . '/inc/footer.php'; ?>
