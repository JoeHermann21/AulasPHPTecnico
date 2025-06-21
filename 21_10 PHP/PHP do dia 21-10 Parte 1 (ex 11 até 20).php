//Ex 11

<?php

$tab = 7;

for ($i = 1; $i<=10; $i++){
	echo $tab." x ".$i." = ".$i*$tab."<br>";
}

?> 


//Ex 12
<?php

$sonho = "SONHO";

for ($i = 1; $i<=4; $i++){
        for ($j = 0; $j < $i; $j++) {
            echo $sonho." ";
        }
        echo "<br>";
    }   
?> 

//Ex 13
<?php
$numeros = array(7, -10, 130, 188, 194, -12, -3.7, 177, -9.6, 6, -1.7, -6.2, 7);

$intervalo = array(); 

foreach($numeros as $valor)
{
    if ($valor > 99 && $valor < 201){
    	$intervalo[] = $valor;        
    }
    elseif ($valor == 0){
    	echo "FIM!";
        exit;
    }
}

echo "A quantidade de nº entre 100 e 200 é: ".count($intervalo);

?>

//Ex 14
<?php

$chico = 150;
$juca = 110;

for ($i = 0; $chico>=$juca; $i++){
	$chico = $chico + 2;
	$juca = $juca + 3;
}

echo "São necessários $i anos para Juca ficar maior do que Chico";

?>

//Ex 15
<?php

$massaInicial = 70; 
$massaFinal = 0.10;
$taxaDecaimento = 0.25; 
$tempoIntervalo = 30; 

$tempoTotal = 0;
$massaAtual = $massaInicial;

while ($massaAtual > $massaFinal) {
    $massaAtual *= (1 - $taxaDecaimento);
    $tempoTotal += $tempoIntervalo;
}

echo "Tempo necessário: " . $tempoTotal . " segundos";

?>

//Ex 16
<?php

$numeros = array(7, -10, 130, 188, 194, -12, -3, 177, -9, 6, -1, -6, 7, 8, 68);
$par = array(); 
$impar = array();

foreach($numeros as $valor)
{
    (($valor % 2 == 0) ?  $par[]=$valor : $impar[]=$valor);
}

echo "Pares: ";
print_r($par);
echo "<br><br>Ímpares: ";
print_r($impar);
 
?>

//Ex 17
<?php

$numeros = array(8, 9, 50, 874, 578, 20, 574, 548, 20, 72, 54, 630, 54, 76, 756, 84, 784, 866, 84, 8); 
$par = array(); 
$impar = array();

foreach($numeros as $valor)
{
    (($valor % 2 == 0) ?  $par[]=$valor : $impar[]=$valor);
}

$porcentagemPar = (sizeof($par))*100/20;

echo "O maior número: ".max($numeros);
echo "<br>O menor número: ".min($numeros);
echo "<br>Porcentagem de pares: ".$porcentagemPar." %";
echo "<br>Média: ".(array_sum($numeros)/20);
 
?>

//Ex 18
<?php

$numero1 = array(8, 9, 50, 874, 578, 20, 574, 548, 20, 72); 
$numero2 = array(54, 630, 54, 76, 756, 84, 784, 86, 84, 8); 

$naoComuns = [];

foreach ($numero1 as $numero) {
    if (!in_array($numero, $numero2)) {
        $naoComuns[] = $numero;
    }
}

foreach ($numero2 as $numero) {
    if (!in_array($numero, $numero1)) {
        $naoComuns[] = $numero;
    }
}

echo "Números não comuns aos dois vetores: <br>";
print_r($naoComuns);
?>

//Ex 19
<?php

$matriz = [
			[ 5, 7, 9, 31, 34 ],
			[ 44, 84, 9, 1, 5 ],
            [ 6, 8, 1, 94, 70 ],
            [ 5, 7, 9, 31, 34 ],
			[ 44, 84, 9, 1, 5 ]
		];
            
echo "Elementos da diagonal principal: <br>";
for ($i = 0; $i < 5; $i++) {
    echo $matriz[$i][$i] . " ";
}

?>

//Ex 20
<?php

$matriz = [
			[ 5, 7, 9, 31, 34 ],
			[ 44, 84, 9, 1, 5 ],
            [ 6, 8, 1, 94, 70 ],
            [ 5, 7, 9, 31, 34 ],
			[ 44, 84, 9, 1, 5 ]
		];

function matrizImpares($matriz) {
    $matrizImpares = [];
    foreach ($matriz as $linha) {
        $novaLinha = [];
        foreach ($linha as $numero) {
            $novaLinha[] = ($numero % 2 != 0) ? $numero : 0;
        }
        $matrizImpares[] = $novaLinha;
    }
    return $matrizImpares;
}

function matrizPares($matriz) {
    $matrizPares = [];
    foreach ($matriz as $linha) {
        $novaLinha = [];
        foreach ($linha as $numero) {
            $novaLinha[] = ($numero % 2 == 0) ? $numero : 0;
        }
        $matrizPares[] = $novaLinha;
    }
    return $matrizPares;
}

$matrizPares = matrizPares($matriz);
$matrizImpares = matrizImpares($matriz);

echo "<br>Todos o elementos da matriz: <br>";
print_r($matriz);

echo "<br>Todos o elementos ímpares da matriz: <br>";
print_r($matrizImpares);

echo "<br>Todos o elementos pares da matriz: <br>";
print_r($matrizPares);

?>