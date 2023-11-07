<?php  
include("../conexao.php"); // inclui o arquivo de conexão com BD


$Pagador = $_POST['Pagador'];
$Valor = $_POST['Valor'];
$Descricao = $_POST['Descricao'];
$Data = $_POST['Data'];






$sql = "INSERT INTO receber (pagador, valor, descricao, data_recebido, situacao) 
        VALUES ('$Pagador', '$Valor', '$Descricao', '$Data', '1')";



mysqli_query($conn, $sql);

mysqli_close($conn);
header('Refresh: 0.5; url=../index.php');

?>