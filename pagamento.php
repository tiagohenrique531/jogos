<?php 

session_start();

    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');

    } 

    $idcliente = $_SESSION['id_user'];
    $idjogo = $_SESSION["id_jogo"];
?>
<!DOCTYPE html>
<html lang="pt-br">
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

            

            <form action="salvar.php" method="POST" id="formlogin">
            <input type="hidden" name="idcliente" value="<?php print $idcliente ?>">
            <input type="hidden" name="idjogo" value="<?php print $idjogo ?>">
            <input type="hidden" name="acao" value="cadastrar2">
                <section id="inputs" class="col-10">
                    <label for="Tipo"></label>
                    <input type="text" name="tipo" id="Nome" placeholder="Tipo" required><br><br>
                    <label for="Numero Cartão"></label>
                    <input type="number" name="numc" id="numc" placeholder="Numero Cartão" required><br><br>
                    <label for="CVV"></label>
                    <input type="number" name="cvv" id="cvv" placeholder="CVV" required><br><br>
                    <label for="Data de validade"></label>
                    <input type="date" name="datav" id="datav" placeholder="Data de validade" required><br><br>
                    

                </section>

                <section id="botoes" class="col-11">
                    <button type="submit" id="b2">Pagar</button>
                </section>
                </form>

        </article>

    </main>
</body>

</html>