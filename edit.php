<!-- Formulário de edição -->
<?php 
    require 'db.php';
    $id = $_GET['id'];
    $res = mysqli_query($conn, "SELECT * FROM CONTATOS WHERE id = $id");
    $u = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/action.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <title>Editar</title>
</head>
<body>
    <div class="back-button">
        <button onclick="document.location='store.php'" title="Voltar">
            <i class="bi bi-arrow-left"></i>
        </button>
    </div>
    <div class="container">
        <div class="form">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <div class="form-header">
                    <h1>Editar Contato</h1><br>
                    <p>Atualize as informações do contato abaixo:</p>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        Nome: <input type="text" title="Esperando você editar..." name="nome" value="<?= htmlspecialchars($u['NOME']) ?>">
                    </div>
                    <div class="input-box">
                        Email: <input type="email" title="Esperando você editar..." name="email" value="<?= htmlspecialchars($u['EMAIL']) ?>">
                    </div>
                    <div class="input-box">
                        Telefone: <input type="text" title="Esperando você editar..." maxlength="11" name="tel" value="<?= htmlspecialchars($u['TELEFONE']) ?>">
                    </div>
                    <div class="input-box">
                        <input type="hidden" name="id" value="<?= $u['ID'] ?>">
                        Foto nova: <input type="file" name="FOTO"> <br>
                    </div>
                </div>
                <div class="update-button">
                    <button type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
