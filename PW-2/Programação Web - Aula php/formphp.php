<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
 <head>
 <title> Login </title>
 <style type="text/css">
 	.form{
 		width: 200px;
 		height: 100px;
 		position: absolute;
 		top: 50%;
 		left:40%;
 	}
body{
	background-color: D1F4F9;
}

 </style>
 <meta charset="UTF-8">
 </head>
 <body>

 <div class="form">
 	<?php
 			$login= $_POST["txtlogin"];
 			$senha= $_POST["txtsenha"];

 			if($login =='admin' && $senha =='admin123'){
 			echo "<b> Login efetuado com sucesso </b>";

 			print "Seu Login <b> $login </b> <br>";
 			print "Seu Senha <b> $senha </b> <br>" ;
 		}
 		
	 		else{
	 		echo "Errou .";
	 		echo "Tente novamente";
 	}

 			
 	?>
</div>

 </body>
 </html>

