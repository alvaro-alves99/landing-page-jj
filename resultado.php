<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Concurso JJ - Dia da Mulher</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/reset.css">
        <link rel="stylesheet" href="CSS/estilos.css">
        <link rel="stylesheet" href="CSS/resultado-estilos.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Questrial" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">
    </head>
    <body>
        <?php
            if($_GET){
            $resultado = $_GET["resultado"];

            $conexao = mysqli_connect("IP", "usuario", "senha", "database");

            if (!$conexao) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
        }


         ?>
        <section class="header">
            <div class="header__inner">
                <img src="http://www.jolijoli.com.br/wp-content/uploads/2018/03/logo-joli-joli.png" alt="Logo de Joli Joli">
            </div>
        </section>

        <main class="principal">

            <section class="texto">

                <?php if($resultado == 3): ?>

                <div class="resultado">
                    <h1>Resultado<br>Seu <span>Estilo</span> &nbsp;é</h1>
                    <img class="modelo-img img-romantica" src="http://www.jolijoli.com.br/wp-content/uploads/2018/02/resultado-romantica.png" alt="">
                <div class="titulo-img-container">
                    <img class="titulo-img" src="
http://www.jolijoli.com.br/wp-content/uploads/2018/03/resultado-romantica.png" alt="Romantica escrito">
                </div>
                    <div class="resultado__texto">
                        <p>Aposto que você é sonhadora, extremamente alegre e engraçada.
                        A gente sabe que você não abre mão do clássico batom nude, e que ama de paixão o efeito corado que um blushzinho causa na pele.
                        Tem dias que o menos é mais, e tudo bem ser assim, porque nada é mais incrível do que destacar sua beleza natural. </p>
                    </div>
                </div>

            <?php endif; ?>

            <?php if($resultado == 1): ?>

                <div class="resultado">
                    <h1>Resultado<br>Seu <span>Estilo</span> &nbsp;é</h1>
                    <img class="modelo-img img-ousada" src="http://www.jolijoli.com.br/wp-content/uploads/2018/02/resultado-ousada.png" alt="">
                <div class="titulo-img-container">
                    <img class="titulo-img titulo-ousada" src="http://www.jolijoli.com.br/wp-content/uploads/2018/03/ousada-resultado.png" alt="Romantica escrito">
                </div>
                    <div class="resultado__texto resultado-ousada">
                        <p>Você não gosta de nada que é comum, e muito menos estar igual aos outros. Criar é a sua palavra chave! Você sabe como ninguém um batom vivo junto com sombra beeem intensa. Use esse dom para arrasar! Ouse, abuse e saia ainda mais da sua zona de conforto ;)</p>
                    </div>
                </div>

            <?php endif; ?>

            <?php if($resultado == 2): ?>

                <div class="resultado">
                    <h1>Resultado<br>Seu <span>Estilo</span> &nbsp;é</h1>
                    <img class="modelo-img img-estilosa" src="http://www.jolijoli.com.br/wp-content/uploads/2018/02/resultado-estilosa.png" alt="">
                <div class="titulo-img-container">
                    <img class="titulo-img titulo-estilosa" src="http://www.jolijoli.com.br/wp-content/uploads/2018/03/estilosa-resultado.png" alt="Romantica escrito">
                </div>
                    <div class="resultado__texto resultado-estilosa">
                        <p>Ligada nas tendências, você gosta de estar sempre atenta ao que está na moda. Mas sabe que não precisa ser refém das passarelas, cria e recria a moda da forma que bem entende. Pra você algumas coisas são leis, como o clássico batom vermelho, que não sai da sua bolsa :P</p>
                    </div>
                </div>

            <?php endif; ?>

            </section>

            <section class="form-section">
                <h2>Participe!</h2>
                <p>Agora que você já sabe o seu resultado, que tal concorrer a um kit incrível, repleto de produtos Joli Joli?
                Basta preencher o cadastro que você vai estar automaticamente concorrendo.
                O kit contém batons, máscara de cílios, iluminador, cílios postiço, blush, contorno, lápis para os olhos, e claro nosso delineador super desejado!
                Depois desses prêmios, impossível dizer que você não tem a necessaire dos sonhos :P</p>


                <form class="form" action="#" method="post">

                <?php if(!$_POST): ?>

                    <label for="nome">Nome</label>
                    <input type="text" name="nome" required>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" required>
                    <p>* Fique tranquila(o), não vamos utilizar seus dados pessoais para enviar spam.</p>
                    <input type="submit" name="enviar" value="enviar">

                <?php endif; ?>

                <?php if($_POST):

                    $nome = $_POST['nome'];
                    $email = $_POST['email'];

                    $confere = mysqli_query($conexao, "SELECT * FROM promomulher WHERE email='{$email}'");

                    $conferido = mysqli_fetch_assoc($confere);

                    if(!$conferido){
                        mysqli_query($conexao, "INSERT INTO promomulher (nome, email) VALUES ('{$nome}', '{$email}')");

                        ?>

                        <div class="cadastro-container">
                            <h4>Boa sorte!</h4>
                        </div>

                        <?php

                    }else{
                        ?>

                        <div class="cadastro-container">
                            <h4 style="font-size: 1.4em; width: 100%;">Este e-mail já foi cadastrado</h4>
                        </div>

                <?php
                    }

                    endif;
                    ?>


                </form>

                <section class="redes-section">
                    <p>O <strong>resultado</strong> será divulgado no <strong>dia 26 de março</strong> na nossa página do facebook e no instagram.</p>

                    <img class="recomendamos-img" src="http://www.jolijoli.com.br/wp-content/uploads/2018/03/recomendamos.png" alt="">

                    <div class="produtos__redes">
                        <figure class="batom-figure">
                            <img src="http://www.jolijoli.com.br/wp-content/uploads/2018/03/batom-landing.png" alt="">
                            <figcaption><h4>Batom Matte Velours</h4><br>027 Vintage Rose<br>
                            <a href="https://www.topinternacional.com.br/produto/maquiagem/labios/joli-joli/velours-batom-matte-lip/012-coralista/tamanho-unico/47792" target="_blank">Eu quero!</a>
                            </figcaption>
                        </figure>

                        <figure class="blush-figure">
                            <img src="http://www.jolijoli.com.br/wp-content/uploads/2018/03/blush-landingpage.png" alt="">
                            <figcaption><h4>Artiste Blush</h4><br>01 Rose<br>
                                <a href="https://www.topinternacional.com.br/produto/maquiagem/face/joli-joli/blush-artiste-blush-fard-a-joues/01-rose/tamanho-unico/47838" target="_blank">Eu quero!</a>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </section>
        </main>

    <script src="App/Controller/TesteController.js"></script>
    <script src="App/Scripts/scripts.js"></script>
    <script src="App/View/TesteView.js"></script>
    <script src="App/Model/ResultadoModel.js"></script>
    </body>
</html>
