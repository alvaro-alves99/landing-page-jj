<!DOCTYPE html>
<html>
    <?php include('includes/head.php'); ?>
    <body>
        <?php

        include('includes/conexao-banco.php');

        if($_GET){
            $tabela = $_GET['tabela'];
        }

        if($tabela == 'Marbia'){
            $table = 'promo_marbia';
        }
        if($tabela == 'Nat'){
            $table = 'promo_nat_theodoro';
        }
        if($tabela == 'Rafaela'){
            $table = 'promo_rafaela';
        }
        if($tabela == 'Tami'){
            $table = 'promo_tami_halabi';
        }
        if($tabela == 'Flavia'){
            $table = 'promo_flavia_gil';
        }
        if($tabela == 'Geral'){
            $table = 'promomulher';
        }

        $query = mysqli_query($conexao, "SELECT * FROM {$table}");
        $resultados = mysqli_fetch_all($query);

         ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../tabela-participantes/tabela.php?tabela=Marbia" class="nav-link">Marbia</a>
          </li>
          <li class="nav-item">
            <a href="../tabela-participantes/tabela.php?tabela=Geral" class="nav-link">Geral</a>
          </li>
          <li class="nav-item">
            <a href="../tabela-participantes/tabela.php?tabela=Tami" class="nav-link">Tami Halabi</a>
          </li>
          <li class="nav-item">
            <a href="../tabela-participantes/tabela.php?tabela=Nat" class="nav-link">Nat Theodoro</a>
          </li>
          <li class="nav-item">
            <a href="../tabela-participantes/tabela.php?tabela=Flavia" class="nav-link">Flavia Gil</a>
          </li>
          <li class="nav-item">
            <a href="../tabela-participantes/tabela.php?tabela=Rafaela" class="nav-link">Rafaela Coelho</a>
          </li>
        </ul>
      </div>
</nav>



         <div class="container">

             <div class="text-center">
                 <h1 class="mt-5 font-weight-light">Participantes - <?= $tabela ?></h1>
                     <h4 class="mb-5 font-weight-light"><span class="badge badge-primary font-weight-light">Total: </span> <?= mysqli_num_rows($query);?></h4>
             </div>

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
                             <th>TOTAL: <?= mysqli_num_rows($query); ?></th>
                         </tr>
                     </tfoot>

             </table>

         </div>

    </body>
</html>
