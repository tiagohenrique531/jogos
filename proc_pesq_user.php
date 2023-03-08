<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM jogo WHERE Nome LIKE '%$usuarios%' OR Marca LIKE '%$usuarios%' ";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
        echo "</br></br></br></br></br>
        <div class='card-grid'>
        <a class='card' href='pagamento.php'>
          <div class='card__background' style='background-image: url(".$row_user['img'].")'></div>
          <div class='card__content'>
            <p class='card__category'>" .$row_user['Console']."</p>
            <h3 class='card__heading'>".$row_user['Nome'] ."- ". $row_user['Preco']."</h3>
            <p class='card__category'>" .$row_user['Marca']."</p>
            <p class='card__category'>". $row_user['Categoria']."</p>
          </div>
        </a>

        
        
      <div>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}

?>