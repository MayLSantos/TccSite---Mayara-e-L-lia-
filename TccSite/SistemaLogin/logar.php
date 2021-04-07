<?php
  session_start();
  include('conexao.php');

  if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
  }

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $senha = mysqli_real_escape_string($conn, $_POST['senha']);

  $query = "SELECT email FROM usuarios WHERE email = '{$email}' and senha = md5('{$senha}')";

  $result = mysqli_query($conn, $query);

  $row = mysqli_num_rows($result);

  if($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $usuario_bd['email'];
    header('Location: perfil.php');
    exit();

  } else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    exit();
  }
?>


<!--php

      if (isset ($_POST ['logalty'])){ //addslashes = protege de codigos maliciosos
        $email = addslashes $_POST ['email'];
        $senha = addslashes $_POST ['senha'];

        //verificar se não está vazio
        if(!empty($email) && !empty($senha)) {
          //conecta com o banco
            $u -> conectar ("tcc_login", "localhost", "root", "" ); //o ultimo é senha
            if ($u ->msgErro == "") { //msgErro esta na classe
              if($us -> logar($emal, $senha)){
                header ("location: perfil.php") //encaminhar para a area do perfil (area privada)
              }else{ ?>

                <div class="msg"> "Email ou senha incorretos" </div>

            
              }

            }else{ ?>

              <div class="msg"> ?> "Erro: ".$u ->msgErro; ?> </div>

            
            }

        }else { ?>

          <div class="msg"> "Preencha tudo corretamente" </div>

      
        }--> 