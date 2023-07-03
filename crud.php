
        
        <?php
        $id=$_POST["id"];
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        include("conecta.php");
    
        
        if (isset($_POST["inserir"])) {
            if (!empty($email) && !empty($nome) && !empty($telefone)) {
                $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$id', '$nome','$email','$telefone')");
                $resultado = $comando->execute();
                header("Location: index.php");
            } else {
                // Redirecionar para página de cadastro com mensagem de erro
                header("Location: index.php?erro=1");
            }
        }
        
        if (isset($_POST["excluir"])) {
            $comando = $pdo->prepare("DELETE FROM cadastro WHERE id='$id'");
            $resultado = $comando->execute();
            header("Location: index.php");
        }
        
        if (isset($_POST["alterar"])) {
            $comando = $pdo->prepare("UPDATE cadastro SET nome='$nome',email='$email',telefone='$telefone' WHERE id='$id'");
            $resultado = $comando->execute();
            header("Location: index.php");
        }
        
        if (isset($_POST["listar"])) {
            header("Location: index.php?email=$email");
        }
        
        ?>
        
