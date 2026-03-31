document.getElementById('btn-acessibilidade').addEventListener('click', function() {
    const menu = document.getElementById('acessibilidade-menu');
    menu.classList.toggle('hidden');
});

document.addEventListener('DOMContentLoaded', () => {
  // Acessibilidade: navegação com teclado nos cartões
  const cards = document.querySelectorAll('.card-produto');
  cards.forEach(card => {
    card.setAttribute('tabindex', '0');
    card.addEventListener('keydown', e => {
      if (e.key === 'Enter') {
        const btn = card.querySelector('.btn-ver');
        if (btn) btn.click();
      }
    });
  });

  // Foco no campo de busca ao carregar
  const inputBusca = document.querySelector('input[name="busca"]');
  if (inputBusca) inputBusca.focus();

  // Feedback tátil nos botões e links
  document.querySelectorAll('button, a').forEach(el => {
    el.addEventListener('mousedown', () => el.classList.add('pressionado'));
    el.addEventListener('mouseup', () => el.classList.remove('pressionado'));
    el.addEventListener('mouseleave', () => el.classList.remove('pressionado'));
  });

  // Leitura seletiva com duplo clique
  document.body.addEventListener('dblclick', () => {
    const textoSelecionado = window.getSelection().toString();
    if (textoSelecionado.trim()) {
      const fala = new SpeechSynthesisUtterance(textoSelecionado);
      fala.lang = 'pt-BR';
      fala.rate = 1;
      fala.pitch = 1;
      window.speechSynthesis.cancel();
      window.speechSynthesis.speak(fala);
    }
  });
});

// Alternar modo contraste
function toggleContraste() {
  document.body.classList.toggle('modo-contraste');
}

// Escalonamento proporcional de fonte com em
let fatorFonte = 1;

function alterarFonte(acao) {
  if (acao === '+') fatorFonte += 0.1;
  if (acao === '-') fatorFonte -= 0.1;
  if (fatorFonte < 0.7) fatorFonte = 0.7;
  if (fatorFonte > 1.6) fatorFonte = 1.6;
  document.documentElement.style.fontSize = fatorFonte + 'em';
}

// Leitura em voz alta da página (audiodescrição do conteúdo)
function lerPagina() {
  const sintetizador = window.speechSynthesis;
  if (sintetizador.speaking) sintetizador.cancel();

  const conteudo = document.getElementById('conteudo-principal');
  const texto = conteudo ? conteudo.innerText : document.body.innerText;

  const fala = new SpeechSynthesisUtterance(texto);
  fala.lang = 'pt-BR';
  fala.rate = 1;
  fala.pitch = 1;

  sintetizador.speak(fala);
}

// Parar leitura atual
function pararLeitura() {
  const sintetizador = window.speechSynthesis;
  if (sintetizador.speaking) sintetizador.cancel();
}

