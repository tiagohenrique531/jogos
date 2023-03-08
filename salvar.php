<?php 
    include_once("conexao.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $idade = $_POST["idade"];
            // $senha = $_POST["senha"];
            $senha = password_hash($_POST["senha"] , PASSWORD_DEFAULT);
            $telefone = $_POST["telefone"];
            $cep = $_POST["cep"];
            $rua = $_POST["rua"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $num = $_POST["numero"];

            $sql = "INSERT INTO cliente(Nome, Email, Idade, Senha, Tel, Cep, Rua, Bairro, Cidade, Estado, Num) 
            VALUES ('{$nome}','{$email}','{$idade}','{$senha}','{$telefone}','{$cep}','{$rua}','{$bairro}','{$cidade}','{$estado}','{$num}')";

        
            $res = $conn->query($sql);
           

            if($res==true) {
                print "<script> alert('Cadastro efetuado com sucesso'); </script>";
                print "<script> location.href='login.php'; </script>";
            } else {
                print "<script> alert('Não foi possível cadastrar'); </script>";
                print "<script> location.href='index.php'; </script>";
            }

            break;

            case 'cadastrar2':
                $tipo = $_POST["tipo"];
                $numc = $_POST["numc"];
                $cvv = $_POST["cvv"];
                $datav = $_POST["datav"];
                $idcliente = $_POST["idcliente"];
                $idjogo = $_POST["idjogo"];
    
                $sql = "INSERT INTO pagamento(Tipo, NumC, CVV, DataV, Cliente_idCliente, Jogo_idjogo) 
                VALUES ('{$tipo}','{$numc}','{$cvv}','{$datav}','{$idcliente}','{$idjogo}')";

               $sql2 = "UPDATE jogo SET Estoque = Estoque - 1 WHERE idjogo = $idjogo";
    
            
                $res = $conn->query($sql);
                $res2 = $conn->query($sql2);
               
    
                if($res==true) {
                    print "<script> alert('Cadastro efetuado com sucesso'); </script>";
                    print "<script> location.href='logado.php'; </script>";
                } else {
                    print "<script> alert('Não foi possível cadastrar'); </script>";
                    print "<script> location.href='logado.php'; </script>";
                }
    
                break;

            
    }

?>