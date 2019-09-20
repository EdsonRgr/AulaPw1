<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>AulaPHP</title>
</head>
<body>
	<div class="firstdiv">
			<form> <?php
			$nota1 = $_POST['nota1'];
			$nota2 = $_POST['nota2'];
			$nota3 = $_POST['nota3'];
			$nota4 = $_POST['nota4'];
			$total = $nota1 + $nota2 + $nota3 + $nota4;
			$media = $total/4;

			if ($media >= 8 ){
				echo "Parabens, voce foi aprovado <br>";
				echo "e sua media é $media <br>";
			}
			else {
				echo "Voce nao passou";
			}

			

			?>
			<br>
			<a href="index.html"> Voltar </a>
			</form>
			
			
	</div>

</body>
</html>