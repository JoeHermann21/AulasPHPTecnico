//Ex1

<?php

$a = 5;
$b = 4;
$c = 2;

$ordem = array($a,$b,$c);

asort($ordem);

foreach($ordem as $valor){
    echo $valor." ";
}

?>

//Ex2
<?php

$n1 = 10;
$n2 = 9;
$n3 = 7.5;
$n4 = 3;

$media = ($n1 + $n2 + $n3 + $n4)/4;

if ($media>=7){
	echo "Aprovado! Boas férias ;)";
}else{
	echo "REPROVAADO! - Madruga, Seu";
}

?>

//Ex3
<?php

$a = 69528;
$b = 197;

if($a>$b){
	echo "A é maior que B";
}else{
	echo "A é menor que B";
}

?>

//Ex4
<?php

$a = 1;
$b = 3;
$c = 5;
$d = 2;

$somaAC = $a + $c;
$multBD = $b * $d;

if($somaAC>$multBD){
	echo "A+C é maior que B+D";
}elseif($somaAC<$multBD){
	echo "A+C é menor que B+D";
}else{
	echo "A+C é igual a B+D";
}

?>

//Ex5
<?php

$sexo = "f";
$altura = 1.83;

if(($sexo == "M") || ($sexo == "m")){
	$pesoIdeal = (72.7 * $altura) - 58;
    echo "Seu peso ideal seria $pesoIdeal";
}elseif(($sexo == "F") || ($sexo == "f")){
	$pesoIdeal = (62.1 * $altura) - 44.7 ;
    echo "Seu peso ideal seria $pesoIdeal";
}else{
	echo "Valor inválido";
}

?>

//Ex6
<?php

$salario = 300;

if($salario<=300){
	$reajuste = $salario * 0.5;
    echo "O salário com reajuste é ".($reajuste+$salario);
}else{
	$reajuste = $salario * 0.3;
    echo "O salário com reajuste é ".($reajuste+$salario);
}

?>

//Ex7
<?php

$num = 10; 
$soma = 0;
$contador = 0;
$numeroAtual = $num + 1;
    
    for ($i = 0; $contador < 50; $i++) {
        if ($numeroAtual % 2 == 0) {
            $soma += $numeroAtual;
            $contador++;
        }
        $numeroAtual++;
    }

echo "A soma dos próximos 50 números pares após $num é: ".$soma; 

?>

//Ex8
<?php

$tab = 5;

for ($i = 0; $i<=10; $i++){
	echo $tab." x ".$i." = ".$i*$tab."<br>";
}

?>

//Ex9
<?php

	$salario = 1000; 
    $aumento = 0.15;
	$anoIni = 2005;
	
	for ($i = $anoIni + 1; $i <= 2010; $i++) {
		$salario = $salario + ($salario * $aumento);
		echo "Salario em $i R$ ".number_format($salario, 2, ',', '.')."<br>";
		$aumento = 2 * $aumento;
	}
	
	echo "<br>O salário atual do funcionário é: R$ ". number_format($salario, 2, ',', '.');
?>

//Ex10
<?php

$op = "soma";
$n1 = 94;
$n2 = 79;

if ($op == "soma") {
    echo "A soma de $n1 e $n2 é: ".($n1 + $n2);
} elseif ($op == "subtracao") {
    echo "A subtração de $n1 e $n2 é: ".($n1 - $n2);
} elseif ($op == "multiplicação") {
    echo "A multiplicação de $n1 e $n2 é: ".($n1 * $n2);
} elseif ($op == "divisão") {
    echo "A divisão de $n1 e $n2 é: ".($n1 / $n2);
} else {
    echo "Operação inválida";
}

?>

//Ex 11
<?php
		$peso = 80;
		$altura = 1.90;
		
		$imc = $peso/($altura * $altura);
		
		echo "Seu peso é $peso e sua altura é $altura ";
		echo "<br>Seu IMC é: ";
		
		if($imc < 17){
			echo "Muito abaixo de peso";
		}elseif ($imc < 18.5) {
			echo "Abaixo de peso";
		} elseif ($imc < 24.9) {
			echo "Normal";
		} elseif ($imc < 29.9) {
			echo "Sobrepeso";
		} elseif ($imc < 39.9) {
			echo "Obesidade";
		} else { 
			echo "Obesidade grave";			
		}
	?>