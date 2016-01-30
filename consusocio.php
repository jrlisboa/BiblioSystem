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
                <li><a href="consuretirada.php">Sócios</a></li>
                <li><a href="consusocio.php">Retiradas</a></li>
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

          $query = sprintf("SELECT nome, serie, endereco, telefone, celular FROM tb_socio");
          $dados = mysql_query($query) or die (mysql_error());

          $linha = mysql_fetch_assoc($dados);
          $total = mysql_num_rows($dados);

          if($total > 0){

            do{ ?>

              <div class="dados">
              <p>
                 <spam class="tituloconsu">Nome do Aluno: </spam><spam class="conteudoconsu"><?=$linha['nome']?></spam><br/><br/>
                 <spam class="tituloconsu">Serie do Aluno: </spam><spam class="conteudoconsu"><?=$linha['serie']?></spam><br/><br/>
                 <spam class="tituloconsu">Endereço do Aluno: </spam><spam class="conteudoconsu"><?=$linha['endereco']?></spam><br/><br/>
                 <spam class="tituloconsu">Telefone  do Aluno: </spam><spam class="conteudoconsu"><?=$linha['telefone']?></spam><br/><br/>
                 <spam class="tituloconsu">Celular do Aluno: </spam><spam class="conteudoconsu"><?=$linha['celular']?></spam>
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