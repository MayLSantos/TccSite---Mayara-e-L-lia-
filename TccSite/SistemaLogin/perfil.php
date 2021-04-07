<!--bloquear acesso para url-->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title> Perfil </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!---CSS--->
    <link rel ="stylesheet" type="text/css" href="../CSS/style.css">

    <!--JS-->
    <link rel="stylesheet" type="text/js" href="../Js/funcao.js">

    <!--- Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

  <body  class="fundo">

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
          </ul>
        </nav>

        <div class="pesquisa">
          <input type="text" id="busca" placeholder="Pesquise aqui">
          <button type="button" name="busque">Buscar</button>
        </div>

        <ul>
            <li><a id="Sair" href="sair.php">Sair</a></li>
        </ul>

      </div>
    </header>

    <main>

        <!--Ambiente do peril-->
        <div class="parte1">

          <div>
            <a href="#"> <img src="avatar.png" width= 80%> </a>
          </div>

          <div>
            <label> Dados pessoais </label>
            <h2> Bem vindo(a) </h2>
            <label> Em breve mais novidades por aqui! </label>
          </div>

        </div>

        <div class="parte2">

          <div class="botões">

            <button type="button" name="tccPublic" id="publiTcc">
               <a href="../Tcc/formulario.html" id="publiTcc"> Publicar um Tcc  </a>
             </button>

            <button type="button" name="#" id="editarInfo">
                <a href="#" id= "editarInfo"> Editar informações </a>
            </button>

            <button type="button" name="#" id="OrgArquivos">
                <a href="#" id="OrgArquivos"> Organizar arquivos  </a>
            </button>

          </div>

          <div class="arquivosPublicados">

            <h3>Arquivos Publicados</h3>

            <label> Vazio </label>

          </div>

        </div>


    </main>

  </body>
</html>
