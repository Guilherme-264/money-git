<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="../stylesheet" href="style.css">


    <title>Document</title>
</head>
<header class="container-fluid bg-black p-3">
      <h1 class="text-center">
          <a class="nav-link text-success" href="../index.php">Money$</a> 
      </h1>
</header>
<body>
    <?php
        include('MenuAdicionar.php');
    ?> 
    <main class=" container-fluid bg-dark  p-5 text-center">

    <form action="RecebeNegativo.php" method="POST">
        <div class="container">    
            <h2 class="text-success">Cadastro de Despesa</h2>


            <div class="form-group text-white mt-4">
                Nome do receptor <input class="form-control" type="text" name="Receptor">
            </div>
            <div class="form-group text-white mt-3">
                Valor <input class="form-control" type="number" name="Valor">
            </div>
            <div class="form-group text-white mt-3">
                Descrição: <input class="form-control" type="text" name="Descricao">
            </div>
            <div class="form-group text-white mt-3">
                Data: <input class="form-control" type="date" name="Data">
            </div>


            <input class="btn btn-success mt-4" type="submit" value="Cadastrar" name="btnEnviar">
        </div>    
    </form>
    </main>
</body>    