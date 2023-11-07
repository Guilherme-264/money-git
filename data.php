<?php
include('conexao.php');
$hoje = date('Y-m');
echo $hoje;
$x = 0;

$sql = "SELECT * FROM receber WHERE DATE_FORMAT(data_recebido, '%Y-%m') = '$hoje'"; 
$rs = mysqli_query($conn, $sql);
while ($linha = mysqli_fetch_array($rs)){
$x = $x + $linha['valor'];//pega os valores positivos do banco de dados
}
?>
<br>
<?php
echo $x;
?> 