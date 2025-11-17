<!-- Listagen de dados -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="img/register.jpg">
        </div>
        <div class="form">
            <form action="create.php" method="post" enctype="multipart/form-data">
                <div class="form-header">
                    <h1>Cadastro de Contatos</h1><br>
                    <p>Por favor cadastre seus dados para salvar seu contato.</p>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" title="Esperando você digitar..." placeholder="Digite seu nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" title="Esperando você digitar..." placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="tel">Telefone</label>
                        <input type="tel" name="tel" maxlength="11" title="Esperando você digitar..." placeholder="(99) 99999-9999" require>
                    </div>
                    <div class="input-box">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" accept="image/*">
                    </div>
                </div>
                <div class="register-button">
                    <button type="submit">Cadastrar</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</body>
</html>