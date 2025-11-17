<!-- Formulário de cadastro -->

<?php
    require 'db.php'; 

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $foto = null;

    if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
        $foto = mysqli_real_escape_string($conn, $foto);
    }

    $sql = "INSERT INTO CONTATOS (NOME, EMAIL, TELEFONE, FOTO) VALUES ('$nome', '$email', '$tel', '$foto')";
    mysqli_query($conn, $sql);

    header('Location: store.php');
?>