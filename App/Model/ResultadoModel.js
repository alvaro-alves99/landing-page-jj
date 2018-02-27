//ESSA CLASSE CALCULA O RESULTADO, DEFININDO A VAR resultadoFinal

class Resultado{
    static calcula(){
        let resultado0 = resultado.filter(function(n){
            return n == 0;
        });

        let resultado1 = resultado.filter(function(n){
            return n == 1;
        });

        let resultado2 = resultado.filter(function(n){
            return n == 2;
        });

        if(resultado0.length > resultado1.length && resultado0.length > resultado2.length){
            var resultadoFinal = 0;
        }else if(resultado1.length > resultado0.length && resultado1.length > resultado2.length){
            var resultadoFinal = 1;
        }else if(resultado2.length > resultado0.length && resultado2.length > resultado1.length){
            var resultadoFinal = 2;
        }else{
            var resultadoFinal = 1;
        }

        console.log(resultado0);
        console.log(resultado1);
        console.log(resultado2);

        ResultadoView.monta(resultadoFinal);

    }

}
