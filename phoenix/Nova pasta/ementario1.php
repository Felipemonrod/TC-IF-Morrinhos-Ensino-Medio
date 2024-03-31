<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHOENIX Materias</title>
    <link rel="icon" href="imgs\icon_teste.png" type="image/icon type">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <?php
    include("conexao.php");
    ?>
    <div id="pt_01">
        <div id="text">
            <h1> Ementário!</h1>
            <p>Técnico em Informática</p>
        </div>

        <img id="bola01" src="imgs\bola_inicio.png">
        <img id="bola02" src="imgs\bola_inicio.png">
        <img id="bola03" src="imgs\bola_inicio.png">
        <img id="bola04" src="imgs\bola_inicio.png">

        <img id="seta" src="imgs\arrow_down2.svg">
    </div>
        <!-- botão para voltar -->

        <button id="back_btn"><a href="index.php">←</a></button>

    <!--Ementário-->
    <div id="ementario">
        <h1 class="titulo" style="text-indent:80px;"> #Ementário</h1>
        <p class="subtitulo"> Abaixo estão as matérias que serão estudadas durante seu ensino médio. Clique em cada uma
            delas para receber informações melhor detalhadas!</p> <br> <br>
        <br> <br><br>
        <div id="container_anos">
            <div class="ano">

                <div class="dot">
                    <?php
                    $ementa1ano = "SELECT ano, materia FROM ement WHERE ano='1ºAno'";
                    $ementario1ano = mysqli_query($conexao, $ementa1ano);

                    echo "<p> <a href='#1_ano'>1° ano </a> </p>";
                    ?>
                </div>

                <div class="list">
                    <div class="interior">
                        <ul>
                            <?php
                            while ($row_materias = mysqli_fetch_assoc($ementario1ano)) {
                                $n = $row_materias['materia'];
                                echo "<li>";
                                echo "<a href='#$n'> $n</a>";
                                echo "</li>";
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="ano">
                <div class="dot">
                    <?php
                    $ementa2ano = "SELECT ano, materia FROM ement WHERE ano='2ºAno'";
                    $ementario2ano = mysqli_query($conexao, $ementa2ano);

                    echo "<p> <a href='#2_ano'> 2° ano </a> </p>";
                    ?>
                </div>
                <div class="list">
                    <div class="interior">
                        <ul>
                            <?php
                            while ($row_materias = mysqli_fetch_assoc($ementario2ano)) {
                                $n = $row_materias['materia'];
                                echo "<li>";
                                echo "<a href='#$n'> $n</a>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ano">
                <div class="dot">
                    <?php
                    $ementa3ano = "SELECT ano, materia FROM ement WHERE ano='3ºAno'";
                    $ementario3ano = mysqli_query($conexao, $ementa3ano);

                    echo "<p><a href='#3_ano'> 3° ano</a></p>";
                    ?> </div>
                <div class="list">
                    <div class="interior">
                        <ul>
                            <?php
                            while ($row_materias = mysqli_fetch_assoc($ementario3ano)) {
                                $n = $row_materias['materia'];
                                echo "<li>";
                                echo "<a href='#$n'> $n</a>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>


    <div id="materias">

        <!--PRIMEIRO ANO-->
        <div id="primeiro_ano">
            <?php
            include("conexao.php");
            $ementa1ano = "SELECT * FROM ement WHERE ano ='1ºAno'";
            $ementario1ano = mysqli_query($conexao, $ementa1ano);

            echo '<div class="divisoria_anos">
                <div class="div_anos">';
            echo '<p id="1_ano"> 1° ano</p>
                </div>
            </div>';

            while ($row_materias = mysqli_fetch_assoc($ementario1ano)) {
                $n = $row_materias['materia'];
                $id = $row_materias['id_ano'];
                $mat_img =  $row_materias['ement_img'];

                if ($id % 2 != 0) { //id Impar
                    echo '<div class="materia_esquerda">';
                    echo '<div class="container_img_E">
                    <img src="' . $mat_img . '">
                </div>';
                    echo "<h1 class='titulo' id= '" . $n . "'>" . $n  . "</h1>";
                    echo '<p style="text-indent:30px ;">' . $row_materias['descri'] . '</p>
                <br>';
                    echo '<div class="info">
                    <button class="faux_btn" style="width: 300px;">' . $row_materias['cargah'] . '</button>
                    <button class="faux_btn" style="width: 150px; margin-left:15px; margin-right: 15px;">' . $row_materias['teorica'] . '</button>
                    <button class="faux_btn" style="width: 150px; margin-right: 15px;">' . $row_materias['pratica'] . '</button>
                    <button class="faux_btn">' . $row_materias['ano'] . '</button>
                </div>
                <div class="clear"></div> <br> <br> <br>
            </div>';
                } 
                
                else { //id
                    echo '<div class="materia_direita">';
                    echo '<div class="container_img_D">
                    <img src="' . $mat_img . '">
                </div>';
                    echo "<h1 class='titulo' id= '" . $n . "'>" . $n  . "</h1>";
                    echo '<p>' . $row_materias['descri'] . '</p>
                <br>';
                    echo '<div class="info">
                <button class="faux_btn" style="width: 300px;">' . $row_materias['cargah'] . '</button>
                <button class="faux_btn" style="width: 150px; margin-left:15px; margin-right: 15px;">' . $row_materias['teorica'] . '</button>
                <button class="faux_btn" style="width: 150px; margin-right: 15px;">' . $row_materias['pratica'] . '</button>
                <button class="faux_btn">' . $row_materias['ano'] . '</button>

            </div>
            <div class="clear"></div> <br> <br> <br>
        </div>';
                }

            }
            ?>
            <br>
        </div>

        <!--SEGUNDO ANO-->
        <div id="segundo_ano">
            <?php
            $ementa2ano = "SELECT * FROM ement WHERE ano ='2ºAno'";
            $ementario2ano = mysqli_query($conexao, $ementa2ano);

            echo '<div class="divisoria_anos">
                <div class="div_anos">';
            echo '<p id="2_ano"> 2° ano</p>
                </div>
            </div>';

            while ($row_materias = mysqli_fetch_assoc($ementario2ano)) {
                $n = $row_materias['materia'];
                $id = $row_materias['id_ano'];
                $mat_img =  $row_materias['ement_img'];


                if ($id % 2 != 0) { //id Impar
                    echo '<div class="materia_esquerda">';
                    echo '<div class="container_img_E">
                    <img src="' . $mat_img . '">
                </div>';
                    echo "<h1 class='titulo' id= '" . $n . "'>" . $n  . "</h1>";
                    echo '<p style="text-indent:30px ;">' . $row_materias['descri'] . '</p>
                <br>';
                    echo '<div class="info">
                    <button class="faux_btn" style="width: 300px;">' . $row_materias['cargah'] . '</button>
                    <button class="faux_btn" style="width: 150px; margin-left:15px; margin-right: 15px;">' . $row_materias['teorica'] . '</button>
                    <button class="faux_btn" style="width: 150px; margin-right: 15px;">' . $row_materias['pratica'] . '</button>
                    <button class="faux_btn">' . $row_materias['ano'] . '</button>
                </div>
                <div class="clear"></div> <br> <br> <br>
            </div>';
                } else {
                    echo '<div class="materia_direita">';
                    echo '<div class="container_img_D">
                    <img src="' . $mat_img . '">
                </div>';
                    echo "<h1 class='titulo' id= '" . $n . "'>" . $n  . "</h1>";
                    echo '<p>' . $row_materias['descri'] . '</p>
                <br>';
                    echo '<div class="info">
                <button class="faux_btn" style="width: 300px;">' . $row_materias['cargah'] . '</button>
                <button class="faux_btn" style="width: 150px; margin-left:15px; margin-right: 15px;">' . $row_materias['teorica'] . '</button>
                <button class="faux_btn" style="width: 150px; margin-right: 15px;">' . $row_materias['pratica'] . '</button>
                <button class="faux_btn">' . $row_materias['ano'] . '</button>

            </div>
            <div class="clear"></div> <br> <br> <br>
        </div>';
                }
            }
            ?>
            <br>
        </div>

        <!-- TERCEIRO ANO-->
        <div id="terceiro_ano">
            <?php
            $ementa3ano = "SELECT * FROM ement WHERE ano ='3ºAno'";
            $ementario3ano = mysqli_query($conexao, $ementa3ano);

            echo '<div class="divisoria_anos">
                <div class="div_anos">';
            echo '<p id="3_ano"> 3° ano</p>
                </div>
            </div>';

            while ($row_materias = mysqli_fetch_assoc($ementario3ano)) {
                $n = $row_materias['materia'];
                $id = $row_materias['id_ano'];
                $mat_img =  $row_materias['ement_img'];


                if ($id % 2 != 0) { //id Impar
                    echo '<div class="materia_esquerda">';
                    echo '<div class="container_img_E">
                    <img src="' . $mat_img . '">
                </div>';
                    echo "<h1 class='titulo' id= '" . $n . "'>" . $n  . "</h1>";
                    echo '<p style="text-indent:30px ;">' . $row_materias['descri'] . '</p>
                <br>';
                    echo '<div class="info">
                    <button class="faux_btn" style="width: 300px;">' . $row_materias['cargah'] . '</button>
                    <button class="faux_btn" style="width: 150px; margin-left:15px; margin-right: 15px;">' . $row_materias['teorica'] . '</button>
                    <button class="faux_btn" style="width: 150px; margin-right: 15px;">' . $row_materias['pratica'] . '</button>
                    <button class="faux_btn">' . $row_materias['ano'] . '</button>
                </div>
                <div class="clear"></div> <br> <br> <br>
            </div>';
                } else {
                    echo '<div class="materia_direita">';
                    echo '<div class="container_img_D">
                    <img src="' . $mat_img . '">
                </div>';
                    echo "<h1 class='titulo' id= '" . $n . "'>" . $n  . "</h1>";
                    echo '<p>' . $row_materias['descri'] . '</p>
                <br>';
                    echo '<div class="info">
                <button class="faux_btn" style="width: 300px;">' . $row_materias['cargah'] . '</button>
                <button class="faux_btn" style="width: 150px; margin-left:15px; margin-right: 15px;">' . $row_materias['teorica'] . '</button>
                <button class="faux_btn" style="width: 150px; margin-right: 15px;">' . $row_materias['pratica'] . '</button>
                <button class="faux_btn">' . $row_materias['ano'] . '</button>

            </div>
            <div class="clear"></div> <br> <br> <br>
        </div>';
                }
            }
            ?>
            <br>
        </div>







    </div>
</body>

</html>