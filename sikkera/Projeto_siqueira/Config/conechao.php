<?php
// Configuração do Banco de Dados
    $host = 'localhost';
    $dbname = 'teste_d_bd'; // Peça para eles alterarem pelo nome criado no MySQL
    $username = 'root';
    $password = ' '; //Geralmente vazio no XAMPP/WAMP

    try {
        //Criando a conexão com PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        // Configura o PDO para lançar exceções em casos de erro
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        //Caso ocorra um erro ele será exibido aqui
        die("Erro na conexão: ". $e->getMessage());
    }

?>