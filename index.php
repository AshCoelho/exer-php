

<?php

$fruta = 'Manga';
echo "Minha favorita é $fruta ";

echo "<br>";

$nome = 'João'; 
$idade = '25';
$endereco = 'Rua Santana';
$curso = 'Programação Web';

echo "Ola eu sou $nome, tenho $idade anos, moro na $endereco e faço o
curso de $curso no SENAC";

echo "<br>";

$numero1 = '10';
$numero2 = '5';

echo $numero1 + $numero2;
echo "<br>";
echo $numero1 - $numero2;
echo "<br>";
echo $numero1 * $numero2;
echo "<br>";
echo $numero1 / $numero2;
echo "<br>";

$num1 = '2';
$num2 = '3';

if ($num1 > $num2) {
    echo "o número $num1 é maior que o número $num2";
} else {
    echo "o número $num2 é maior que o número $num1";
}

echo "<br>";

$nome_qualquer = 'Muse';


if (str_contains($nome_qualquer, "a"  ) && (str_contains($nome_qualquer, "o"))) {
    echo "Contém";
} else {
    echo "Não Contém";
}

echo "<br>";

function somatorio($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    echo("a somatório dos valores $valor1 e $valor2 é $soma");
    echo "<br>";
    return($soma);
    
} 

echo somatorio(2,3);



?>








