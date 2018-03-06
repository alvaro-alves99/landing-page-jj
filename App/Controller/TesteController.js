var $ = document.querySelector.bind(document);
//NESSA VARIAVEL (resultado) ESTAO CONTIDAS AS ESCOLHAS DO USUARIO, POR EXEMPLO: [1, 2, 3.. etc]
var resultado = [];
//ESSA VARIAVEL INDICA QUAL É A PERGUNTA QUE O USUÁRIO ESTA NO MOMENTO, EXEMPLO: 0 => 1 PERGUNTA, 1 => 2 PERGUNTA etc
var numPergunta = 0;
//ESSE CONTROLLER É CRIADO COM O CLICK DO USUARIO EM UMA DAS OPCOES (LI's)

//FUNCAO PARA CAPTURAR PARAMETROS GET
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

var blg = getUrlParameter('blg');

if(!blg){
    blg = 0;
}

class TesteController{
    constructor(escolha){
        this.escolha=escolha;
        this.adicionaEscolha(escolha);
    }

    adicionaEscolha(escolha){
        console.log(`foi essa escolha mesmo que vc escolheu: ${escolha}`);

        resultado.push(escolha);
        TesteView.apagaAtual();
        setTimeout(function(){
            TesteView.constroiNovo(numPergunta);
            numPergunta++;
            console.log(numPergunta)
        }, 1050);

        }
    }
