//ATRIBUINDO EVENTOS AOS ELEMENTOS DO DOM
var opcao1 = $(".pergunta-1");
var opcao2 = $(".pergunta-2");
var opcao3 = $(".pergunta-3");

opcao1.addEventListener("click", function(){
    let opcao = new TesteController(1);
    console.log(opcao);
});
opcao2.addEventListener("click", function(){alert(2)});
opcao3.addEventListener("click", function(){alert(3)});
