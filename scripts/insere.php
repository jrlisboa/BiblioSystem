<html>
<head>
  <title>insere</title>
</head>
<body>
<?php 
    
    include "conecta.php";
  
    if(isset($_POST['subLivro'])){

      $tit_livro = $_POST['tit_livro'];
      $aut_livro = $_POST['aut_livro'];
      $n_exemplares = $_POST['n_exemplares'];
      $n_paginas = $_POST['n_paginas'];]
      $desc = $_POST['desc'];

      $insere = "insert into tb_livro(tit_livro, aut_livro, n_exemplares, n_paginas, desc)
      values ('$tit_livro', '$aut_livro', '$n_exemplares', '$n_paginas', '$desc')";

      $inseriu = mysql_query($insere);

      if ($inseriu) {
        
        echo "Deu certo";
      }else{

        echo "deu ruim";
      }

  }
  

 ?>
</body>
 </html>