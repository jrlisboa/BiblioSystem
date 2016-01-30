<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
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
    <center>

    <div class="resultado">

        <?php

          include "scripts/conecta.php";

          $query = sprintf("SELECT ra, tit_livro, id_livro, prazo FROM tb_retirada");
          $dados = mysql_query($query) or die (mysql_error());

          $linha = mysql_fetch_assoc($dados);
          $total = mysql_num_rows($dados);

          if($total > 0){

            do{ ?>

              <div class="dados">
              <p>
                 <spam class="tituloconsu">Ra do Aluno: </spam><spam class="conteudoconsu"><?=$linha['ra']?></spam><br/>
                 <spam class="tituloconsu">Título do livro: </spam><spam class="conteudoconsu"><spam class="tituloconsu"><?=$linha['tit_livro']?></spam><br/><br/>
                 <spam class="tituloconsu">Codigo do Livro: </spam><spam class="conteudoconsu"><?=$linha['id_livro']?></spam><br/><br/>
                 <spam class="tituloconsu">Prazo da biblioteca: </spam><spam class="conteudoconsu"><?=$linha['prazo']?></spam>
              </p>
              </div>

              <?php 
            }while ($linha = mysql_fetch_assoc($dados));
          }

        ?>



    </div>
       
</div>
</body>
</html>