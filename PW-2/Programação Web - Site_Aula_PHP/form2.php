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
        <h4>CBSK anuncia restante da Seleção Brasileira de Skate de 2019</h4>
        <h5>29/03/2019</h5>
        <p>Depois de ter anunciado parte da Seleção Brasileira de Skate de Park e Street Masculino e Feminino...<br /><a href="https://triboskate.ativo.com/noticias/conheca-a-selecao-brasileira-de-skate/">Continue Lento</a></p>
        <p></p>
        <h4>Festa lançamento adidas Rodrigo x Busenitz</h4>
        <h5>31/03/2019</h5>
        <p>No último domingo, 17 de março, pudemos vivenciar a verdadeira história por trás do novo colorway assinado por Rodrigo TX...<br /><a href="https://olhardigital.com.br/dicas_e_tutoriais/noticia/como-encontrar-o-local-onde-foram-tiradas-as-suas-fotos-com-o-android/84165">Continue Lento</a></p>

      </div>
      <div id="content">
        <!-- insert the page content here -->
        <div class="text">
                    
            

            
<div class="text">
    <h1 class="prod">Obrigado pelo pedido </h1> 
    <h2 class="prod">Entraremos em contato</h2>
</div>

<div class="Formumario">
<form>
    <fieldset class="prod">
        <legend> Dados do seu pedido </legend><br><br>
        <table class="prod" cellspacing="5">
            





            <p> Nome : <?php echo $_POST['nome']; ?> </p>
            <p> Sobrenome : <?php echo $_POST['sobrenome']; ?> </p>
            <p> RG : <?php echo $_POST['rg']; ?> </p>
            <p> CPF: <?php echo $_POST['cpf']. " - " .$_POST['cpf2']; ?> </p>
            <p> Endereço : <?php echo $_POST['endereco']; ?> </p>
            <p> N° : <?php echo $_POST['numero']; ?> </p>
            <p> CEP : <?php echo $_POST['cep']. " - " .$_POST['cep2']; ?> </p>
            <p> E-mail : <?php echo $_POST['email']; ?> </p>
            <p> Telefone : <?php echo $_POST['telefone']; ?> </p>
            <p> Skate : <?php echo $_POST['skate']; ?> </p>
            <p> Quantidade : <?php echo $_POST['Quant']; ?> </p>
          


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
