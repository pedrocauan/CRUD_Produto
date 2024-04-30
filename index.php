<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja do Pepe</title>
</head>
<body>
    <main>
        <h1>Cadastrar Produto</h1>
        <form action="./register.php" method="POST">
            <!--Nome do produto-->
            <div class="form-item">
                <label for="name">Nome do Produto</label>
                <input type="text" name="name" id="name" class="text" placeholder="Nome do produto...">
            </div>
            <!-- Descrição -->
            <div class="form-item">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrição do produto"></textarea>
            </div>

            <!-- Preço do Produto -->
            <div class="form-item">
                <label for="price" name="price">Preço</label>
                <input type="text" name="price" id="price">
            </div>
            <div class="form-item">
                <label for="amount">Quantidade</label>
                <input type="number" name="amount" id="amount">
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>