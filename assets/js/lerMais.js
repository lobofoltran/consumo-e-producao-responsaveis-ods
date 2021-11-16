function lerMais () {
    let lerMais = document.getElementById('lerMais');
    let template = '';
    template = `<p class="lead">
        O foco dos supermercados em todo o país está nos clientes que esperam sentir uma conexão pessoal com a empresa, porque ela é um componente essencial da comunidade.
        Por isso, ao avaliar seus processos e procedimentos atuais, é importante visualizá-los pela perspectiva de seus clientes. A pergunta que deve ser feita é: suas ações criam uma imagem positiva na comunidade? 
        Uma forma efetiva de ajudar as pessoas é reduzir as perdas com os produtos vencidos. 
        Segundo uma pesquisa, os supermercados brasileiros desperdiçaram, em 2017, o equivalente a R$ 3,9 bilhões em alimentos.
        Imagine como esse valor poderia ser reinvestido nos negócios em forma de melhores salários, expansão, contratações, marketing etc. 
         Ou ainda, ao invés de produzir toneladas de lixo, esse alimento poderia ser doado para pessoas carentes.</p>
        <p class="lead-mais">
        <button class="btn btn-lg btn-secondary fw-bold border-white bg-white" id="lerMenos" onclick="setTimeout(lerMenos, 100)">Ler menos</button>`
    lerMais.innerHTML = template;
}

function lerMenos () {
    let lerMais = document.getElementById('lerMais');
    let template = '';
    template = `<p class="lead" id="">
        Objetivo: Assegurar padrões de produção e de consumo sustentáveis. Operações de varejo são criadas
        com o negócio em mente.
        Procedimentos são criados para que as lojas funcionem da maneira mais eficiente e econômica.
        No entanto, quando esses processos são definidos, muitos consideram apenas a realidade interna da empresa.
        Essa mentalidade mudou drasticamente em 2020...
        </p>
        <p class="lead-mais">
        <button class="btn btn-lg btn-secondary fw-bold border-white bg-white" id="" onclick="setTimeout(lerMais, 100)">Ler mais</button>
        </p>`
    lerMais.innerHTML = template;
}