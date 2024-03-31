<?php
header("Content-Type: text/html;", true);
?>
<html>
<head>
<title>Ementário</title>
<link rel="stylesheet" href="style5.css">
</head>
<body>
<h1>Ementário para Professores</h1>
<form method="post" action="">

<?php
if (isset($_POST['voltar'])):
    header("Location:login.php");
    endif;

    include("conexao.php");
    
    echo "Por meio do ID é possivel localizar e alterar matérias.";
    echo "<br>"; echo "<br>";


    // para todas as materias
    $ementa = "SELECT * FROM ement";
    $ementario = mysqli_query($conexao, $ementa);

    //materias
    while($row_materias = mysqli_fetch_assoc($ementario)){
        $id_ano = $row_materias['id_ano'];
        
?>        
<html>
    <body>        
        <div>
         <ul>
            <li><br>
                <?php 
                    echo"ID: "; 
                    echo $id_ano . "<br>";
                ?></br>  
            <ul>
                <strong> <?php
                    echo $row_materias['materia'] . "<br>";
                ?></strong>  
                
                <?php
                    echo $row_materias['descri'] . "<br>";
                ?>
                <?php
                    echo "<b>Carga Horária Total: </b>" . $row_materias['cargah'] . "<br>";
                    echo "<b>Teórica: </b>" . $row_materias['teorica'] . "<br>";
                    echo "<b>Prática: </b>" . $row_materias['pratica'] . "<br>";
                ?></strong>    
                <?php
                    echo "<b>Período: </b>" . $row_materias['ano'] . "<br>";
                ?>
                <li > 
                <?php
                    echo " <a href='editar.php?id_ano=$id_ano'> Editar </a>";
                ?>
                </li>
            </li>
            </ul>    
         </ul>       
        </div>    
    </body>
<?php    
    }
?>
<!-- Opicional deixar esse botão (link dele esta no inicio do php): -->
<button class="botao-voltar" type="submit" name="voltar"> Voltar </button>

</form>
</body>
</html>

