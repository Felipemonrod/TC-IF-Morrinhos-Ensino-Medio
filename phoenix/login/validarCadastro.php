<?php
header("Content-Type: text/html;", true);
?>
<html>
<head>
<link rel="stylesheet" href="style4.css">    
<title>Cadastro de Usuários</title>
</head>
<body>
<div class="back">    
    <h1>Cadastro de Usuário</h1>
    <form method="post" action="">
        <div class="txt">          
              <input type=text name="senhacolocada" autocomplete="off" type="password">
              <span></span>
              <label>Senha do Administrador:</label> 
        </div>
        <br>
            <button class="class-for-buttons" type="submit" name="confirmar"> Confirmar </button>
            <button class="class-for-buttons" type="submit" name="voltar" > Voltar </button>
    </form>   
</div>     
</body>
</html>
<?php

if (isset($_POST['confirmar'])):
include "conexao.php";


$admin = "SELECT * FROM adm";
$chefes = mysqli_query($conexao, $admin);

while($password = mysqli_fetch_assoc($chefes)){
    $senhaadm = $password['senha'];
}


session_start();
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$senhacolocada = $_POST['senhacolocada'];
 
?> 
<html>
<head>
<link rel="stylesheet" href="style8.css">    
</head>    
<div class="alert"> 
    <?php
    if ($senhacolocada == $senhaadm){
    $sql=mysqli_query($conexao, "INSERT INTO login(usuario, senha) VALUES('$usuario','$senha')");
    if ($sql==true){
        ?> 
        <div class="sucesso">Usuário Cadastrado!</div> 
        <?php
    }else{
        ?> 
        <div class="erro">Cadastro de usuário cancelado!</div> 
        <?php    
    }
    }else{
    ?> 
    <div class="erro">Você não tem permissão!</div> 
    <?php    
    return 0;
    }
    endif;
    ?> 
</div>
</html> 
<?php

if (isset($_POST['voltar'])):
header("Location:login.php");
endif
?>