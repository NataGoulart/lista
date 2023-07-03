<?php
  include("conecta.php");
    $nome="";
    $email="";
    $telefone="";

  if(isset($_GET["email"]))
  {
    $email=$_GET["email"];
    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE email='$email'");
    $resultado = $comando->execute();
    while($linha=$comando->fetch() )
    {
      $nome=$linha["nome"];
      $email=$linha["email"];
      $telefone=$linha["telefone"];

    
    }

    
  }  
?>

<div class=tudo><?php
     include("conecta.php");
    $comando = $pdo->prepare("SELECT * FROM cadastro");
    $resultado = $comando->execute();
    while( $linhas = $comando->fetch() )
    {
        
        $id = $linhas["id"];
        $Usuario =  $linhas["nome"];
        $Senha =  $linhas["email"];
        $City =  $linhas["telefone"];
  
        
        echo( "Id: $id / Nome: $Usuario / Email: $Senha / Telefone: $City <br>");
    
    }
    ?>
    <?php
  include("conecta.php");
    $id="";
    $nome="";
    $email="";
    $telefone="";

  if(isset($_GET["email"]))
  {
    $email=$_GET["email"];
    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE email='$email'");
    $resultado = $comando->execute();
    while($linha=$comando->fetch() )
    {
      $id=$linha["id"];
      $nome=$linha["nome"];
      $email=$linha["email"];
      $telefone=$linha["telefone"];

    
    }
  }
?></div>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" href="imagens/icone2.png" type="image/x-icon">
    <style>
        body{
            background-image:url("imagens/cadastro2.png");
            background-size: 170%;
        }
    
    </style>
</head>
<body>
<h2 class=titulo>Cadastrantes aqui:</h2>

    <section class="area-login">
        <div class="login">

        
        <form action="crud.php" method="post">
            <input type="text" name="id" placeholder="ID" autofocus> 
            <input type="text" name="nome" placeholder="NOME" autofocus> 
            <input type="text" name="email" placeholder="E-MAIL" autofocus>
            <input type="text" name="telefone" placeholder="TELEFONE" autofocus>

            
                
                <div class="icone2"><img src="imagens/icone2.png" alt="icone" width="30px"></div>
                <div class="icone3"><img src="imagens/icone3.png" alt="icone" width="27px"></div>
                <div class="icone4"><img src="imagens/icone4.png" alt="icone" width="37px"></div>
                <button class="botoes" name="inserir" type="submit">Inserir</button>
                <button class="botoes" name="excluir" type="submit">Excluir</button>
                <button class="botoes" name="alterar" type="submit">Alterar</button>
                <h2 class=sele>*Selecionar ID para alterar/excluir</h2>
            
        </form>



    </section>
</body>
</html>