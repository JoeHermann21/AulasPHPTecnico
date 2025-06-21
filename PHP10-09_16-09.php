<?php

//1 - Fazer uma função que converta quilos em libras. Arredondar valor
function peso($quilo){
	$libra = $quilo * 0.45359237;
    return (int) $libra;
}

$quilo = 75;
echo "Seu peso de ".$quilo." kg em libras é ".peso($quilo)." lbs";

//2 - Fazer uma função que converta centímetros em polegadas. 
function altura($cent){
	$pol = $cent * 0.393701;
    return $pol;
}

$cent = 30;
echo "O tamanho é, em centímetros ".$cent." cm em polegadas é ".altura($cent)." pol";

//3 - Fazer uma função que verifica se você tem idade para ser presidente (+35 anos)
function presidente($idade){
	$pode = ($idade >= 35)? "já pode ser presidente" : "não pode ser presidente";
    return $pode;
}

$idade = 47;
echo "Você tem ".$idade." anos, então ".presidente($idade);

// (outra solução)
function presidente($idade){
	$pode = ($idade >= 35)? "já pode ser presidente" : 
    "não pode ser presidente. Espere mais ".(35-$idade)." anos";
    return $pode;
}

$idade = 17;
echo "Você tem ".$idade." anos, então ".presidente($idade);


//4 - Criar função para saber se meu score no SERASA é bom (o score bom é acima de 500)
function serasa($score){
	$resultado = ($score < 500)? "baixo" : "bom";
    return $resultado;
}

$score = 697;
echo "Seu score no SERASA é de ".$score.", portanto, é ".serasa($score);

//5 - Crie uma função para sortear um número aleatório. Caso o número seja 2 ou 4, o usuário ganha
function sorteio(){
	$x = rand(0 , 9.9);
	$resultado = ($x == 2 || $x == 4) ? "Ganhou!" : "Perdeu :(" ;
    return $resultado."<br> O número sorteado foi: ".$x;
}

echo sorteio();

?>