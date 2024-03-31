<html>
<head>
<title>Validar Login</title>
</head>
<body>
<?php
include "conexao.php";
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$sql = mysqli_query($conexao,"SELECT * FROM login WHERE usuario='$usuario' AND
senha='$senha'");
$row = mysqli_num_rows($sql);
if ($row > 0)
{
header("Location:ementarioProf.php");
}
?>
</body>
</html>