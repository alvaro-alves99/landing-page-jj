var $ = document.querySelector.bind(document);
var resultado = [];
var numPergunta = 0;

class TesteController{
    constructor(escolha){
        this.escolha=escolha;
        this.adicionaEscolha(escolha);
    }

    adicionaEscolha(escolha){
        console.log(`foi essa escolha mesmo que vc escolheu: ${escolha}`);

        resultado.push(escolha);
        TesteView.apagaAtual();
        numPergunta++;
        console.log(numPergunta);
    }


}
