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
          <a class="nav-link text-success" href="../index.php">Money$</a> 
      </h1>
</header>   
<body>
    <?php
        $mes= $_GET["Mes"];
        include('MenuTransferencia.php');
        include('../conexao.php')
    ?> 

    
<main class=" container-fluid bg-dark  p-5 text-center">
<h2 class="text-center mt-3 text-success">Ganhos</h2>
    <div class="container mt-4">
        <table class="table table-bordered table table-dark">
            <thead>
                <th>Nome do pagador</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php
                 
                    $sql = "SELECT * FROM receber WHERE situacao = '1' AND DATE_FORMAT(data_recebido, '%Y-%m') = '$mes'";
                    $rs = mysqli_query($conn, $sql);
                    while ($linha = mysqli_fetch_array($rs)) {
               
                ?>
                <tr>
                    <td><?php echo $linha['pagador'] ?></td>
                    <td><?php echo $linha['valor']?></td>
                    <td><?php echo $linha['descricao'] ?></td>
                    <td><?php echo date('d/m/Y', strtotime ($linha['data_recebido'])) ?></td>
                            
                    <td>
                        <a class="btn btn-danger" href='#' onclick='excluir("<?php echo $linha[0] ?>")'> Excluir</a>                
                    </td>
                </tr>
                <script>
                    function excluir (ID){
                        if (confirm('Você realmente deseja excluir esta linha?'))
                        location.href = "ExcluiGanhos.php?ID=" + ID;       }
                </script>         
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</main>

</body>

</html>


</body>
</html>