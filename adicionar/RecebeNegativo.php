<?php  
include("../conexao.php"); // inclui o arquivo de conexão com BD


$Receptor = $_POST['Receptor'];
$Valor = $_POST['Valor'];
$Descricao = $_POST['Descricao'];
$Data = $_POST['Data'];






$sql = "INSERT INTO pago (receptor, valor, descricao, data_pago, situacao) 
        VALUES ('$Receptor', '$Valor', '$Descricao', '$Data', '1')";



mysqli_query($conn, $sql);

mysqli_close($conn);
header('Refresh: 0.5; url=../index.php');

?>