<?php require __DIR__ . '/../inc/header.php'; ?>

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/acessibilidade.css">

<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-copy">
      <a class="pill-cta" href="contato#contato">AGENDE SEU HORÁRIO</a>
      <h1>Descubra o poder<br>da ginástica facial</h1>
      <p>Realce sua beleza natural com técnicas simples, eficazes e 100% naturais.</p>
      <a class="btn" href="#beneficios">Benefícios</a>
      <a class="btn btn-outline" href="bartirabravo#sobre">Conheça a Bartira</a>
    </div>
    <figure class="hero-media">
      <img src="IMG/musculo_facial.jpeg" alt="Ginástica facial — imagem destaque" loading="eager">
    </figure>
  </div>
</section>

<hr class="divider">

<!-- SOBRE -->
<section id="sobre" class="about" aria-labelledby="sobre-title">
  <div class="wrap narrow">
    <h2 id="sobre-title" class="titulo">Conheça a Bartira Bravo</h2>

    <div class="bartira-linha" role="group" aria-labelledby="sobre-title" aria-describedby="sobre-descricao">
      <figure class="bartira-foto">
        <img
          class="foto_bartira"
          src="IMG/BartiraBravo.jpeg"
          alt="Retrato de Bartira Bravo sorrindo"
          width="300"
          height="300"
          loading="lazy"
          decoding="async">
      </figure>

      <div class="bartira-conteudo">
        <p>Sou Bartira Bravo, especialista em ginástica facial, uma técnica natural que fortalece e tonifica os músculos do rosto, pescoço e colo, promovendo saúde e beleza de forma integrada.</p>
        <p>Com formação em Desenho e Artes Plásticas, Pedagogia e Psicopedagogia, atuei por 20 anos na Educação. Movida pela busca de harmonia corporal, desenvolvi um programa na área da Saúde, focado no equilíbrio entre o corpo e a musculatura do rosto, pescoço e colo.</p>
        <p>Minha base filosófica se uniu ao rigor científico nas aulas do Prof. Dr. Flávio Carneiro Hojaji, com quem venho me aperfeiçoando há mais de duas décadas, em diálogo com especialistas de diversas áreas da saúde.</p>

        <p id="sobre-descricao" class="visually-hidden">
          Seção com a foto de Bartira Bravo à esquerda e texto biográfico à direita, com foco em saúde, beleza e rigor científico.
        </p>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- BENEFÍCIOS -->
<section id="beneficios" class="beneficios" aria-labelledby="beneficios-title">
  <div class="wrap">
    <h2 id="beneficios-title" class="titulo">Benefícios</h2>

    <div class="cards">
      <article class="card" role="group" aria-labelledby="titulo-aparencia">
        <h3 id="titulo-aparencia">Aparência</h3>
        <div class="card-flex">
          <figure class="card-icon">
            <img src="IMG/Aparencia.png" alt="Ícone representando cuidado com a aparência" width="60" height="60" loading="lazy">
          </figure>
          <p class="card-desc">Prevenir a flacidez e atenuar o envelhecimento em todas as idades.</p>
        </div>
      </article>

      <article class="card" role="group" aria-labelledby="titulo-musculos">
        <h3 id="titulo-musculos">Músculos</h3>
        <div class="card-flex">
          <figure class="card-icon">
            <img src="IMG/Musculo.png" alt="Ícone de músculo facial" width="60" height="60" loading="lazy">
          </figure>
          <p class="card-desc">Aumentar a elasticidade e encorpar os músculos para melhor aparência.</p>
        </div>
      </article>

      <article class="card" role="group" aria-labelledby="titulo-consultas">
        <h3 id="titulo-consultas">Consultas</h3>
        <div class="card-flex">
          <figure class="card-icon">
            <img src="IMG/avaliacao.png" alt="Ícone de prancheta representando avaliação personalizada" width="60" height="60" loading="lazy">
          </figure>
          <p class="card-desc">Avaliação da pele e exercícios individuais e específicos.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<hr class="divider">

<section class="pacotes">
  <div class="wrap">
    <h2 class="titulo">Pacote com 6 consultas</h2>
    <ul class="checks">
      <li>Atendimentos semanais, quinzenais ou mensais</li>
      <li>Entrega de materiais e orientações para prática em casa</li>
    </ul>
    <a class="btn" href="contato#contato">Quero saber mais</a>
  </div>
</section>


  <section class="logo-completa">
  <div class="wrap narrow">
    <img class="logo_final" src="IMG/logo_completa.png" alt="Bartira Bravo — Ginástica Facial">
  </div>
</section>

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

<?php require __DIR__ . '/../inc/footer.php'; ?>
