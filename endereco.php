<?php
    include_once('cep.php');
    $address = getAddress();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RespawnGames</title>
    <link rel="stylesheet" href="./login.css">    

</head>
<body>
    <nav class="nav">
        <img src="./img/png-clipart-spawn-logo-comics-decal-sticker-hellboy-miscellaneous-fictional-characters.png" class="logo">
    </nav>
    <main class="col-6" id="mainlogin">

        <article class="col-12" id="articlelogin">

        <form action="endereco.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <input type="hidden" name="nome" value="<?php print $nome ?>">
        <input type="hidden" name="email" value="<?php print $email ?>">
        <input type="hidden" name="idade" value="<?php print $idade ?>">
        <input type="hidden" name="senha" value="<?php print $senha ?>">
        <input type="hidden" name="telefone" value="<?php print $telefone ?>">
            
             
        <label for="C.E.P"></label>
        
        <section id="botoes" class="col-11">
        <input type="text" name="cep" id="C.E.P" placeholder="C.E.P" value="<?php echo $address->cep ?>" required> 
            <button type="submit" id="b2">Confirmar</button>
        </section>
                <!-- <button type="submit"> Confirmar </button> -->
                <?php 
                    if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                  }
                ?>
            </div>
          </form>

            

            <form action="salvar.php" method="POST" id="formlogin">
                <input type="hidden" name="acao" value="cadastrar">
                <input type="hidden" name="nome" value="<?php print $nome ?>">
                <input type="hidden" name="email" value="<?php print $email ?>">
                <input type="hidden" name="idade" value="<?php print $idade ?>">
                <input type="hidden" name="senha" value="<?php print $senha ?>">
                <input type="hidden" name="telefone" value="<?php print $telefone ?>">
                <input type="hidden" name="cep" value="<?php echo $address->cep ?>">
                <section id="inputs" class="col-10">
                    
                    <label for="Rua"></label>
                    <input type="text" name="rua" id="Rua" placeholder="Rua" value="<?php echo $address->logradouro ?>" required><br>
                    <label for="Bairro"></label>
                    <input type="text" name="bairro" id="Bairro" value="<?php echo $address->bairro ?>" placeholder="Bairro" required><br>
                    <label for="Cidade"></label>
                    <input type="text" name="cidade" id="cidade" value="<?php echo $address->localidade ?>" placeholder="Cidade" required><br>
                    <label for="Estado"></label>
                    <input type="text" name="estado" id="estado" value="<?php echo $address->uf ?>" placeholder="Estado" required><br>
                    <label for="n°"></label>
                    <input type="number" name="numero" id="numero" placeholder="n°" ><br><br>
                </section>
            

                <section id="botoes" class="col-11">
                    <button type="submit" id="b2">ENVIAR</button>
                </section>
                </form>

        </article>

    </main>
</body>
<script src="../JS/logica.js"></script>
</html>