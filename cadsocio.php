<?php

  include "scripts/conecta.php";
  
  
  if(isset($_POST['subSocio'])){
    
      $ra = $_POST["ra"];
      $nome = $_POST["nome"];
      $serie = $_POST["serie"];
      $endereco = $_POST["endereco"];
      $cep = $_POST["cep"];
      $telefone = $_POST["telefone"];
      $celular = $_POST["celular"];

      $insere = "INSERT INTO tb_socio (ra,nome,serie,endereco,cep,telefone,celular) VALUES ('$ra', '$nome', '$serie', '$endereco', '$cep', '$telefone', '$celular')";

      if (empty($_POST["ra"] && $_POST["nome"] && $_POST["serie"] && $_POST["endereco"] && $_POST["cep"] && $_POST["telefone"] && $_POST["celular"])) {
        echo "

              <center>
              <div class='alerta'> 
                  <span>Preencha todos os campos</span>
              </div>
              </center>

        ";

      }else{

        $inseriu = mysql_query($insere);
      
      
        if($inseriu){
          echo "

          <center>
          <div class='sucesso'> 
              <span>Enviado com sucesso</span>
          </div>
          </center>

          ";
        } else{
          echo "

          <center>
          <div class='erro'> 
              <span>Erro ao enviar</span>
          </div>
          </center>

          ";
        }
      }
  }
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Cadastramento sociados</title>
</head>

<body>
   <header>
      <div class="menu">
        <nav>
          <ul>
        <li class="nivel1"><a href="index.html">Consulta</a>
            <ul class="dropsao">
                <li><a href="consulivro.php">Livros</a></li>
                <li><a href="consusocio.php">Sócios</a></li>
                <li><a href="consuretirada.php">Retiradas</a></li>
            </ul>
        </li>
        <li class="nivel1"><a href="cadastro.html">Cadastro</a>
            <ul class="dropsao">
                <li><a href="cadlivro.php">Livros</a></li>
                <li><a href="cadsocio.php">Sócios</a></li>
                <li><a href="cadretirada.php">Retiradas</a></li>
            </ul>
        </li>
            
    
    </ul>
        </nav>
      </div>
    </header>
    <div class="formulario">
  <form  class="socio" action="cadsocio.php" method="post" name="subSocio" class="caixacad">
  <p class="textcad">Ra</p><br><input type="text" name="ra" value="" class="caixacad"></br>
  <p class="textcad">Nome</p><br><input type="text" name="nome" value="" class="caixacad"></br>
  <p class="textcad">Série</p><br><input type="text" name="serie" value="" class="caixacad"></br>
  <p class="textcad">Endereço</p><br><input type="text" name="endereco" value="" class="caixacad"></br>
  <p class="textcad">Cep</p><br><input type="text" name="cep" value="" class="caixacad"></br>
  <p class="textcad">Telefone</p><br><input type="text" name="telefone" value="" class="caixacad"></br>
  <p class="textcad">Celular</p><br><input type="text" name="celular" value="" class="caixacad"></br>
<input class="botao" type="submit" name="subSocio" value="Cadastrar">
</form>
</div>
</div>
</body>
</html>