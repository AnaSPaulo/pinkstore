<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - PINKSTORE</title>
</head>
<body>
    <div class="container">
        <form action="processa.php" method="post"></form>
        <input type="text" name="nome" placeholder="Nome do Cliente" required>
        <input type="number" name="valor" placeholder="Preço da Compra (R$)" step="0.01" required>
        <input type="number" name="peso" placeholder="Peso (Kg)" required step="0.1">
        <input type="number" name="distancia" placeholder="Distância da Entrega (Km)" step="0.1" required>

        <select name="produto">
            <option value="normal">Produto normal</option>
            <option value="frágil">Produto frágil</option>
        </select>

        <select name="entrega">
            <option value="economica">Econômica</option>
            <option value="normal">Normal</option>
            <option value="expressa">Expressa</option>
            <option value="retirada">Retirada da Loja</option>
        </select>

        <button type="submit">Calcular Preço</button>

    </div>
</body>
</html>