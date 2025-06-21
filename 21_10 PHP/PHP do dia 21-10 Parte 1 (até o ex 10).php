//Ex 1

<?php

$n1 = 20;
$n2 = 1;
$total = $n1 + $n2;

if($total>20){
	echo "O resultado de $n1 + $n2 é $total e $total + 8 é: ".($total + 8);
}else{
	echo "O resultado de $n1 + $n2 é $total e $total - 5 é: ".($total - 5);
}

?>

//Ex 2
<?php

$n1 = 100;

if($n1 % 10 == 0){
	echo "$n1 é divisível por 10";
}elseif ($n1 % 5 == 0){
	echo "$n1 é divisível por 5";
}elseif($n1 % 2 == 0){
	echo "$n1 é divisível por 2";
}else{
	echo "$n1 não é divisível nem por 2, nem por 5 e nem por 10";
}


?>

//Ex 3
<?php

$nome = "Aliyah";
$sexo = "F";
$idade = 23;

if($idade<25 && $sexo == "F"){
	echo "ACEITA";
}else{
	echo "NÃO ACEITA";
}

?>

//Ex4
<?php

$n1 = 67;
$n2 = 31;
$n3 = 7;

$num = array($n1,$n2,$n3);

rsort($num);

//Um jeito de imprimir o resultado
print_r($num);

//Outro jeito de imprimir o resultado
foreach($num as $valor){
    echo "<br>".$valor;
}

?>

//Ex5
<?php

$n1 = 77;
$n2 = 61;
$n3 = 37;

if ($n1<$n2+$n3 && $n2<$n1+$n3 && $n3<$n1+$n2){
	echo "Estes valores formam um triangulo.<br> E esse é um: ";
}else{
	echo "Estes valores NÃO formam um triangulo";
}

if($n1 == $n2 && $n2 == $n3){
	echo "Triângulo equilátero";
}elseif ($n1 == $n2 || $n2 == $n3 || $n1 == $n3){
	echo "Triângulo isóceles";
}else{
	echo "Triângulo escaleno";
}

?>

//Ex6
<?php

$n1 = 13;

if($n1 == 1){
	echo "Janeiro";
}
	elseif($n1 == 2){
		echo "Fevereiro";
    }
    elseif($n1 == 3){
		echo "Março";
    }
    elseif($n1 == 4){
		echo "Abril";
	}
    elseif($n1 == 5){
		echo "Maio";
	}
    elseif($n1 == 6){
		echo "Junho";
	}
    elseif($n1 == 7){
		echo "Julho";
	}
    elseif($n1 == 8){
		echo "Agosto";
	}
    elseif($n1 == 9){
		echo "Setembro";
	}
    elseif($n1 == 10){
		echo "Outubro";
	}
    elseif($n1 == 11){
		echo "Novembro";
	}
    elseif($n1 == 12){
		echo "Dezembro";
	}else{
    	echo "Esse mês não existe! ";
    }

?>

//Ex7
<?php

$nome = "O Pequeno Príncipe";
$tipo = "ALUNO";

if($tipo == "ALUNO"){
	echo "Nome do Livro: $nome<br> Tipo de usuário: $tipo<br> Tempo para devolução: 3 dias";
}elseif($tipo == "PROFESSOR"){
	echo "Nome do Livro: $nome<br> Tipo de usuário: $tipo<br> Tempo para devolução: 10 dias";
}else{
	echo "Tipo de usuário inválido!!!";
}

?>

//Ex8
<?php

$n1 = 67;

for ($i = 0; $i<=$n1; $i++){
	echo $i." ";
}

?>

//Ex9
<?php

$vezes = 8;

for ($i = 0; $i < $vezes; $i++) {
    echo "SOL <br>";
}

?>

//Ex10
<?php
$numeros = array(7, -10, 13, 8, 4, -12, -3.7, 3, -9.6, 6, -1.7, -6.2, 7);
$positivo = array(); 
$negativo = array();

foreach($numeros as $valor)
{
    (($valor>0) ?  $positivo[]=$valor : $negativo[]=$valor);
}

echo "Soma dos números positivos: ".array_sum($positivo)."<br>";
echo "Quantidade de números negativos: ".count($negativo);
?>



