class TesteView{

     static apagaAtual(){
         let containerTeste = $(".teste-changes");
         containerTeste.innerHTML = "";

         this.constroiNovo(numPergunta);
     }

     static constroiNovo(numPergunta){
         let containerTeste = $(".teste-changes");
         if(numPergunta == 0){
             containerTeste.innerHTML = `
             <h3>2 - Segunda pergunta</h3>
             <ul class="ul-perguntas">
                 <li class="pergunta-1">Banana</li>
                 <li class="pergunta-2">Uva</li>
                 <li class="pergunta-3">Maçã</li>
             </ul>
             `;


         }

         if(numPergunta == 1){
             containerTeste.innerHTML = `
             <h3>3 - Terceira pergunta</h3>
             <ul class="ul-perguntas">
                 <li class="pergunta-1">Pêssego</li>
                 <li class="pergunta-2">Maracujá</li>
                 <li class="pergunta-3">Melancia</li>
             </ul>
             `;

         }

         if(numPergunta == 2){
             containerTeste.innerHTML = `
             <h3>4 - Quarta pergunta</h3>
             <ul class="ul-perguntas">
                 <li class="pergunta-1">Abacate</li>
                 <li class="pergunta-2">Mamão</li>
                 <li class="pergunta-3">Tomate</li>
             </ul>
             `;
         }

         if(numPergunta == 3){
             containerTeste.innerHTML = `
             <h3>5 - Quinta pergunta</h3>
             <ul class="ul-perguntas">
                 <li class="pergunta-1">Laranja</li>
                 <li class="pergunta-2">Tamarindo</li>
                 <li class="pergunta-3">Jaboticaba</li>
             </ul>
             `;

         }

         if(numPergunta == 4){
             Resultado.calcula();
         }

         atribuiEvento();


     }
}

class ResultadoView{
    static monta(resultadoFinal){
        let containerTeste = $(".teste-changes");
        if(resultadoFinal == 0){
            containerTeste.innerHTML = `
            <h3>Voce é muito a primeira opção</h3>
            `;
        }

        if(resultadoFinal == 1){
            containerTeste.innerHTML = `
            <h3>Voce é muito a segunda opção</h3>
            `;
        }

        if(resultadoFinal == 2){
            containerTeste.innerHTML = `
            <h3>Voce é muito a terceira opção</h3>
            `;
        }
    }

}
