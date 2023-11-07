<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">


    <title>Document</title>
</head>
<header class="container-fluid bg-black p-3">
      <h1 class="text-center">
          <a class="nav-link text-success" href="index.php">Money$</a> 
      </h1>
</header>

<body onload="valor()">
<?php
include('MenuHome.php');
include('valores.php');
?> 

<main class=" container-fluid bg-dark  p-5 text-center">
    <a href="ListaTransferencia/Ganhos.php?Mes=<?php echo $hoje ?>"><div class="valorPositivo col-sm-12 p-3 h5 border-bottom"><?php echo'Ganhos: + R$', $x?></div></a>
    <a href="ListaTransferencia/Despesas.php?Mes=<?php echo $hoje ?>"><div class="valorNegativo col-sm-12 p-3 h5 border-bottom "><?php echo'Despesas: - R$', $y?></div></a>
    <div id="resto" class="col-sm-12 p-3 h5"><?php echo'Lucro: ',  $lucro?></div>  

    <button type="button" id="circulo" data-bs-toggle="dropdown"><h1 id ="mais">+</h1></button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="adicionar/CadastraPositivo.php">Ganho</a></li>
        <li><a class="dropdown-item" href="adicionar/CadastroNegativo.php">Despesa</a></li>
      </ul>

</main>


</body>
<script>
            function valor(){
                var p = document.querySelector('div#resto')
                var y = document
                if (<?php echo $z ?> >=0){
                    p.style.color= 'green'
                }else{
                    p.style.color= 'red'
                }

            }

        </script> 
</html>