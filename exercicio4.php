<?php

$valor_compra = 200;
$possui_cupom = false;

$tem_desconto = ($valor_compra > 150 || $possui_cupom);

$percentual_desconto = $tem_desconto ? 10 : 0;

$valor_desconto = $valor_compra * ($percentual_desconto / 100);

$valor_final = $valor_compra - $valor_desconto;

$mensagem = $tem_desconto ? "Desconto de 10% aplicado!" : "Nenhum desconto foi aplicado.";

echo "Valor original: R$ " . number_format($valor_compra, 2, ',', '.') . "<br>";
echo "Percentual de desconto: " . $percentual_desconto . "%<br>";
echo "Valor do desconto: R$ " . number_format($valor_desconto, 2, ',', '.') . "<br>";
echo "Valor final: R$ " . number_format($valor_final, 2, ',', '.') . "<br>";
echo $mensagem;

?>