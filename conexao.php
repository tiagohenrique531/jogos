<?php 

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'bancodb');

    try {

        //echo "Conexão estabelicida";

        $conn = new MySQLi(HOST,USER,PASS,BASE);
        

    } catch(PDOException $e) {

        echo "Ocorreu um erro de conexao: {$e->getMessage()}";
    }


?>