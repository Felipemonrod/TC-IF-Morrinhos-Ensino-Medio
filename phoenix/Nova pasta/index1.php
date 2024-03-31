<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Phoenix</title>
    <link rel="icon" href="imgs\icon_teste.png" type="image/icon type">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <?php
    include("conexao.php");
    include("Areas.php");
    include("Perfil.php");

    ?>
    <!--hello word with blue background-->
    <div id="pt_01">
        <div id="text">
            <h1> Hello <br> World!</h1>
            <p>Técnico em Informática</p>
        </div>

        <img id="bola01" src="imgs\bola_inicio.png">
        <img id="bola02" src="imgs\bola_inicio.png">
        <img id="bola03" src="imgs\bola_inicio.png">
        <img id="bola04" src="imgs\bola_inicio.png">

        <img id="seta" src="imgs\arrow_down2.svg">
    </div>

    <!-- about -->
    <div id="pt_02">
        <div id="sobre">
            <div id="container_prog">
                <img id="programando" src="imgs\vector_hands_pc2.svg">
            </div>
            <p>O curso de Informática tem como objetivo formar profissionais técnicos de
                nível médio, com elevado grau de responsabilidade social e que contemple um novo
                perfil para saber fazer e gerenciar atividades teóricas, projetos, implementação de
                códigos, avaliação, suporte e manutenção de sistemas, de tecnologias que
                envolvam processamento e transmissão de dados, incluindo hardware e software,
                aspectos organizacionais e humanos, tudo isso visando o conhecimento para
                aplicações de produtos tecnológicos do dia-a-dia</p>
            <p>Ao longo do curso, o aluno estudará disciplinas relativas à formação geral
                (Língua Portuguesa, Matemática, Geografia, Biologia, Sociologia etc.) e à formação
                profissional (Redes de Computadores, Lógica de Programação, Manutenção de
                Computadores, Desenvolvimento de Projetos e Sistemas etc.). As aulas acontecem
                nos turnos matutino e vespertino, com atividades teóricas e práticas, nas salas de
                aula e nos laboratórios de informática.
            </p>
            <br>
            <div id="info">
                <button class="faux_btn" style="width: 325px;">Coordenador Odilon Fernandes Neto <br>
                    (odilon.neto@ifgoiano.edu.br)</button>
                <button class="faux_btn" style="margin-left:65px; margin-right: 65px;">3 ano</button>
                <button class="faux_btn">Diurno</button>
            </div>
            <div class="clear"></div>     <br>  
        </div> <br> <br> <hr> <br> 
    </div>

    <!--perfil profissional-->
    <?php   $PerfilProfissional = new Perfil();
            $PerfilProfissional->CriarCapacidades();?>

    <div id="pt_03">
        <h1 id="Perfil"> #Perfil Profissional de <br> Conclusão de Curso</h1>
        <p>O profissional egresso do curso técnico de nível médio integrado em Informática do campus Morrinhos do IF
            Goiano deve ser capaz de:</p>
        <br> <br>
        <div id="container_page">
            <img id="pagina" src="imgs\vector_page.svg">
        </div>

        <div id="competencias">
            <table>
                <tr>
                    <td colspan="2">
                        <p><?php $PerfilProfissional->ImprimirCapacidades(0); ?></p>
                    </td>
                </tr>
                <tr style="margin-left:-60px ;">
                    <td>
                        <p><?php $PerfilProfissional->ImprimirCapacidades(1); ?></p>
                    </td>
                    <td>
                        <p><?php $PerfilProfissional->ImprimirCapacidades(2); ?></p>
                    </td>
                </tr>
                <tr style="margin-left:-90px ;">
                    <td>
                        <p><?php $PerfilProfissional->ImprimirCapacidades(3); ?></p>
                    </td>
                    <td>
                        <p><?php $PerfilProfissional->ImprimirCapacidades(4); ?></p>
                    </td>
                </tr>
                <tr style="margin-left:-60px ;">
                    <td>
                        <p><?php $PerfilProfissional->ImprimirCapacidades(5); ?></p>
                    </td>
                    <td>
                        <p><?php $PerfilProfissional->ImprimirCapacidades(6); ?></p>
                    </td>
                </tr>
                <tr style="margin-left:130px;">
                    <td colspan="2" style="width:250px">
                        <p><?php $PerfilProfissional->ImprimirCapacidades(7); ?></p>
                    </td>
                </tr>
            </table>
        </div> <br> <br>

    </div>
    <hr>

    <!--Area de Atuação-->
    <?php   $AreasDeAtuacao = new Areas();
            $AreasDeAtuacao->CriarAreas();?>

    <div id="Atuacao">
        <br>
        <h1 class="titulo"> #Areas de Atuação</h1>
        <p class="subtitulo"> Instituições públicas e privadas e do terceiro setor que demandem sistemas computacionais.
        </p> <br> <br>
        <table id="areas">
            <tr>
                <td>
                     <?php $AreasDeAtuacao->ImprimirArea(0);?>
                </td>
            
                <td>
                     <?php $AreasDeAtuacao->ImprimirArea(1);?>
                </td>
            </tr>
            <tr>
                <td>
                     <?php $AreasDeAtuacao->ImprimirArea(2);?>
                </td>
                <td>
                     <?php $AreasDeAtuacao->ImprimirArea(3);?>
                </td>
            </tr>
        </table>
        <hr> <br> <br>
    </div>

    <!--Ementário-->
    <div id="ementario">
        <h1 class="titulo"> <a href='ementario.php'> #Ementário </a></h1>
        <p class="subtitulo"> Abaixo estão as matérias que serão estudadas durante seu ensino médio. Clique em cada uma
            delas para receber informações melhor detalhadas!</p> <br> <br>
        <br> <br><br>
        <div id="container_anos">
            <div class="ano">


                <div class="dot">
                    <?php
                    $ementa1ano = "SELECT ano, materia FROM ement WHERE ano='1ºAno'";
                    $ementario1ano = mysqli_query($conexao, $ementa1ano);

                    echo "<p> <a href='ementario.php#1_ano'> 1° ano </a></p>";
                    ?>
                </div>
                <div class="list">
                    <div class="interior">
                        <ul>
                            <?php
                            while ($row_materias = mysqli_fetch_assoc($ementario1ano)) {
                                $n = $row_materias['materia'];
                                echo "<li>";
                                echo "<a href='ementario.php#$n'> $n</a>";
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

                    echo "<p><a href='ementario.php#2_ano'> 2° ano </a></p>";
                    ?>
                </div>
                <div class="list">
                    <div class="interior">
                        <ul>
                            <?php
                            while ($row_materias = mysqli_fetch_assoc($ementario2ano)) {
                                $n = $row_materias['materia'];
                                echo "<li>";
                                echo "<a href='ementario.php#$n'> $n</a>";
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

                    echo "<p> <a href='ementario.php#3_ano'> 3° ano </a></p>";
                    ?> </div>
                <div class="list">
                    <div class="interior">
                        <ul>
                            <?php
                            while ($row_materias = mysqli_fetch_assoc($ementario3ano)) {
                                $n = $row_materias['materia'];
                                echo "<li>";
                                echo "<a href='ementario.php#$n'> $n</a>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div><hr>
        <br> <br>
        
    </div>

    <!--Professores-->
    <div id="profs">
        <h1 class="titulo"> #Professores</h1>
        <p class="subtitulo"> A seguir, os professores que estarão te acompanhando ao longo de três anos! Caso
            esteja interessado, é possível ver seu currículo e os seus feitos durante suas
            carreiras clicando em “Lattes”.
        </p> <br> <br>
        <br>

        <div id="container_professor">

                <?php         
                for ($i=1; $i < 10; $i++) { 
                    $prof = "SELECT * FROM professores WHERE id_prof='$i'";
                    $professor = mysqli_query($conexao, $prof);
    
                    $row_professor = mysqli_fetch_assoc($professor);
                    $link = $row_professor['lattes'];
                    $prof_img = $row_professor['prof_img'];

                    echo "<div class='professor'>";
                    echo '<img src="'.$prof_img .'">';
                    echo "<p class='nome_professor'>" . $row_professor['pnome'] . "</p>";
                    echo "<p class='mail_professor'>" . $row_professor['pemail'] . "</p>";
                    echo "<button> <a class='link' href='$link'  target='_blank'> Lattes </a> </button>";          
                    echo "</div>";
                }  
                ?>
            

        </div>

        <br> <br> <br> <br> <br> <br><br>

    </div>

    
    <div id="end">
        <a href="login/login.php">Login</a>
    </div>

</body>

</html>