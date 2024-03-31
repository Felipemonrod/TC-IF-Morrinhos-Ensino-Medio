<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style4.css">
    <title>Document</title>
</head>
<body>
<?php
header("Content-Type: text/html;", true);
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<div class ="back">    
    <h1>Somente Administradores</h1>
        <form method="post" action="">
         <div class="txt">
            <input name="usuario" type="text" autocomplete="off" required>
            <span></span>
            <label>Usuário:</label>
         </div>
         <div class="txt">
            <input name="senha" type="password" autocomplete="off" required>
            <span></span>
            <label>Senha:</label>
         </div>
   <button class="class-for-buttons" type="submit" name="entrar">Entrar</button>   
   <button class="class-for-buttons" type="submit" name="cadastrar">Cadastrar Usuário</button>       
</div>   
</form>
</div>

<!-- <button type="submit" name="voltar"> Voltar </button> -->
</body>
</html>
<?php
// DEFINIR VOLTAR PARA A PAG ANTERIOR
// if (isset($_POST['voltar'])):
//     header("Location:TC/index.php");
//     endif;

if (isset($_POST['entrar'])):
include "validarLogin.php";
endif;
if (isset($_POST['cadastrar'])):
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];
if ($usuario != "" && $senha != "")
{
session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
header("Location:validarCadastro.php");
}
else
{
echo "<span> Usuário e Senha informado incorretamente! </span>";
return 0;
}
endif;
?>
</body>
</html>