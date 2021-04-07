
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <title> Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!---CSS -->
    <link rel ="stylesheet" type="text/css" href="../CSS/style.css">

    <!--JS-->
    <link rel="stylesheet" type="text/js" href="../Js/funcao.js">

    <!--- Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body class="fundo">

    <header>
      <div class="menu">
        <!--LOGO ou Nome-->
        <img src="../tcclogo.png" id="Icon" width= 6%>
        <!--Menu-->
        <nav>
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="#">Projeto</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a id="entrar" href="login.php">Entrar</a></li>
          </ul>

        </nav>
        <div class="pesquisa">
          <input type="text" id="busca" placeholder="Pesquise aqui">
          <button type="button" name="busque">Buscar</button>
        </div>
      </div>
    </header>

    <main>
      <div class="entrada">

        <form method="POST" class="login" action="logar.php" name="logalty">

          <h2 id="tituloform">Login</h2>

          <div class="entradaform">
            <label> Usuário:</label>
            <input type="email" name="email" placeholder="Digite o seu email" required>
          </div>
          <div class="entradaform">
            <label> Senha:</label>
            <input type="password" name="senha" placeholder="Digite a sua senha" required>
          </div>

          <!--estabelecer função do campo-->
          <div class="entradaform-check">
            <input type="checkbox" checked="checked" name="lembrar" class="checklogin">
            <label class="checklogin"> Lembre-me da senha </label>
          </div>

          <div>
            <button type="submit" id="botão"> Acessar </button>

            <div id="click"> Ainda não tem conta? <a href="cadastro.php"> Se cadastre aqui! </a> </div>
          </div>

        </form>
      </div>
    </main>

  </body>
</html>
