//Ex 1
<?php
$idade = 5;

if ($idade <= 7) {
    echo "Você tem $idade anos e sua categoria é infantil A";
} elseif ($idade <= 10) {
    echo "Você tem $idade anos e sua categoria é infantil B";
} elseif ($idade <= 13) {
    echo "Você tem $idade anos e sua categoria é juvenil A";
} elseif ($idade <= 17) {
    echo "Você tem $idade anos e sua categoria é juvenil B";
} else {
    echo "Você tem $idade anos e sua categoria é sênior";
}
?> 

//Ex 2
<?php
echo "O animal e mamifero(s/n)?";
$resp1 = "s";

if ($resp1 == "s") {
    echo "<br>O animal e quadrupede(s/n)?";
    $resp3 = "s";

    if ($resp3 == "s") {
        echo "<br>O animal e carnivoro(s/n)?";
        $resp4 = "n";

        if ($resp4 == "s") {
            echo "<br>O animal é um leao";
        } else {
            echo "<br>O animal é um cavalo";
        }
    } else {
        echo "<br>O animal e um bipede(s/n)?";
        $resp5 = "n";

        if ($resp5 == "s") {
            echo "<br>O animal e carnivoro(s/n)";
            $resp6 = "n";

            if ($resp6 == "s") {
                echo "<br>O animal é um homem";
            } else {
                echo "<br>O animal é um macaco";
            }
        } else {
            echo "<br>O animal é voador(s/n)?";
            $resp7 = "n";

            if ($resp7 == "s") {
                echo "<br>O animal é um morcego";
            } else {
                echo "<br>O animal é uma baleia";
            }
        }
    }
} else {
    echo "<br>O animal é reptil(s/n)?";
    $resp2 = "n";

    if ($resp2 == "s") {
        echo "<br>O animal tem casco(s/n)?";
        $resp8 = "n";

        if ($resp8 == "s") {
            echo "<br>O animal é uma tartaruga";
        } else {
            echo "<br>O animal é um carnivoro(s/n)?";
            $resp9 = "s";

            if ($resp9 == "n") {
                echo "<br>O animal é um crocodilo";
            } else {
                echo "<br>O animal é uma cobra";
            }
        }
    } else {
        echo "<br>O animal é nao voador(s/n)?";
        $resp10 = "n";

        if ($resp10 == "s") {
            echo "<br>O animal é tropical(s/n)?";
            $resp11 = "n";

            if ($resp11 == "s") {
                echo "<br>O animal é um avestruz";
            } else {
                echo "<br>O animal é um pinguin";
            }
        } else {
            echo "<br>O animal é nadador(s/n)?";
            $resp12 = "n";

            if ($resp12 == "s") {
                echo "<br>O animal é um pato";
            } else {
                echo "<br>O animal é uma aguia";
            }
        }
    }
}
?> 

//Ex 3
<?php

$tipoVinho = "rosê";
$contadorVinho = 0;
$contadorTinto = 0;
$contadorBranco = 0;
$contadorRose = 0;

if ($tipoVinho == "tinto") {
    $contadorTinto = $contadorTinto + 1;
    $contadorVinho = $contadorVinho + 1;
} elseif ($tipoVinho == "branco") {
    $contadorBranco = $contadorBranco + 1;
    $contadorVinho = $contadorVinho + 1;
} elseif ($tipoVinho == "rosê") {
    $contadorRose = $contadorRose + 1;
    $contadorVinho = $contadorVinho + 1;
} else {
    echo "Opção inválida";
}

//$contadorVinho -= $contadorVinho; ??

if ($contadorVinho > 0) {
    $porcentagemTinto = ($contadorTinto * 100) / $contadorVinho;
    $porcentagemBranco = ($contadorBranco * 100) / $contadorVinho;
    $porcentagemRose = ($contadorRose * 100) / $contadorVinho;
    echo "Porcentagem de Tintos: $porcentagemTinto %";
    echo "<br>Porcentagem de Brancos: $porcentagemBranco %";
    echo "<br>Porcentagem de Tintos: $porcentagemRose %";
} else {
    echo "Nenhum tipo foi fornecido";
}

?>

//Ex 4
<?php

$altura = 5;
$raio = 12;

$area = (3.14 * pow($raio, 2)) + (2 * 3.14 * r * h);
$litro = $area/3;
$qtde = $litro/5;
$custo = $qtde * 5000;

echo "O custo é de Cr$ $custo e a quantidade de $qtde";

?>

//Ex 5
<?php

$valor = 29;

//a)
if ($valor % 2 == 0) {
    echo "$valor é par";
} else {
    echo "$valor é ímpar";
}

//b)
function testarPrimo($valor)
{
    for ($i = 2; $i < $numero - 1; $i++) {
        if ($numero % $i == 0) {
            echo "<br>$valor não é primo";
        }
    }
    echo "<br>$valor é primo";
}

//c)
if ($valor % 3 == 0) {
    echo "<br>$valor é divisível por 3";
} else {
    echo "<br>$valor não é divisível por 3";
}

echo "<br>O valor absoluto de $valor é: " . abs($valor);

//e)
echo "<br>A tabuada do $valor é: ";
for ($i = 1; $i <= 10; $i++) {
    echo "<br>$valor x $i = " . $valor * $i;
}

$valor2 = $valor;
$total = 0;

//d)
echo "<br>O fatorial de $valor é: ";
while ($valor >= 1) {
    $valor2 = $valor2 - 1;
    $total = $valor2 * $valor2;
    $valor--;
    echo "$total ";
}

?>

//Ex 6
<?php

$n1 = 66;
$n2 = 79;

function ePrimo($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function imprimirPrimos($n1, $n2)
{
    for ($num = $n1; $num <= $n2; $num++) {
        if (ePrimo($num)) {
            echo $num . " ";
        }
    }
}

imprimirPrimos($n1, $n2);

?>

