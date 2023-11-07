<?php
include('conexao.php');
$hoje = date('Y-m');//define a data atual

include('conexao.php');
$sql = "SELECT * FROM receber Where situacao = '1' AND DATE_FORMAT(data_recebido, '%Y-%m') = '$hoje'"; 
$rs = mysqli_query($conn, $sql);
$x = 0;
while ($linha = mysqli_fetch_array($rs)){
$x = $x + $linha['valor'];//pega os valores positivos do banco de dados
}

$sql = "SELECT * FROM pago WHERE situacao = '1' AND DATE_FORMAT(data_pago, '%Y-%m') = '$hoje'"; 
$rs = mysqli_query($conn, $sql);
$y = 0;
while ($linha = mysqli_fetch_array($rs)){
$y = $y + $linha['valor'];//pega os valores negativos do banco de dados
}

$z = $x - $y;//realiza a média e da o valor em z
if($z < 0)
{
    $i = $z * -1;
    $lucro = "- R$". $i;
}else
{
    $lucro = "+ R$". $z;
}


?>