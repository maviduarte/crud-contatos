<!-- Conexão com o banco de dados -->

<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $port = '3306';
    $db = 'contatos_db';

    $conn = mysqli_connect($host, $user, $pass, $db, $port);

    if (!$conn) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
	
	//echo "Olá mundo!";
?>