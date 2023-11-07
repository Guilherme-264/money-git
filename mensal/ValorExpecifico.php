<form method="POST">
    <input type="month" name="mes">
    <input type="submit" value="Pesquisar">
</form>
<?php
    $mes = date('Y-m');//define a data atual
?>

<?php
include('../conexao.php');
if (!empty($_POST['mes'])) {
    $mes = $_POST['mes'];
    $sql = "SELECT * FROM receber WHERE situacao = '1' AND DATE_FORMAT(data_recebido, '%Y-%m') = '$mes'";
  
} else {
$sql = "SELECT * FROM receber"; 
}
$rs = mysqli_query($conn, $sql);
$x = 0;
while ($linha = mysqli_fetch_array($rs)) {
$x = $x + $linha['valor'];//pega os valores positivos do banco de dados
}
if (!empty($_POST['mes'])) {
    $mes = $_POST['mes'];
    $sql = "SELECT * FROM pago WHERE situacao = '1' AND DATE_FORMAT(data_pago, '%Y-%m') = '$mes'";
  
} else {
$sql = "SELECT * FROM pago"; 
}
$rs = mysqli_query($conn, $sql);
$y = 0;
while ($linha = mysqli_fetch_array($rs)) {
$y = $y + $linha['valor'];//pega os valores positivos do banco de dados
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