
<?php require __DIR__ . '/inc/header.php'; ?>


<link rel="stylesheet" href="CSS/odontologia.css">
<link rel="stylesheet" href="CSS/acessibilidade.css">

<section class="page-hero">
  <div class="wrap narrow">
    <h1 class="titulo">Odontologia</h1>
    <p class="sub">Saúde bucal integrada à harmonia do rosto</p>
  </div>
</section>

<section class="wrap narrow intro-odonto">
  <p>Considero a boca <em>“o coração do rosto”</em>, porque abriga o sistema mastigatório, essencial para o bom funcionamento do organismo. É fundamental ter os dentes, respectivas raízes e gengivas, saudáveis para apresentar um rosto harmônico.</p>
</section>

<hr class="divider">

<section class="wrap destaque-djalma">
  <h2 class="nome">DR. DJALMA PEREIRA NUNES FILHO</h2>

  <p class="bio">
    Mestre e Doutor em <strong>Implantodontia</strong>, conta com uma equipe de profissionais especializados em desenvolver procedimentos
    clínicos e laboratoriais na Reabilitação Oral com materiais e técnicas de vanguarda, suprindo as necessidades reparadoras
    funcionais e estéticas do sistema estomatognático. Os pacientes têm o privilégio de se beneficiarem com procedimentos atuais no
    campo da Medicina Oral.
  </p>

  <ul class="contatos">
    <li><strong>E-mail:</strong> <a href="mailto:consultoriodjalmanunes@gmail.com">consultoriodjalmanunes@gmail.com</a></li>
    <li><strong>Telefone:</strong> <a href="tel:+551129503479">11.2950-3479</a></li>
  </ul>
</section>

<hr class="divider">

<section class="wrap cards-profissionais" aria-label="Equipe de profissionais">
  <article class="card-prof">
    <h3 class="nome">DR. LUIZ FERNANDO NUNES</h3>
    <ul class="contatos">
      <li><strong>E-mail:</strong> <a href="mailto:clinicasorrisoriart@gmail.com">clinicasorrisoriart@gmail.com</a></li>
      <li><strong>Tel:</strong> <a href="tel:+551129710272">11.2971-0272</a></li>
    </ul>
  </article>

  <article class="card-prof">
    <h3 class="nome">DRA. DENISE PATREZZE NUNES</h3>
    <p class="area">Odontologia</p>
    <ul class="contatos">
      <li><strong>E-mail:</strong> <a href="mailto:consultoriodjalmanunes@gmail.com">consultoriodjalmanunes@gmail.com</a></li>
      <li><strong>Tel:</strong> <a href="tel:+551129503479">11.2950-3479</a></li>
    </ul>
  </article>

  <article class="card-prof">
    <h3 class="nome">DR. MARCELO NUNES</h3>
    <ul class="contatos">
      <li><strong>E-mail:</strong> <a href="mailto:drnunes@terra.com.br">drnunes@terra.com.br</a></li>
      <li><strong>Tel:</strong> <a href="tel:+551123326091">11.2332-6091</a></li>
    </ul>
  </article>
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
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ginástica Facial - Bartira Bravo</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/acessibilidade.css">

</html>
