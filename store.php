<!-- Processa o cadastro -->

<?php
    require 'db.php';

    $result = mysqli_query($conn, "SELECT * FROM CONTATOS ORDER BY ID DESC");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css" type="text/css">
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <title>Lista</title>
</head>
<body>
    <div class="container">
        <div class="table">
            <div class="table-header">
                <h1>Lista de Contatos</h1><br>
                <p>Abaixo estão listados todos os contatos cadastrados.</p>
            </div>
            <div class="table-content">
                <table border="1">
                    <tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Foto</th><th>Data/Hora</th><th>Ações</th></tr>
                    <?php while ($u = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= htmlspecialchars($u['NOME']) ?></td>
                            <td><?= htmlspecialchars($u['EMAIL']) ?></td>
                            <td><?= htmlspecialchars($u['TELEFONE']) ?></td>
                            <td>
                                <?php if ($u['FOTO']): ?>
                                    <img src="data:image/jpeg;base64,
                                        <?= base64_encode($u['FOTO']) ?>" width="100">
                                <?php else: ?>
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($u['CRIADO_EM']) ? date("d/m/Y H:i", strtotime($u['CRIADO_EM'])) : '-' ?></td>
                            <td>
                                <div class="action-buttons">
                                    <div class="edit-button">
                                        <button onclick="document.location='edit.php?id=<?= $u['ID'] ?>'">Editar</button>
                                    </div>
                                    <div class="delete-button">
                                        <button onclick="document.location='delete.php?id=<?= $u['ID'] ?>'">Excluir</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
                <div class="new-button">
                    <button onclick="document.location='index.php'">Novo</button>
                </div>
            </div>
        </div>
    </div> 
    <br>
</body>
</html>