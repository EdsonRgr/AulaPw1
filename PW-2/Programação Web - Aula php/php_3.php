<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
<head>
<title> Resultado </title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="index.cssz">
</head>



<body>
<div class="text">
	<h1>Formumario de Cadastro</h1> 
	<h2>Obrigado pelo cadastro</h2>
</div>


<!-- 

<?php 
echo 	" O meu nome é ".$_POST['nome'].
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


<img id="img" width="500px" height="200px" src="obg.jpg">

</body>
</html>
