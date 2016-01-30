<?php

  include "scripts/conecta.php";
  error_reporting(0);
  
  if(isset($_POST['subLivro'])){
    
      $tit_livro = $_POST["tit_livro"];
      $aut_livro = $_POST["aut_livro"];
      $n_exemplares = $_POST["n_exemplares"];
      $n_paginas = $_POST["n_paginas"];
      $descricao = $_POST["descricao"];

      $insere = "INSERT INTO tb_livro (tit_livro,aut_livro,n_exemplares,n_paginas,descricao) VALUES ('$tit_livro', '$aut_livro', '$n_exemplares', '$n_paginas', '$descricao')";

      if (empty($_POST["tit_livro"] && $_POST["aut_livro"] && $_POST["n_exemplares"] && $_POST["n_paginas"] && $_POST["descricao"])) {
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript">

function validar(){

  var input = document.getElementById("tit_livro");
  var input2 = document.getElementById("aut_livro");
  var input3 = document.getElementById("n_exemplares");
  var input4 = document.getElementById("n_paginas");
  var input5 = document.getElementById("descricao");

  if ( document.getElementById("tit_livro") == "") {

    alert("Preencha todos os campos.");
  }
}

</script>
<title>Cadastro de livros</title>
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
  <form class="livro" action="cadlivro.php" method="post" name="subLivro" class="caixacad">
  <p class="textcad">Título do livro</p><br><input type="text" name="tit_livro" id="tit_livro" value="" class="caixacad"></br>
  <p class="textcad">Autor do livro</p><br><input type="text" name="aut_livro" id="aut_livro" value="" class="caixacad"></br>
  <p class="textcad">Numero de exemplares</p><br><input type="text" name="n_exemplares" id="n_exemplares" value="" class="caixacad"></br>
  <p class="textcad">Numero de paginas</p><br><input type="text" name="n_paginas" id="n_paginas" value="" class="caixacad"></br>
  <p class="textcad">Descrição</p><br><input  type="text" name="descricao" id ="descricao" value="" class="caixacad"></br>
<input class="botao" type="submit" name="subLivro" value="Cadastrar" id="">
</form>
</div>
</div>
</body>
</html>