<?php 
session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');

    }    
    $logado = $_SESSION['email'];
    $id = $_SESSION["id_user"];

   
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RespawnGames</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilo.scss">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="script.js"></script>


</head>
<body class="body"> 
    
    <nav class="nav1">      
        <svg style="display: none">
            <symbol id="magnify" viewBox="0 0 18 18" height="100%" width="100%">
              <path d="M12.5 11h-.8l-.3-.3c1-1.1 1.6-2.6 1.6-4.2C13 2.9 10.1 0          6.5 0S0 2.9 0 6.5 2.9 13 6.5 13c1.6 0 3.1-.6 4.2-1.6l.3.3v.8l5 5          1.5-1.5-5-5zm-6 0C4 11 2 9 2 6.5S4 2 6.5 2 11 4 11 6.5 9 11 6.5            11z" fill="#fff" fill-rule="evenodd"/>
            </symbol>
          </svg>
          <div class="search-bar">
          <form method="POST" id="form-pesquisa" action="">
                <input type="text" name="busca" id="pesquisa" class="input" placeholder="&nbsp;" autocomplete="off">
                <button type="submit" >
                <!-- <span class="label">Buscar</span> -->
            <span class="highlight"></span>
            <div class="search-btn">
                 <svg class="icon icon-18">
                   <use xlink:href="#magnify"></use>
                  </svg>
             </div>
                </button>
            </form>
            </div>  
    <ul class="resultado">
		
  </ul>
        

            </div>
            
          <img src="./img/png-clipart-spawn-logo-comics-decal-sticker-hellboy-miscellaneous-fictional-characters.png" class="logo">
          
          <a href="sair.php"><?php echo " <input class='custom-btn btn-3' type=button value='SAIR' id=sair/>";
          ?> 
          </a>
          <!-- <button class="custom-btn btn-3"><a href="./cadastro.php"></a>Cadastre-se</button> -->

    
    </nav>
<br> <br>




<section class="nav2">
  
 <nav>
      <ul>
        <li><a href="#">Switch</a></li>
        <li><a href="#">PS5</a></li>
        <li><a href="#">PS4</a></li>
        <li><a href="#">PS3</a></li>
        <li><a href="#">XBOX one/Series</a></li>
        <li><a href="#">XBOX 360</a></li>
      </ul>
    </nav>


  
</section>


<section class="af" style="color: aliceblue;">
    <h1 class="h2">Jogos do Momento</h1>
    <div class="content-all">
        <div class="content-carrousel">
         <figure class="shadow"><img src="./img/God_of_War_2018_capa.png" /></figure>
      <figure class="shadow"><img src="https://s2.glbimg.com/nDA7_-T6EEElZZZgwnPIPAVfJTQ=/696x390/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/C/U/DMgaFjTAC5JJg62W1PdQ/minecraft-launcher-homenagem-technoblade-porco-coroa.jpg" /></figure>
      <figure class="shadow"><img src="./img/wallpapersden.com_fifa-23-gaming_1920x1080.jpg" /></figure>
      <figure class="shadow"><img src="https://upload.wikimedia.org/wikipedia/pt/b/be/The_Last_of_Us_capa.png" /></figure>
      <figure class="shadow"><img src="https://osurtododia.com.br/wp-content/uploads/2020/08/fall-guys.jpg" /></figure>
      <figure class="shadow"><img src="./img/wp6264020.jpg" /></figure>
      <figure class="shadow"><img src="https://dropsdejogos.uai.com.br/wp-content/uploads/sites/10/2022/06/divulgacao-mineirinho-2-reproducao-950x534.jpg" /></figure>
      <figure class="shadow"><img src="https://cdn.maioresemelhores.com/imagens/mm-games-19-cke.jpg" /></figure>
      <figure class="shadow"><img src="./img/watchdogs1-hero-mobile-v2.webp" /></figure>
        </div>
    </div>
</section>


<section class="aga"style="color: aliceblue;">
<h1>Promoção do Mês</h1>

</section>


<section class="hero-section">
<?php 
    include("conexao.php");
    $sql = "SELECT * FROM jogo";


    $res = $conn->query($sql);

    $qtd = $res->num_rows; 

    if($qtd > 0 ) {
    
    while($row = $res->fetch_object()){
    
        print "<div class='card-grid'>
      <a class='card' href='pagamento.php'>
        <div class='card__background' ><img src='./img/$row->img' class='img' /></div>
        <div class='card__content'>
          <p class='card__category'> $row->Console</p>
          <h3 class='card__heading'>$row->Nome - R$ $row->Preco</h3>
          <p class='card__category'> $row->Marca</p>
          <p class='card__category'> $row->Categoria</p>
        </div>
      </a>

      ".$_SESSION['id_jogo'] = $row->idjogo; "
      
      
    <div>";
     } 
    } else {
        print "<p> Não encontrou resultados </p>";
    } ?>
  </section>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>Sobre</h6>
          <p class="text-justify">Entrando no ramo de venda de jogos, nossa empresa se destaca no mercado com jogos originais a um preço acessivel, e de entrega rápida, para os mais diversos consoles, prezando a boa esperiencia dos nosso clientes.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Contato</h6>
          <ul class="footer-links">
            <li><a href="#"></a>Whats - (31) 99851-8179</li>
            <li><a href="#">Discord - Respawng4m35</a></li>
            <li><a href="#">Telegram - (31)98956-3412</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Selo de seguança</h6>
          <ul class="footer-links">
            <li><a href="#">Google Security</a></li>
            <li><a href="#">norton Secured</a></li>
            <li><a href="#">Check out Security</a></li>
            
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
       <a href="#">Grupo3</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>
</footer>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="personalizado.js"></script>

</body>
</html>