<?php

  include "scripts/conecta.php";
 

  if(isset($_POST['subRetirada'])){
    
      $ra = $_POST["ra"];
      $tit_livro = $_POST["tit_livro"];
      $id_livro = $_POST["id_livro"];
      $prazo = $_POST["prazo"];

      $insere = "INSERT INTO tb_livro (ra, tit_livro, id_livro ,prazo) VALUES ('$ra', '$tit_livro', '$id_livro', '$prazo')";

      if (empty($_POST["ra"] && $_POST["tit_livro"] && $_POST["id_livro"] && $_POST["prazo"])) {
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

          ".mysql_error();
        }
      }
    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Cadastramento retirada de livros</title>
</head>

<body>
   <header>
    <center>
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
    </center>
    </header>
    <div class="formulario">
  <form class="retirada" action="cadretirada.php" method="post" name="subRetirada">

  <p class="textcad">Titulo do Livro</p><br><input type="text" name="tit_livro" value="" class="caixacad"></br>
  <p class="textcad">Ra do Aluno</p><br><input type="text" name="ra" value="" class="caixacad"></br>
  <p class="textcad">Codigo do Livro</p><br><input type="text" name="id_livro" value="" class="caixacad"></br>
  <p class="textcad">Prazo</p><br><input type="text" name="prazo" value="" class="caixacad"></br>

<input class="botao" type="submit" name="subRetirada" value="Cadastrar">
</form>
</div>
</div>
</body>
</html>