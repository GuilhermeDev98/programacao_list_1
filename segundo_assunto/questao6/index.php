<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questao 6 -Lista 1</title>
</head>
<body>
    <form action="showPriceFinal.php">
        <div>
            <input type="text" name="nameOfProduct" id="nameOfProduct" placeholder="Nome do Produto" required>
        </div>
        <div>
            <input type="text" name="priceOfProduct" id="priceOfProduct" placeholder="Preço do Produto" required>
        </div>
        <div>
            <label for="paymentMethod">
                <select id="paymentMethod" name="paymentMethod">
                    <option value="inCash">À Vista</option>
                    <option value="forwardSale">A Prazo</option>
                </select>
            </label>
        </div>
        <button type="submit">Exibir Valor Final</button>
    </form>
</body>
</html>

6-Crie um programa que receba o nome de um produto, seu preço e a condição de pagamento (à vista / a prazo).
Se o pagamento for à vista o cliente deverá ter um desconto de 5%, se for a prazo um juro de 2%.