<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<style>
			body {
				height: 100%;
				background: #c5d8e4;
				font-family: arial, sans-serif;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}
			.botao-voltar {
				justify-content: center;
				padding: 10px 30px;
				width: 50px;
				margin-left:  191px; 
				
				color: #1794ac;
				font-size: 14px;
				text-transform: uppercase;
				text-decoration: none;
				display: flex;
				cursor: pointer;
				border-radius: 5px;
				border: 1px solid #1794ac;
				background-color: #fff;
				transition: background-color 200ms ease-in-out, color 200ms ease-in-out, border 200ms ease-in-out;
			}
			.botao-voltar:hover {
				color: #fff;
				border: 1px solid transparent;
				background-color: #1794ac;

			}
		</style>
	</head>

	<body>

<?php
 header("Content-Type: text/html;", true);
 include "conexao.php";

$id_ano = $_POST['id_ano'];
$materia = $_POST['materia'];
$descri = $_POST['descri'];
$cargah = $_POST['cargah'];
$teorica = $_POST['teorica'];
$pratica = $_POST['pratica'];


$sql = mysqli_query($conexao, "UPDATE ement SET materia='$materia', descri='$descri', cargah='$cargah', teorica='$teorica', 
pratica='$pratica' WHERE id_ano='$id_ano'");
 if ($sql==true)
 {
 echo "<h1> Alteração efetuada com sucesso! </h1<br>";
 }
 else
 {
 echo "<h1> Error: Alteração cancelada </h1>";
 }
 echo "<br><br>
       <a class=botao-voltar href=ementarioProf.php><span> Voltar </a></span>";
?>

	</body>
</html>