//ATRIBUINDO EVENTOS AOS LI's (QUE SERAO AS OPCOES DO TESTE)

function atribuiEvento(){

var opcoes = document.querySelectorAll(".ul-perguntas li");

opcoes.forEach((escolha, i) =>{
    escolha.addEventListener("click", function(){
        let opcao = new TesteController(i);
    });
});

}

atribuiEvento();
