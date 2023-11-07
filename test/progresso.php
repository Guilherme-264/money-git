<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body onload="valor()">
<header class="container-fluid bg-black p-3">
      <h1 class="text-center">
          <a class="nav-link text-success" href="../index.php">Money$</a> 
      </h1>
</header>
<?php
include('../valores.php');
include('../MenuHome.php');

    $i = $x + $y;
    $porx = ($x * 100) / $i;
    $pory = ($y * 100) / $i;
    ?>
<main class=" container-fluid bg-dark  p-5 text-center">

<div class="container row mt-3"> 
    <div class="col-3 bg-danger border border-secondery me-5"><a href="../ListaTransferencia/Ganhos.php?Mes=<?php echo $hoje ?>">
        Ganhos
    </a></div>


    <div class="progress col-8 bg-dark" style="height:30px">
        <div class="progress-bar bg-success" style="width:<?php echo $porx ?>%">
            R$<?php echo $x ?>
        </div>
        <div class="progress-bar bg-danger" style="width:<?php echo $pory ?>%">
            R$<?php echo $y?>
        </div>
    </div>
    <div id="resto" class="col-12 p-3 h5"><?php echo'Lucro: ',  $lucro?></div>  

</div>
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

