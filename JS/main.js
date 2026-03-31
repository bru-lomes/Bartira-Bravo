// main.js

// ===== Menu mobile acessível =====
const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.nav');
const menu = document.getElementById('menu-principal');

if (toggle && nav && menu) {
  function openMenu() {
    nav.classList.add('open');
    toggle.setAttribute('aria-expanded', 'true');
    toggle.setAttribute('aria-label', 'Fechar menu');
  }
  function closeMenu() {
    nav.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Abrir menu');
  }

  toggle.addEventListener('click', () => {
    nav.classList.contains('open') ? closeMenu() : openMenu();
  });

  // Fecha com Esc
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('open')) {
      closeMenu();
      toggle.focus();
    }
  });

  // Fecha ao clicar fora (toque)
  document.addEventListener('click', (e) => {
    if (!nav.contains(e.target) && !toggle.contains(e.target)) {
      closeMenu();
    }
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
