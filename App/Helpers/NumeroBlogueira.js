class Helpers{
    constructor(){
        throw new Error ("Classe Helpers nao recebe constructor");
    }

static NumeroBlogueira(blg){
    let numBlogueira = 0;

    if(blg == "nat"){
        numBlogueira = 3;
    }

    if(blg == "flavia"){
        numBlogueira = 1;
    }

    if(blg == "marbia"){
        numBlogueira = 2;
    }

    if(blg == "tami"){
        numBlogueira = 4;
    }

    if(blg == "rafa"){
        numBlogueira = 5;
    }

    return numBlogueira;
}

}
