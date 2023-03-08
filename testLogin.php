<?php



        if(isset($_POST['email'])) {

            include("conexao.php");
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql_code = "SELECT * FROM cliente WHERE Email = '$email'";
            $sql_exec = $conn->query($sql_code) or die($conn->error);

            $usuario = $sql_exec->fetch_assoc();
            if(password_verify($senha, $usuario['Senha'])) {
                session_start();
                $_SESSION['id_user']= $usuario['idCliente'];
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('location:logado.php');
                // echo "Usuario logado";
            } else {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                 $_SESSION['msg'] = "<font color=red> Email e senha incorreto! </font>";
                header('Location: login.php');
                
                
            }
                
            
        } 

    

   
?>