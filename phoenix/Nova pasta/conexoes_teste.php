<?php
    include("conexao.php");

    echo "#Perfil Profissional de Conclusão de Curso";
    echo "<br>"; echo "<br>";
    echo "O profissional egresso do curso técnico de nível médio integrado em
     Informática do campus Morrinhos do IF Goiano deve ser capaz de: ";
    echo "<br>"; echo "<br>";

    $perfil = "SELECT capacidade FROM perfil_profissional";
    $perfil_profis = mysqli_query($conexao, $perfil);

    while($row_capacidade = mysqli_fetch_assoc($perfil_profis)){
        echo $row_capacidade['capacidade'] . "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";



    echo "#Ementário";
    echo "<br>"; echo "<br>";
    echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    echo "<br>"; echo "<br>";
    
    //tabela1
    $ementa1ano = "SELECT ano, materia FROM ement WHERE ano='1ºAno'";
    $ementario1ano = mysqli_query($conexao, $ementa1ano);
    echo "1° Ano <br>";
    while($row_materias = mysqli_fetch_assoc($ementario1ano)){
        echo $row_materias['materia'] . "<br>";
    }
    echo "<br>";
    echo "<br>";

    //tabela2
    $ementa2ano = "SELECT ano, materia FROM ement WHERE ano='2ºAno'";
    $ementario2ano = mysqli_query($conexao, $ementa2ano);
    echo "2° Ano <br>";
    while($row_materias = mysqli_fetch_assoc($ementario2ano)){
        echo $row_materias['materia'] . "<br>";
    }
    echo "<br>";
    echo "<br>";

    //tabela3
    $ementa3ano = "SELECT ano, materia FROM ement WHERE ano='3ºAno'";
    $ementario3ano = mysqli_query($conexao, $ementa3ano);
    echo "3° Ano <br>";
    while($row_materias = mysqli_fetch_assoc($ementario3ano)){
        echo $row_materias['materia'] . "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";


    
    echo "#Professores";
    echo "<br>"; echo "<br>";
    echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    echo "<br>"; echo "<br>";

    $prof = "SELECT pnome, lattes, pemail FROM professores";
    $professor = mysqli_query($conexao, $prof);
    
    while($row_professor = mysqli_fetch_assoc($professor)){
        echo $row_professor['pnome'] . "<br>";
        echo $row_professor['pemail'] . "<br>";
        echo $row_professor['lattes'] . "<br>";
        echo "<br>";

        //dentro do bd, no lattes: "<a href='http://lattes.cnpq.br/6859709829955408'>Lattes</a>";
    }
?>