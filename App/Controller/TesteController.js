var $ = document.querySelector.bind(document);
//NESSA VARIAVEL (resultado) ESTAO CONTIDAS AS ESCOLHAS DO USUARIO, POR EXEMPLO: [1, 2, 3.. etc]
var resultado = [];
//ESSA VARIAVEL INDICA QUAL É A PERGUNTA QUE O USUÁRIO ESTA NO MOMENTO, EXEMPLO: 0 => 1 PERGUNTA, 1 => 2 PERGUNTA etc
var numPergunta = 0;


//ESSE CONTROLLER É CRIADO COM O CLICK DO USUARIO EM UMA DAS OPCOES (LI's)
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
