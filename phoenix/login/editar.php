<?php
 header("Content-Type: text/html;", true);
 include "conexao.php";
 $id_ano = $_GET['id_ano'];
 $sql=mysqli_query($conexao, "SELECT * FROM ement WHERE id_ano LIKE ".$id_ano);
 $row = mysqli_num_rows($sql);
 if ($row == 0)
 {
 echo "Nenhuma matéria com esse ID foi encontrada.";
 return 0;
 }
 else
 {
     while ($row_materias=mysqli_fetch_array($sql))
     {
        $id_ano = $row_materias['id_ano'];
        $materia = $row_materias['materia'];
        $descri = $row_materias['descri'];
        $cargah = $row_materias['cargah'];
        $teorica = $row_materias['teorica'];
        $pratica = $row_materias['pratica'];
        $ano = $row_materias['ano'];  
     }
 }
?>

<html>
<head>
<title> Editar </title>
<link rel="stylesheet" href="style7.css">
</head>
<body>
    <h1> Editar </h1>
    <div>
        <form method="post" action="validarAlteracao.php">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <span>ID:  <input type=hidden name="id_ano" autocomplete="off" value="<?php echo $id_ano;?>"><?php echo $id_ano;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Matéria:</span>
                        </td>
                        <br></br>
                        <td>
                            <input type="text" name="materia" autocomplete="off" value="<?php echo $materia;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Descrição:</span>
                        </td>
                        <td>
                            <input type="text" name="descri" autocomplete="off" value="<?php echo $descri;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Carga Horária:</span>
                        </td><div class="sep"></div>
                        <td>
                            <input type="text" name="cargah" autocomplete="off" value="<?php echo $cargah;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Teórica:</span>
                        </td>
                        <td>
                            <input type="text" name="teorica" autocomplete="off" value="<?php echo $teorica;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Prática:</span>
                        </td>
                        <td>
                            <input type="text" name="pratica" autocomplete="off" value="<?php echo $pratica;?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Ano:</span>
                        </td>
                        <td>
                       <?php echo $ano ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        <div class="botoes">
            <input class="botao-enviar" type="submit" value="Confirmar" >

            <a class="botao-voltar" href="ementarioProf.php"> Voltar </a>
        </div>
    </div>     
    </form>
</body>
</html>