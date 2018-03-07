<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tabela Participantes</title>
        <link rel="shortcut icon" type="image/jpg" href="http://homolog.tfs.com.br/wp-content/uploads/2017/10/favicon.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php

        $conexao = mysqli_connect("IP", "USER", "SENHA", "DATABASE");

        if (!$conexao) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        $query = mysqli_query($conexao, "SELECT * FROM promomulher");


        $resultados = mysqli_fetch_all($query);

        $total = 0;
         ?>

         <div class="container">


             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Nome</th>
                         <th>Email</th>
                     </tr>
                     </thead>
                     <tbody>
                         <?php foreach($resultados as $resultado):
                             $total++;
                              ?>
                             <tr>
                                 <th><?= $resultado[0]?></th>
                                 <th><?= $resultado[1]?></th>
                                 <th><?= $resultado[2]?></th>
                             </tr>

                         <?php endforeach; ?>

                     </tbody>
                     <tfoot>
                         <tr>
                             <th>TOTAL: <?= $total ?></th>
                         </tr>
                     </tfoot>

             </table>

         </div>

    </body>
</html>
