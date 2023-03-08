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

            

            <form action="endereco.php" method="POST" id="formlogin">
                <section id="inputs" class="col-10">
                    <label for="Nome"></label>
                    <input type="text" name="nome" id="Nome" placeholder="Nome" required><br><br>
                    <label for="mail"></label>
                    <input type="email" name="email" id="maillogin" placeholder="E-mail" required><br><br>
                    <label for="Idade"></label>
                    <input type="number" name="idade" id="idade" placeholder="idade" required><br><br>
                    <label for="Telefone"></label>
                    <input type="tel" name="telefone" id="Telefone" placeholder="Telefone" required><br><br>
                    <label for="senha"></label>
                     <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="16"><br><br>

                </section>

                <section id="botoes" class="col-11">
                    <button type="submit" id="b2">PROXÍMO</button>
                </section>
                </form>

        </article>

    </main>
</body>
<script src="../JS/logica.js"></script>
</html>