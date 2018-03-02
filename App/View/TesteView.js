//ESSA CLASSE APAGA O CONTEUDO DA DIV COM CLASSE "teste-changes" E ESCREVE NOVAS PERGUNTAS E OPCOES

class TesteView{

     static apagaAtual(){
         let containerTeste = $(".teste-changes");
         containerTeste.classList.add("--opacity0");
         setTimeout(function(){
             containerTeste.innerHTML = "";
         }, 1000)

     }

     static constroiNovo(numPergunta){
         let containerTeste = $(".teste-changes");
         containerTeste.classList.remove("--opacity0");
         if(numPergunta == 0){
             containerTeste.innerHTML = `
             <h3 style="font-size:1.3em"><span>2</span><br>Pra Onde seria a sua viagem dos sonhos?</h3>
             <ul class="ul-perguntas">
                 <li class="pergunta-1 li--imagem1--segunda li--transition">Nova York</li>
                 <li class="pergunta-2 li--imagem2--segunda li--transition">Paris</li>
                 <li class="pergunta-3 li--imagem3--segunda li--transition">Londres</li>
             </ul>
             `;
         }

         if(numPergunta == 1){
             containerTeste.innerHTML = `
             <h3><span>3</span><br>Qual produto você não vive sem?</h3>
             <ul class="ul-perguntas">
                 <li style="font-size:1.8em; line-height:2.9;"class="pergunta-1 li--imagem1--terceira li--transition">Delineador</li>
                 <li class="pergunta-2 li--imagem2--terceira li--transition">Batom</li>
                 <li class="pergunta-3 li--imagem3--terceira li--transition">Rímel</li>
             </ul>
             `;
         }

         if(numPergunta == 2){
             containerTeste.innerHTML = `
             <h3 style="font-size:1.3em"><span>4</span><br>Qual é o seu programa favorito para o final de semana?</h3>
             <ul class="ul-perguntas">
                 <li class="pergunta-1 li--imagem1--quarta li--transition">Show</li>
                 <li class="pergunta-2 li--imagem2--quarta li--transition">Cinema</li>
                 <li class="pergunta-3 li--imagem3--quarta li--transition">Balada</li>
             </ul>
             `;
         }

         if(numPergunta == 3){
            Resultado.calcula();
         }

         atribuiEvento();
     }
}

//ESSA CLASSE MOSTRA O RESULTADO DE ACORDO COM O VALOR DE resultadoFinal, QUE É DEFINIDO NA CLASSE Resultado(Model)

class ResultadoView{
    static monta(resultadoFinal){
        let containerTeste = $(".teste-changes");
        if(resultadoFinal == 0){
            window.location.href = "./resultado.php?resultado=1";
        }

        if(resultadoFinal == 1){
            window.location.href = "./resultado.php?resultado=2";
        }

        if(resultadoFinal == 2){
            window.location.href = "./resultado.php?resultado=3";
        }
    }

}
