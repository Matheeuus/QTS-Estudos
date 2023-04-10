<?php


function calculaImpostoDeRenda($salarioBruto) {
    
    // Definindo as faixas de tributação
    $faixa1 = 1903.98;
    $faixa2 = 2826.65;
    $faixa3 = 3751.05;
    $faixa4 = 4664.68;
    
    // Definindo as alíquotas de tributação para cada faixa
    $aliquota1 = 0;
    $aliquota2 = 0.075;
    $aliquota3 = 0.15;
    $aliquota4 = 0.225;
    $aliquota5 = 0.275;
    
    // Calculando o valor do imposto de renda de acordo com o salário bruto
    if ($salarioBruto <= $faixa1) {
        $impostoDeRenda = 0;
    } elseif ($salarioBruto <= $faixa2) {
        $impostoDeRenda = ($salarioBruto - $faixa1) * $aliquota2;
    } elseif ($salarioBruto <= $faixa3) {
        $impostoDeRenda = ($faixa2 - $faixa1) * $aliquota2 + ($salarioBruto - $faixa2) * $aliquota3;
    } elseif ($salarioBruto <= $faixa4) {
        $impostoDeRenda = ($faixa2 - $faixa1) * $aliquota2 + ($faixa3 - $faixa2) * $aliquota3 + ($salarioBruto - $faixa3) * $aliquota4;
    } else {
        $impostoDeRenda = ($faixa2 - $faixa1) * $aliquota2 + ($faixa3 - $faixa2) * $aliquota3 + ($faixa4 - $faixa3) * $aliquota4 + ($salarioBruto - $faixa4) * $aliquota5;
    }
    
    return $impostoDeRenda;
}

// Exemplo de uso
$salarioBruto = $_POST['renda'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$impostoDeRenda = calculaImpostoDeRenda($salarioBruto);

echo $nome . " O imposto de renda a ser pago é R$ " . number_format($impostoDeRenda, 2, ',', '.') . " Senão pagar, abrirá uma multa no CPF:".$cpf;
?>