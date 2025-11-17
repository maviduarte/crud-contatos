<!-- Processa a exclusão -->

<?php
    require 'db.php';
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM CONTATOS WHERE ID = $id");
    header('Location: store.php');
?>