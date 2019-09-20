<!DOCTYPE HTML>
<html>

<head>
  <title>Formulario Entregue</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <meta charset="utf-8">
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Hello<span class="logo_colour">World</span></a></h1>
          <h2>Um simples site para testes em php</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
          <li><a href="empresa.html">Empresa</a></li>
          <li class="selected"><a href="formulario.html">Formulario</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
          <h3>Ultimas Noticias</h3>
        <h4>Saiba quais foram os melhores games e programas que entraram esta semana na Google Play</h4>
        <h5>31/03/2016</h5>
        <p>A Google Play é a loja oficial para se obter aplicativos e jogos no Android, sendo que ela recebe novidades diariamente de desenvolvedores de diversas partes do mundo...<br /><a href="https://olhardigital.com.br/dicas_e_tutoriais/noticia/os-melhores-aplicativos-e-jogos-da-semana-para-android/84203">Read more</a></p>
        <p></p>
        <h4>Veja como encontrar o local onde você andou tirando mais fotos com o seu celular com o Android</h4>
        <h5>31/03/2016</h5>
        <p>Uma das tarefas mais comuns a ser feitas com o celular fica para tirar fotos, ainda mais que a cada geração de aparelho que passa, os resultados obtidos com suas câmeras só melhoram...<br /><a href="https://olhardigital.com.br/dicas_e_tutoriais/noticia/como-encontrar-o-local-onde-foram-tiradas-as-suas-fotos-com-o-android/84165">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <div class="text">
                    
                  </div>

                  <!--   -->

                  <body>
<div class="text">
    <h1>Olha ai, mais um Formulario </h1> 
    <h2>Obrigado por mostrar seu dados pra nada</h2>
</div>


<!-- Era um teste, mais deixei comentado por que assim tambem funciona

<?php 
echo    " O meu nome é ".$_POST['nome'].
        "<br> Seu sobrenome é " .$_POST['sobrenome'].
        "<br> Seu RG = é ".$_POST['rg'].
        "<br> Seu CPF é " .$_POST['cpf']. " - " .$_POST['cpf2']. 
        "<br> Seu endereço é " .$_POST['endereco'].
        "<br> O numero da sua casa é " .$_POST['numero'].
        "<br> Seu CEP é " .$_POST['cep']. " - " .$_POST['cep2'].
        "<br> Seu email é " .$_POST['email'].
        "<br> Seu telefone é " .$_POST['telefone'];
?>
-->
<div class="Formumario">
<form>
    <fieldset>
        <legend> Seus Dados </legend>
        <table cellspacing="10">
            <p> Nome : <?php echo $_POST['nome']; ?> </p>
            <p> Sobrenome : <?php echo $_POST['sobrenome']; ?> </p>
            <p> RG : <?php echo $_POST['rg']; ?> </p>
            <p> CPF: <?php echo $_POST['cpf']. " - " .$_POST['cpf2']; ?> </p>
            <p> Endereço : <?php echo $_POST['endereco']; ?> </p>
            <p> N° : <?php echo $_POST['numero']; ?> </p>
            <p> Pais : <?php echo $_POST['pais']; ?> </p>
            <p> UF : <?php echo $_POST['uf']; ?> </p>
            <p> CEP : <?php echo $_POST['cep']. " - " .$_POST['cep2']; ?> </p>
            <p> E-mail : <?php echo $_POST['email']; ?> </p>
            <p> Telefone : <?php echo $_POST['telefone']; ?> </p>
            <p> Time : <?php echo $_POST['time']; ?> </p>
        </table>
    </fieldset>
</form>

</div>

                  

      </div>
    </div>
    <div id="footer">
      <a href="https://github.com/EdsonRgr"> <img src="style/git.png" width="20" height="20 "> 
    </div>
  </div>
</body>
</html>
