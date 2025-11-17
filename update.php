<!-- Processa a edição -->
<?php
    require 'db.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $foto = null;

    if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
        $foto = mysqli_real_escape_string($conn, $foto);
        $sql = "UPDATE CONTATOS SET NOME='$nome', EMAIL='$email', TELEFONE='$tel', FOTO='$foto' WHERE ID='$id'";
    } else {
        $sql = "UPDATE CONTATOS SET NOME='$nome', EMAIL='$email', TELEFONE='$tel' WHERE ID='$id'";
    }

    mysqli_query($conn, $sql);
    header('Location: store.php');
?>