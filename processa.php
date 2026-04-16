<?php

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$peso = $_POST['peso'];
$distancia = $_POST['distancia'];
$produto = $_POST['produto'];
$entrega = $_POST['entrega'];

$frete = 0;
$detalhes = "";
$prazo = ""; 


if ($valor > 500) {
    $frete = 0;
    $prazo = "A combinar";
    $detalhes .= "Compra acima de R$500 → Frete grátis<br>";
} else {

    switch($entrega) {

        case "economica":
            if ($peso <= 5) {
                $frete += 10;
                $detalhes .= "Entrega econômica até 5kg: R$10<br>";
            } else {
                $frete += 20;
                $detalhes .= "Entrega econômica acima de 5kg: R$20<br>";
            }

            if ($distancia > 100) {
                $frete += 10;
                $detalhes .= "Taxa distância >100km: +R$10<br>";
            }

            if ($distancia <= 50) $prazo = "3 dias";
            elseif ($distancia <= 200) $prazo = "5 dias";
            else $prazo = "8 dias";
        break;

        case "normal":
            if ($peso <= 5) {
                $frete += 20;
                $detalhes .= "Peso até 5kg: R$20<br>";
            } elseif ($peso <= 10) {
                $frete += 35;
                $detalhes .= "Peso até 10kg: R$35<br>";
            } else {
                $frete += 50;
                $detalhes .= "Peso acima de 10kg: R$50<br>";
            }

            if ($distancia > 100) {
                $frete += 15;
                $detalhes .= "Taxa distância >100km: +R$15<br>";
            }

            if ($distancia <= 50) $prazo = "2 dias";
            elseif ($distancia <= 200) $prazo = "4 dias";
            else $prazo = "6 dias";
        break;

        case "expressa":
            $frete += 50;
            $detalhes .= "Entrega expressa: R$50<br>";

            if ($peso > 10) {
                $frete += 20;
                $detalhes .= "Peso >10kg: +R$20<br>";
            }

            if ($distancia > 100) {
                $frete += 20;
                $detalhes .= "Distância >100km: +R$20<br>";
            }

            $prazo = ($distancia <= 100) ? "1 dia" : "2 dias";
        break;

        case "retirada":
            $frete = 0;
            $prazo = "Imediato";
            $detalhes .= "Retirada na loja: grátis<br>";
        break;
    }

   
    if ($distancia > 200) {
        $extra = $distancia - 200;
        $frete += $extra;
        $detalhes .= "KM extra ($extra km): +R$$extra<br>";
    }

    
    if ($produto == "fragil") {
        $frete += 15;
        $detalhes .= "Produto frágil: +R$15<br>";
    }
}


$totalFinal = $valor + $frete;

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Nota Fiscal</title>
</head>

<body>

<div class="nota">
    <h2>Nota Fiscal</h2>

    <p><strong>Cliente:</strong> <?php echo $nome; ?></p>
    <p><strong>Valor da compra:</strong> R$<?php echo $valor; ?></p>

    <hr>

    <h3>Detalhamento do Frete:</h3>
    <p><?php echo $detalhes; ?></p>

    <p><strong>Prazo:</strong> <?php echo $prazo; ?></p>

    <hr>

    <p class="total">Frete: R$<?php echo $frete; ?></p>
    <p class="total">Total Final: R$<?php echo $totalFinal; ?></p>

    <a href="index.php">
        <button class="voltar">Voltar</button>
    </a>

</div>

</body>
</html>