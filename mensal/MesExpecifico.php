<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style.css">


    <title>Document</title>
</head>
<header class="container-fluid bg-black p-3">
      <h1 class="text-center">
          <a class="nav-link text-success" href="../index.php">Money$</a> 
      </h1>
</header>

<body onload="valor()">
<?php
include('MenuExpecifico.php');
?>
<main class=" container-fluid bg-dark  p-5 text-center">

<?php
include('ValorExpecifico.php')
?>
    <a href="../ListaTransferencia/Ganhos.php?Mes=<?php echo $mes?>"><div class="valorPositivo col-sm-12 p-3 h5 border-bottom"><?php echo'Ganhos: + R$', $x?></div></a>
    <a href="../ListaTransferencia/Despesas.php?Mes=<?php echo $mes?>"><div class="valorNegativo col-sm-12 p-3 h5 border-bottom "><?php echo'Despesas: - R$', $y?></div></a>
    <div id="resto" class="col-sm-12 p-3 h5"><?php echo'Lucro: ',  $lucro?></div> 
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
