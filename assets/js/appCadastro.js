/* ESBOÇO DE FUNÇÕES:

CRIAR VALIDADOR 

PÁGINA DE CADASTRADO COM SUCESSO com endereço para pag de login
.*/

 function paisSelecionado() {
    pais = document.getElementById('pais').value
    if (pais == 1) {
        new dgCidadesEstados({
            cidade: document.getElementById('cidade'),
            estado: document.getElementById('estado'),
            estadoVal: '',
            cidadeVal: ''
        })
    }
}

