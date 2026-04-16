<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Checkout - PinkStore</title>

<style>
body {
    font-family: Arial;
    background: #ffe6f0;
    margin: 0;
}

.container {
    width: 400px;
    margin: 50px auto;
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #ff4da6;
}

input, select {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 12px;
    background: #ff4da6;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background: #e60073;
}
</style>
</head>

<body>

<div class="container">
    <h2>Finalizar Compra</h2>

    <form action="processa.php" method="POST">

        <input type="text" name="nome" placeholder="Nome do cliente" required>

        <input type="number" step="0.01" name="valor" placeholder="Valor da compra (R$)" required>

        <input type="number" step="0.1" name="peso" placeholder="Peso (kg)" required>

        <input type="number" name="distancia" placeholder="Distância (km)" required>

        <select name="produto">
            <option value="normal">Produto Normal</option>
            <option value="fragil">Produto Frágil</option>
        </select>

        <select name="entrega">
            <option value="economica">Econômica</option>
            <option value="normal">Normal</option>
            <option value="expressa">Expressa</option>
            <option value="retirada">Retirada na loja</option>
        </select>

        <button type="submit">Calcular Frete</button>

    </form>
</div>

</body>
</html>