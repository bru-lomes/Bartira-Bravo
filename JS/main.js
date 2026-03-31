// main.js

// ===== Menu mobile acessível =====
const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.nav');
const menu = document.getElementById('menu-principal');

const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.nav');

if (toggle && nav) {
  toggle.addEventListener('click', (e) => {
    e.stopPropagation(); // Evita fechar imediatamente
    nav.classList.toggle('open');
    const expanded = nav.classList.contains('open');
    toggle.setAttribute('aria-expanded', expanded);
  });
}


// ===== “Copiar link” (cards do acervo) =====
document.addEventListener('click', (e) => {
  const btn = e.target.closest('[data-copy]');
  if (!btn) return;
  const url = btn.getAttribute('data-url') || window.location.href;
  navigator.clipboard.writeText(url).then(() => {
    const original = btn.textContent;
    btn.textContent = 'Link copiado!';
    setTimeout(() => (btn.textContent = original || 'COPIAR LINK'), 1800);
  });
});

// ===== Ano corrente no rodapé =====
const ano = document.getElementById('ano-corrente');
if (ano) ano.textContent = new Date().getFullYear();
