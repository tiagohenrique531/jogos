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

            

            <form action="testLogin.php" method="POST" id="formlogin">
                <section id="inputs" class="col-10">
                    <label for="mail"></label>
                    <input type="email" name="email" id="maillogin" placeholder="E-mail" required><br><br>

                    <label for="senha"></label>
                    <input type="password" name="senha" id="senhalogin" placeholder="Senha" required><span><img onclick="mostrar_senha()" id="imgolho"
                    src="img/olho.png" /></span>
                    <div>
                            <?php 
                            if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                    }
                              ?> 
                    </div>
                </section>
            

                <section id="botoes" class="col-11">
                    <button type="submit" id="b1">LOGIN</button><br>
            
                </section>
            </form>
            <section id="botoes" class="col-11">
            <a href="./cadastro.php"><button id="b2">CADASTRE-SE</button></a>
            </section>
        </article>

    </main>
</body>
<script src="./script.js"></script>
</html>