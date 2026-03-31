// main.js
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Seleção de elementos do Menu Mobile
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.nav');

    // 2. Lógica do Menu Mobile (Hambúrguer)
    if (toggle && nav) {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation(); // Evita conflitos com outros cliques na página
            
            nav.classList.toggle('open');
            
            // Atualiza acessibilidade (Leitores de tela)
            const expanded = nav.classList.contains('open');
            toggle.setAttribute('aria-expanded', expanded);
            toggle.setAttribute('aria-label', expanded ? 'Fechar menu' : 'Abrir menu');
            
            console.log("Menu mobile alternado!");
        });

        // Fechar o menu ao clicar em qualquer link (melhora a experiência)
        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });

        // Fechar ao clicar fora do menu
        document.addEventListener('click', (e) => {
            if (!nav.contains(e.target) && !toggle.contains(e.target)) {
                nav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // 3. Sistema de "Copiar Link" (Para o Acervo)
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('[data-copy]');
        if (!btn) return;

        const url = btn.getAttribute('data-url') || window.location.href;
        
        navigator.clipboard.writeText(url).then(() => {
            const originalText = btn.textContent;
            btn.textContent = 'Link copiado!';
            btn.classList.add('copiado'); // Caso queira estilizar no CSS
            
            setTimeout(() => {
                btn.textContent = originalText || 'COPIAR LINK';
                btn.classList.remove('copiado');
            }, 1800);
        }).catch(err => {
            console.error('Erro ao copiar link: ', err);
        });
    });

    // 4. Ano corrente automático no Rodapé
    const anoElemento = document.getElementById('ano-corrente');
    if (anoElemento) {
        anoElemento.textContent = new Date().getFullYear();
    }
});