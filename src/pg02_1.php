<h1>pg02_1.php - 12/03/26</h1>
<?php
$idade = 34;
echo "idade = $idade<br>";

$cep = "02280335";
echo "cep = $cep<br>";

$preco = 524.7543;
echo "preco = R$ ";
echo number_format($preco,2,",",".");
echo "<hr>";
$cor ="orange";
echo "cor = $cor<br>";
echo 'cor = $cor<br>';
echo "<h2> style ='color:$cor;'>Titulo 2</h2>";
$ativo = true;
echo "está ativo? $ativo <br>";
echo "<hr>";
echo "qual era a cor: ".$cor;
echo "<hr>";
$nota = 7.8;
echo "nota = ".$nota - (int)$nota;
?>
<h2 style="color:red;">Titulo 2</h2>


